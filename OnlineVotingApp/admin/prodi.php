<?php
    session_start();
    include "../config.php";
    $nimsess = $_SESSION['nim'];
    $selectnama = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nimsess'");
    $namaget = mysqli_fetch_array($selectnama);
    // if(isset($_POST['submit'])){
    //     $nim = $_POST['nim'];
    //     $nama = $_POST['nama'];
    //     $prodi = $_POST['prodi'];
    //     $query = mysqli_query($con,"SELECT * FROM mahasiswa WHERE nim = '$nim' ");
    //     $check = mysqli_num_rows($query);
    //     if($check > 0){
    //         echo "NIM tersebut tidak dapat digunakan.";
    //     }
    //     else{
    //         $tambah = mysqli_query($con,"INSERT INTO mahasiswa VALUES('$nama','$nim','$prodi')");
    //         header('location:mahasiswa.php');
    //     }

    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
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
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
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
