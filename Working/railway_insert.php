<?php
//echo "Hello world";

$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
if(empty($username) ||empty($password) || empty($gender)||empty($email)||empty($phone) )
{
	
	echo  '<script>alert("All fields should be filled ")</script>';

}
else
{
	$conn=new mysqli("localhost","root","","signup");
	if(mysqli_connect_error())
		die("Connect Error :".mysqli_connect_error());
	else{
		$select="SELECT email from details where email =? Limit 1";

		$insert =" INSERT into  details (username,password,gender,email,phone) VALUES(?,?,?,?,?)";
		// now prepare statement
 		// first will prepare the email and check if same email id exists or not

		$stmt=$conn->prepare($select); 
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows();

		if($rnum==0)
		{
			$stmt->close();

			$stmt=$conn->prepare($insert);
			$stmt->bind_param("sssss",$username,$password,$gender,$email,$phone);
			$stmt->execute();

			echo "New record saved";

			include  'C:\xampp\htdocs\Working\home.php'; // used to connect two different files
		}
		else
		{
			echo "<h1>Someone else also registered with the same email id:</h2>";
		}
		}
}

?>