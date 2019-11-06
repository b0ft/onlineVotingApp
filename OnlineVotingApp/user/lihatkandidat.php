<?php
    session_start();
    include '../config.php';
    $nimg = $_SESSION['nim'];
    $queryuser = mysqli_query($con,"SELECT * FROM users WHERE nim = '$nimg'");
    $getstatus = mysqli_fetch_assoc($queryuser);
    if($_SESSION['role'] != 'user' || empty($_SESSION['role']) || $getstatus == '1'){
        header('location: ../login.php');
    }
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

    if(isset($_POST['submit'])){
        $type = mysqli_fetch_assoc($queryget);
        $tmbh = mysqli_query($con,"UPDATE foto SET jumlahsuara = jumlahsuara + 1 WHERE nim = '$nimget' ");
        $updt = mysqli_query($con,"UPDATE users SET status = '1'");
        echo $type['jumlahsuara'];
        header('location: terimakasih.php');
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
                    <div class='row' style='padding: 16px'>
                        <div class='col'><h4>NIM </h4></div>
                        <div class='col-md-10'>: <?php echo $nim ?></div>
                    </div>
                    <div class='row' style='padding: 16px'>
                        <div class='col'><h4>Nama </h4></div>
                        <div class='col-md-10'>: <?php echo $namacalon ?></div>
                    </div>
                    <div class='row' style='padding: 16px'>
                        <div class='col'><h4>Visi </h4></div>
                        <div class='col-md-10'>: <?php echo $visi ?></div>
                    </div>
                    <div class='row' style='padding: 16px'>
                        <div class='col'><h4>Misi </h4></div>
                        <div class='col-md-10'>: <?php echo $misi ?></div>
                    </div>
                </div>
                <div class='col-md-12' style='padding: 16px'>
                    <form method='post'>
                        <a href="index.php"><center><button class='btn btn-danger' type='button' name='kembali'>Kembali</button></a>
                        <button class='btn btn-dark' data-toggle="modal" type="button" data-target="#exampleModal">Pilih Kandidat Ini</button></center>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Ketika anda sudah mengklik yakin, anda tidak dapat kembali melihat kandidat lain lagi.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary" name="submit">Yakin!</button>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>