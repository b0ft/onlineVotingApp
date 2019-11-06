<?php
    session_start();
    include "../config.php";
    if($_SESSION['role'] != 'admin' || empty($_SESSION['role'])){
      header('location: ../login.php');
  }
    $nimsess = $_SESSION['nim'];
    $selectnama = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nimsess'");
    $namaget = mysqli_fetch_array($selectnama);
    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $query = mysqli_query($con,"SELECT * FROM mahasiswa WHERE nim = '$nim' ");
        $check = mysqli_num_rows($query);
        if($check > 0){
            echo "NIM tersebut tidak dapat digunakan.";
        }
        else{
            $tambah = mysqli_query($con,"INSERT INTO mahasiswa VALUES('$nama','$nim','$prodi')");
            header('location:mahasiswa.php');
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
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Online Voting App</div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Beranda</a>
        <a href="kandidat.php" class="list-group-item list-group-item-action bg-light">Voting</a>
        <a href="mahasiswa.php" class="list-group-item list-group-item-action bg-light">Mahasiswa</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary bg-light" id="menu-toggle"><span class="navbar-toggler-icon"></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
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
        <h1 class="mt-4">Mahasiswa</h1>       
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Mahasiswa
        </button><br><br>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input class="form-control" type="text" name="nim">
                        <label for="nim">Nama</label>
                        <input class="form-control" type="text" name="nama">
                        <label for="nim">Prodi</label>
                        <input class="form-control" type="text" name="prodi">
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
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>                
            </tr>
        </thead>
        <tbody>
            <?php
                $queryd = mysqli_query($con,"SELECT * FROM mahasiswa");
                while($data=mysqli_fetch_array($queryd)){
                    echo "<tr>";
                    echo "<td>".$data['nim']."</td>";
                    echo "<td>".$data['nama']."</td>";	
                    echo "<td>".$data['prodi']."</td>";	
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </tfoot>
    </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../DataTables/datatables.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    } );
  </script>
  

</body>

</html>
