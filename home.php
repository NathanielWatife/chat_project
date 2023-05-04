<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SIMPLE WEB APP CHAT</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<!-- Container -->
		<div class="home-container">
			<center>
				<h2>Welcome 
					<span style="color: #dd7ff3;">
					<?php 
					echo $_SESSION['username']; ?> 
					!</span>
				</h2>
			</center>
	
			<center>
				<a href="chatpage.php" class="page">
					Click Here TO Open Chat
				</a>
			</center>
		</div>

	</body>
</html>


<?php
	}
	else
	{
		header('location:index.php');
	}
?>