<?php
    session_start();
    include "../config.php";
    $nimsess = $_SESSION['nim'];
    $selectnama = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nimsess'");
    $namaget = mysqli_fetch_array($selectnama);
    $errwarn = "";
    $queryfoto = mysqli_query($con,"SELECT * FROM foto WHERE status = '1'");

    if (isset($_POST['submit'])) {	
        $nim = $_POST['nim'];
        $visi = $_POST['visi'];
        $misi = $_POST['misi'];
        $namacalon = $_POST['namacalon'];
        $target_dir = "../gambar/";
        $base1 = explode(".", $_FILES["gambar"]["name"]);
        $target_file = $target_dir . $_FILES["gambar"]["name"];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        

        if ($_FILES['gambar']['size'] == 0 ) {
            $errwarn = "File tidak dapat ditemukan.";
        }
        
        
        // Check if file already exists
        else if (file_exists($target_file)) {    
            $errwarn = "File sudah ada.";
            $uploadOk = 0;
        }
        // Check file size
        else if ($_FILES["gambar"]["size"] > 10000000) {
            $errwarn = "Ukuran file terlalu besar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $errwarn = "Hanya file JPG, PNG & JPEG yang dapat di unggah.";
            echo $imageFileType;
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        else if ($uploadOk == 0) {
            $errwarn = "Maaf, file belum terunggah.";
        // if everything is ok, try to upload file
        } else {
        
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $tambahFoto = mysqli_query($con,"INSERT INTO foto(nim,nama,namacalon,visi,misi,status) values('$nim','$target_file','$namacalon','$visi','$misi','1')");        
            echo "Berhasil";
            header('location: kandidat.php');
  
            } 
            else {                
                $errwarn = "Maaf, file tidak terunggah.";
            }    
        }
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Voting App - Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Online Voting App</div>
      <div class="list-group list-group-flush">
      <a href="index.php" class="list-group-item list-group-item-action bg-light">Beranda</a>
        <a href="kandidat.php" class="list-group-item list-group-item-action bg-light">Voting</a>
        <a href="mahasiswa.php" class="list-group-item list-group-item-action bg-light" id="active">Mahasiswa</a>
        <a href="prodi.php" class="list-group-item list-group-item-action bg-light">Prodi</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary bg-light" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hi <?php echo $namaget['nama']; ?> 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../logoutproc.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">  
      <?php echo $errwarn; ?>          
        <h1 class="mt-4">Voting</h1>
           <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Kandidat
        </button><br><br>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nim">NIM Calon</label>
                        <input class="form-control" type="text" name="nim">
                        <label for="namacalon">Nama Calon</label>
                        <input class="form-control" type="text" name="namacalon">
                        <label for="visi">Visi</label>
                        <input class="form-control" type="text" name="visi">
                        <label for="misi">Misi</label>
                        <textarea name="misi" class="form-control" style="resize: none;" ></textarea>
                        <center><h5>Masukkan foto kandidat</h5>
                        <input type="file" name="gambar" id="gambar" class="btn btn-primary btn-outline-dark"><br><br>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            </form>
            </div>
        </div>
        </div>

      <form method='get'>
        <div class="container-fluid">
            <div class='row'>
                <?php 
                    while($row = mysqli_fetch_array($queryfoto)){                        
                        echo    "<div class='col-md-2' style='padding: 16px'>
                                    <center><img src='".$row['nama']."'  width = '205px' height = '286px'><br>
                                    <label id='labelnama'>".$row['namacalon']."</label><br>
                                    <a href='editkandidat.php?nim=".$row['nim']."'><button type=button class='btn btn-success'>Edit</button></a>
                                    <button class='btn btn-warning' type='submit'>View</button>                                    
                                    <a href='deletekandidat.php?nim=".$row['nim']."'><button type=button class='btn btn-danger'>Delete</button></a></center>
                                </div>";
                                
                    }
                ?>
            </div>
        </div>
                </form>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
