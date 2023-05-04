<?php

include "config.php";

if($_POST)
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

	$query = mysqli_query($conn,$sql);
	
	if($query)
	{
		session_start();
		$_SESSION['username'] = $username;
		header('Location: home.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
}
?>