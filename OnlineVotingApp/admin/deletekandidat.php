<?php
    include "../config.php";

    $nim = $_GET['nim'];

    $delete = mysqli_query($con,"DELETE FROM foto WHERE nim = $nim");
    header('location: kandidat.php');


?>