<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) 
{
	function validate($data)
	{
		$data=trim($data); // it removes the whitespace from thr data
		$data=stripslashes($data); // it remove backslash from the data
		$data=htmlspecialchars($data); // convert the predefined characters '<' and '>' into html entities
		return $data;

	}
	$uname=validate($_POST['uname']);
	$pass=validate($_POST['password']);

	if (empty($uname)) {
		header("Location: user.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: user.php?error=Password is required");
	    exit();
	}

	else{
		$sql="SELECT * FROM details WHERE username='$uname' and password='$pass'";
		$result=mysqli_query($conn,$sql);

		if (mysqli_num_rows($result)=== 1)
		 {
			$row=mysqli_fetch_assoc($result);

			if($row['username']===$uname && $row['password']===$pass)
			{
				$_SESSION['username']=$row['username'];
				header("Location: ../Working/Prediction_page.php");
				exit();
			}
			else{
				header("Location: user.php?error=Incorrect username or password ");
				exit();
			}
		}
		else{
			header("Location: user.php?error=Incorrect username or password ");
			exit();
		}
	}
}
else{
		header("Location :../signup.php");
		exit();
}
