<?php

session_start();
if (isset($_SESSION['username'])) {
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Home </title>
	</head>
	<body>
	<h1> Hello <?php 
	echo $_SESSION['username'];
	?>
	</h1>
	<a href="logout.php" >Logout </a>
	</body>
	</html>
	<?php
}
else{
	header("Location: user.php");
	exit();
}
?>