<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page :</title>
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
			   background-image: url("download2.jpg");
			   background-repeat: no-repeat;
			   background-attachment: fixed;
			   background-size: 100% 100%;
		}
		.btn{
			width: 90px;
			height: 30px;
			position: absolute;
			left: 290px;
			background-color: #057cf2
		}
		.inp{
			background-color: #d7d9db;
			border-radius: 10px;
			width: 200px;
			height: 20px;

		}
	</style>
</head>
<body>
	<center style= "color:blue;font-size: 70px;margin-bottom: 30px;margin-left: 50px;">Sign up </center>

	<center>
		<div id="frm">
		<form action="railway_insert.php" method="POST">
		<label>Username :</label>
		<input type="text" name="username" id="username" class="inp"><br><br>
		<label>Password :</label>
		<input type="password" name="password" id="password" class="inp"><br><br>
		<label style="margin-right: 10px;">Gender :</label>
		<select id="gender" name="gender" style="padding-left: 60px;padding-right: 60px;"class="inp">
			<option name="m" value="m" class="inp">Male</option>
			<option name="f" value="f" class="inp">Female</option>
		</select><br><br>
		<label>E-mail:</label>
		<input type="email" name="email" id="email" class="inp"><br><br>
		<label>Phone :</label>
		<input type="text" name="phone" id="phone" class="inp"><br><br>
		<input type="submit" name="submit" value="submit" class="btn">
	</div>
		
	</form>
</center>
</body>
</html>