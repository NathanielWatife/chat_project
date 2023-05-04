<?php

include "config.php";
session_start();
if($_POST)
{
	$username=$_SESSION['username'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`username`, `message`) VALUES ('".$username."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>