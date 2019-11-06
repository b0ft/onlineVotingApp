<?php
    session_start();
    include '../config.php';
    $queryfoto = mysqli_query($con,"SELECT * FROM foto WHERE status = '1'");
    
    $nimget = $_GET['nim'];

    $queryget = mysqli_query($con,"SELECT * FROM foto WHERE nim = '$nimget' ");
    foreach($queryget as $data){
        $nim = $data['nim'];
        $nama = $data['nama'];
        $namacalon = $data['namacalon'];
        $visi = $data['visi'];
        $misi = $data['misi'];
    }

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
        <center><h1>Profil Kandidat</h1></center><br>
            <div class='row' style='-webkit-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                -moz-box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68);
                box-shadow: 0px 0px 21px -5px rgba(0,0,0,0.68); background-color: white'>
                <div class='col-md-3' style='padding: 20px; border: 1px solid black;'>
                    <center><img src="<?php echo $nama ?>" width = '205px' height = '286px'></center>
                </div>
                <div class='col-md-9' style='padding: 20px; border: 1px solid black; '>
                    <table class="table table-striped table-dark" width='300px' style='right: 100'>
                        <tbody>
                            <tr>
                            <th width='30px'>NIM</th>
                            <th width='1px'>:</th>
                            <td><?php echo $nim ?></td>
                            </tr>
                            <tr>
                            <th>Nama</th>
                            <th>:</th>
                            <td><?php echo $namacalon ?></td>
                            </tr>
                            <tr>
                            <th>Visi</th>
                            <th>:</th>
                            <td><?php echo $visi ?></td>
                            </tr>
                            <tr>
                            <th>Misi</th>
                            <th>:</th>
                            <td><?php echo $misi ?>assssssssssssssssssssssssssssssssssssssssssasdddddddddddddddasfkljasildfhghhhhhhhhhhlhhhhhhhhlhlhlhlhlhlhlhlhlhlhlhlhlhlhlhlhh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>