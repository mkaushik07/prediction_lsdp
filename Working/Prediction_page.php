<!DOCTYPE html>
<html>
<head>
	<title>Predictipn Page : </title>
</head>
<body>
	<div id="div1"> 
	<marquee class="title" direction="left" loop=infinite>Let's Predict The Rainfall</marquee>
	<a href="../login/logout.php" style="text-decoration: none;color: red" class="log">Logout</a>
</div>

<a href="../prediction/index.html" class="link1"> Predict  </a>
<a href="rainfall_about.php" class="link2"> About Us </a>

 <div style="background-color: white;position: absolute;bottom: 0%;width: 99%;margin-left:0px;height: 40px;color: black;text-align: center;justify-content: center;padding-top: 5px;font-weight: bold;font-size:30px;">
	@rainfallPrediction.com
</div> 
</body>
</html>

<style type="text/css">
	body{
		background: url('https://m.economictimes.com/thumb/msid-64820747,width-1200,height-900,resizemode-4,imgsize-244634/rainfall.jpg');
		background-attachment: fixed;
		background-size: 100% 100%;
		background-repeat: no-repeat;
	}
	#div1{
		background: green;
	}
	.title{
		font-size: 30px;
		
		color: white;
		font-family: 'Times New Roman', serif;
		font-style: italic;
		font-weight: bold;
	}
	.link1{
		margin-left: 200px;
		position: absolute;
		height: 60px;
		text-align: center;
		justify-content: center;
		padding-top: 50px; 
		background: green;
		width: 200px;
		margin-top: 200px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		border: 2px solid yellow;
		box-shadow: 10px 10px blue;
		text-decoration: none;
		
	}
	.link2{
		margin-left: 800px;
		position: absolute;
		height: 60px;
		text-align: center;
		justify-content: center;
		padding-top: 50px; 
		background: green;
		width: 200px;
		margin-top: 200px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		border: 2px solid yellow;
		box-shadow: 10px 10px blue;
		text-decoration: none;
		
	}
	.log{
		background-color: white;
		margin-top: 50px;
		position: absolute;
		right: 10px;
		width: 70px;
		height: 30px;
		font-weight: bold;
		font-size: 20px;
	}
	
</style>