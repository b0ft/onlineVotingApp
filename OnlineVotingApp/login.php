<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="content" id="isilogin">
					<h1>Online Voting App</h1>
					<form method="post" action="loginproc.php">			
						<div class="form-group">
							<label>NIM</label>
							<input type="text" name="nim" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" name="submit" class="btn btn-info">Login</button>
					</form>
				</div>	
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>