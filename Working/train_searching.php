
<!DOCTYPE html>
<html>
<head>
	<title>Train Search</title>
	<style type="text/css">
		.abc{
			background-color: blue;
			padding:20px;
			word-spacing: 120px;
			font-weight: bold;
			
		}
		div{
			background-color: black;
			color: white;

		}
		body{
			
		background-image: linear-gradient(to right,white,green,indigo,violet);
}
		label{
			font-weight: bold;
			font-style:italic;
			font-size: 30px;	
			color:#104beb ;
		}
		img
	{
		margin-top: 20px;
		margin-left: 20px;
		height: 160px;]
		width: 350px;
	}
	.input{
		border-radius: 10px ;
		width:300px;
		height: 20px;
		}
		#btn{
			width: 90px;
			height: 30px;
			border-radius: 10px;
			margin-left:20px;
			background-color: #eb1022; 
		}
	</style>
</head>
<body>
	<a href="after_login.php" style="margin-left:1150px;background-color: yellow;font-style: italic;font-size: 30px;border-radius: 8px;">Home </a>
	<a href="../login/logout.php" style="float: right;background-color: yellow;font-style: italic;font-size: 30px;border-radius: 8px;">Logout </a>
<form method="POST" action="details.php">
	<img src="download.jpg" class="img"><label style="font-style: italic;color:white;font-size: 110px;margin-left: 30px;margin-top: 10px;background-color: rgba(0,225,0,0.3);">Indian Railway </label>
	<br><br><br><br>
	<label style="color: red">Search Train :</label><br><br>
	<label>From : </label>
	<input type="text" name="from" id="from" class="input" placeholder="Enter the starting location">
	<label> To : </label>
	<input type="text" name="to" id="to" class="input" placeholder="Enter the destination location">
	<input type="submit" value="Search" name="submit" id="btn">
	
</form>
<img src="150168.jpg" style="width: 99%;height: 200px;background-attachment: fixed;">
</body>
</html>