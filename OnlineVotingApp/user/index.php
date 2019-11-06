<?php
    session_start();
    include '../config.php';
    $queryfoto = mysqli_query($con,"SELECT * FROM foto WHERE status = '1'");
    

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
<br>
    <div class='container ' style='background-color: #eaeaea;'>
        <center><h1>Calon Kandidat</h1></center><br>
            <div class='row' style='-webkit-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                -moz-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68); background-color: white'>
                
                <?php 
                    while($row = mysqli_fetch_array($queryfoto)){                        
                        echo    "<div class='col-md-3' style='padding: 16px; '>
                                    <center><img src='".$row['nama']."'  width = '205px' height = '286px'><br>
                                    <h3>".$row['namacalon']."</h3>
                                    <a href='lihatkandidat.php?nim=".$row['nim']."'><button type=button class='btn btn-warning'>View</button></a></center>
                                </div>";
                                
                    }
                ?>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>