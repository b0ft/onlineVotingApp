<?php
    session_start();
    include "../config.php";
    if($_SESSION['role'] != 'admin' || empty($_SESSION['role'])){
      header('location: ../login.php');
  }
    $nimsess = $_SESSION['nim'];
    $selectnama = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nimsess'");
    $namaget = mysqli_fetch_array($selectnama);
    $errwarn = "";
    $queryfoto = mysqli_query($con,"SELECT * FROM foto WHERE status = '1'");
    $nimup = $_GET['nim'];
    $queryupdt = mysqli_query($con,"SELECT * FROM foto WHERE nim = '$nimup' ");
    foreach($queryupdt as $data){
        $nimu = $data['nim'];
        $namacalonu = $data['namacalon'];
        $visiu = $data['visi'];
        $misiu = $data['misi'];
        $path = $data['nama'];
    }

    if (isset($_POST['submit'])) {	
        $nim = $_POST['nim'];
        $visi = $_POST['visi'];
        $misi = $_POST['misi'];
        $namacalon = $_POST['namacalon'];
        $target_dir = "../gambar/";
        $target_file = $target_dir . $_FILES["gambar"]["name"];
        $uploadOk = 1;     
        if ($target_file == "../gambar/") {           
            $updt = mysqli_query($con,"UPDATE foto SET misi = '$misi', namacalon = '$namacalon', visi = '$visi' where nim = '$nim'"); 
            header('location: kandidat.php');  
        }
        else{
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
            $updt = mysqli_query($con,"UPDATE foto SET nama = '$target_file', misi = '$misi', namacalon = '$namacalon',  visi = '$visi' where nim = '$nim'");   
            header('location: kandidat.php');
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>

      <div class="container-fluid">  
      <?php echo $errwarn; ?>          
    <h1 class="mt-4">Edit Kandidat</h1>
        <div class="container-fluid">
            <div class='row'>
            <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <center><img src="<?php echo $path; ?>"  width = '205px' height = '286px'><br></center>
                        <label for="nim">NIM Calon</label>
                        <input class="form-control" type="text" name="nim" value="<?php echo $nimu ?>">
                        <label for="namacalon">Nama Calon</label>
                        <input class="form-control" type="text" name="namacalon" value="<?php echo $namacalonu ?>">
                        <label for="visi">Visi</label>
                        <input class="form-control" type="text" name="visi" value="<?php echo $visiu ?>">
                        <label for="misi">Misi</label>
                        <textarea name="misi" class="form-control" style="resize: none;"><?php echo $misiu ?></textarea>
                        <center><h5>Ganti foto kandidat</h5>
                        <input type="file" name="gambar" id="gambar" class="btn btn-primary btn-outline-dark"><br><br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
            </div>
        </div>

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
