<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form method="post" action="register.php">
		<div>
			<h2>Registering</h2>
		</div>
	<?php include('errors.php');?>
		<div>
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div>
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div>
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div>
			<button type="submit" name="reg_user">Register</button>
		</div>
	</form>
</body>
</html>