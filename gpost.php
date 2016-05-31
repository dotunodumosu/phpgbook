<?php
	$host="localhost"; 
	$user="user";
	$pass="pass";
	$dbname="database";
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
		{
		echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
		}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$sql="INSERT INTO guestbook(name,email,message)  VALUES('$name','$email','$message')";
	if (!mysqli_query($con,$sql))
		{
		die('Error: ' . mysqli_error($con));
		}
	else
	header('Location: guestbook.php');
	mysqli_close($con);
 ?>