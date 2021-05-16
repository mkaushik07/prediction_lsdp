<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<style type="text/css">
		#frm{
			position: absolute;
			left: 500px;
			top: 150px;
			background-color: #dee3ba;
			padding:100px;
			border-radius: 35px;
		}
		body{
			   background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTTFJr5UOOaPwvqBnRMem5FC-m3gU_aAHs9iw&usqp=CAU");
			   background-repeat: no-repeat;
			   background-attachment: fixed;
			   background-size: 100% 100%;
		}
		
		#user{
			background-color: #d7d9db;
			border-radius: 10px;
			width: 200px;
			height: 20px;
		}
		#pass{
			background-color: #d7d9db;
			border-radius: 10px;
			width: 200px;
			height: 20px;

		}
		#btn{
			width: 90px;
			height: 30px;
			position: absolute;
			left: 290px;
			background-color: #057cf2
		}
		.error{
			background:#F2DEDE;
			color: #A94442;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
			margin:20px auto;
		}
	</style>
</head>
<body>
<div id="frm">
	<form action="login.php" method="POST">
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<h1 style="color: blue;text-align: center">Login </h1><br>
		<label><strong>Username :</strong></label>
		<input type="text" name="uname" placeholder="Enter the username" id="user"><br><br>

		<label><strong>Password :</strong></label>
		<input type="password" name="password" placeholder="Enter the password" id="pass"><br><br><br>

		<button type="submit " id="btn">login</button>
	</form>
</div>
</body>
</html>
</body>
</html>