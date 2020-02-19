<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="week05/css/style.css">
	<link rel="icon" href="Favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Login</title>
</head>

<body>

	<div style="text-align: center;">

		<div class="wrapper fadeInDown">
			<div id="formContent">
				<div class="wrapper">
					<h2>Login</h2>
					<p>Please fill in your credentials to login.</p>
					<form action="week05/include/authenticate.php" method="POST">
						<div class="form-group ">

							<label>Username</label>
							<input type="text" name="username" class="form-control" value="name">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" value="password">
						</div>


						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Login">
						</div>
						<p>Don't have an account? <a href="week05/include/register.php">Sign up now</a>.</p>
					</form>
				</div>
			</div>
		</div>


	</div>

</body>

</html>