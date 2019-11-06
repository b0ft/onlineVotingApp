<?php

	session_start();
	include 'config.php';

	if(isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$password = md5($_POST['password']);
		$query = mysqli_query($con,"SELECT * FROM users WHERE nim = '$nim' AND password = '$password' ");
		$type = mysqli_fetch_assoc($query);
		$check = mysqli_num_rows($query);

		if($check > 0){
			if($type['role'] == 'admin'){
				$_SESSION['role'] = 'admin';
				$_SESSION['nim'] = $type['nim'];
				header('location: admin/index.php');
			}
			else if($type['role'] == 'user'){
				$_SESSION['role'] = 'user';
				$_SESSION['nim'] = $type['nim'];
				header('location: user/index.php');
			}
			else{
				echo "Role tidak dikenal.";
			}
		}

		else{
			echo "Password atau username anda salah.";
		}
	}

?>