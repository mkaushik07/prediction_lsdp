
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
		height: 160px;
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
<form method="POST">
	<img src="download.jpg" class="img"><label style="font-style: italic;color:white;font-size: 110px;margin-left: 30px;margin-top: 10px;background-color: rgba(0,225,0,0.3);">Indian Railway </label>
	<br><br>
	<label style="color: red">Search Train :</label><br><br>
	<label>From : </label>
	<input type="text" name="from" id="from" class="input" placeholder="Enter the starting location">
	<label> To : </label>
	<input type="text" name="to" id="to" class="input" placeholder="Enter the destination location">
	<input type="submit" value="Search" name="submit" id="btn"><br><br><br><br>
	
</form>

</body>
</html>

<?php

if (isset($_POST['from']) && isset($_POST['to']))  {
	
	function validate($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		$data=preg_replace("[a-zA-z]", "A-Z%", $data);
		return $data;
	}
}


$source=validate($_POST['from']);
$destination=validate($_POST['to']);

if(empty($source)){
	header("Location:train_searching.php?error=Source location is required");
	exit();
}
else if(empty($destination))
{
	header("Location:train_searching.php?error=Destination location is required ");
	exit();
}

else
{
	$conn=mysqli_connect("localhost","root","","train_details");
	$object='';
	if (!$conn) {
		echo "Connected not successfully";
	}
	else
	{ $output='';
	  $app='';
		$sql="SELECT * from trains where source ='$source' AND destination='$destination'";
		$result=mysqli_query($conn,$sql);

		$count=mysqli_num_rows($result);

		if($count===0)
		{
			echo "<strong><className=' maan' style ='color:white;font-size:40px;font-style:italic;'>No search Route is found </strong>";
		}
		else{
			$app ='<div class="abc">'."Tno ".''."Train_Name ".''."Platform".' '."Running_Days".' '."Arrival_Time".' '."Departure_Time".' '."Distance".'</div><br/>';
			echo "$app";
			while($row=mysqli_fetch_array($result))
			{	echo "<div>";
				 echo "<table>";
				$tno=$row['trainno'];
				$tname=$row['train_name'];
				$tpf=$row['platform'];
				$trnd=$row['run_day'];
				$tat=$row['arrival_time'];
				$tdt=$row['departure_time'];
				$td=$row['distance'];

				


				//$output.='<div class="def">'.$tno.' '.$tname.' '.$tpf.' '.$trnd.' '.$tat.' '.$tdt.''.$td.'</div><br/>';

				echo "<className='man' style='font-size:20px;'> $tno";
				echo "<className='name' style='margin-left:85px;'>$tname";
				echo "<className='name' style='margin-left:95px;'>$tpf";
				echo "<className='name' style='margin-left:165px;'>$trnd";
				echo "<className='name' style='margin-left:175px;'>$tat";
				echo "<className='name' style='margin-left:185px;'>$tdt";
				echo "<className='name' style='margin-left:145px;'>$td"."<br/><br/>";
				echo "</table>";
				echo "</div>";
			}
		}
	}
}
//echo "$app";
//echo "$output";

?>