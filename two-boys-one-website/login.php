<?php include('server.php') ?>
<!DOCTYPE html>
<html id="testi" lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class="container">
		<div class="rowbottom-buffer">
		</div>
		<div class="row">
			<div class="sides">
			</div>
			<div class="logincontainer">
				<form method="post" action="login.php">
				  	<?php include('errors.php'); ?>
					<h2>Login</h2>
					<label>Username:</label>
					<input type="text" name="username">
					<br><br>
					<label>Password:</label>
					<input type="password" name="password">
					<br><br>
					<button type="submit" name="login_user">Login</button> 
					<br><br>
					<a href="register.php">Register</a>
				</form>
			</div>
			<div class="sides">
			</div>
		</div>
	</div>
</body>

</html>