<?php
    session_start();
    include "../config.php";
    $nimsess = $_SESSION['nim'];
    if($_SESSION['role'] != 'admin' || empty($_SESSION['role'])){
      header('location: ../login.php');
  }
    $selectnama = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nimsess'");
    $namaget = mysqli_fetch_array($selectnama);

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
  <style type='text/css'>
    #chart-container {
    width: 100%;
    height: auto;
}
  </style>
  
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Chart.min.js"></script>
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

      <div class="container-fluid" style="text-align: center;">


    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].namacalon);
                        marks.push(data[i].jumlahsuara);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Jumlah Suara',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
        <?php
          $querycek = mysqli_query($con,"SELECT * FROM foto WHERE status = '1' ");
          $check = mysqli_num_rows($querycek);
          if($check > 0){
            echo "<div id='chart-container'>
            <canvas id='graphCanvas'></canvas>
            </div>";
          }
          else{
            echo "<h1 class='mt-4'>Belum ada voting yang dibuat. Buat sekarang?</h1><p>Klik <a href='kandidat.php'>disini!</p>";
          }
        ?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Chart.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
