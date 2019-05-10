<?php 
session_start(); 
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
}
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Main</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class="logo">
		<h1>Two boys one website</h1>
	</div>
	<div class="nav">
		<ul>
			<li><a href="index.php?logout='1'">logout</a></li>
		</ul>
	</div>
</body>

</html>