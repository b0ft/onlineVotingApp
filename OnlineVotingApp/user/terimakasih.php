<?php
    session_start();
    include '../config.php';
    $nim = $_SESSION['nim'];
    if($_SESSION['role'] != 'user' || empty($_SESSION['role'])){
        header('location: ../login.php');
    }
    $query = mysqli_query($con,"SELECT nama FROM mahasiswa WHERE nim = '$nim'");
    $type = mysqli_fetch_assoc($query);
    $nama = $type['nama'];
    session_unset();
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-color: #eaeaea'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mb-0 h1" href="#">Online Voting App</a>
    </nav>
<br><br><br><br><br>
    <div class='container' style='background-color: #eaeaea;'>
        <div class='row' style='-webkit-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                -moz-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68); background-color: white'>
            <div class='col-md-12' style='text-align: center; padding: 16px;'>
                <h1>Hai <?php echo $nama; ?>. <br>Terimakasih atas partisipasi anda dalam voting ini.</h1>
                <h5>Satu suara sangatlah berharga bagi kami.</h5><br><br>
                <p>Copyright 	&copy; TEAM SUKSES 2019</p>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>