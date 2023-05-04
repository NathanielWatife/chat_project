<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIMPLE WEB APP CHAT</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION['username']))
		{
			include "layouts/header2.php"; 
			include "config.php"; 
		
			$sql="SELECT * FROM `chat`";

			$query = mysqli_query($conn,$sql);
	?>

	<div class="chatpage-container">
		<center>
			<h2>Welcome 
				<span style="color:#dd7ff3;">
					<?php 
						echo $_SESSION['username']; 
					?> 
				!</span>
			</h2>
		</center>
		<center>
			Join the chat
		</center>
		<div class="display-chat">
			<?php
				if(mysqli_num_rows($query)>0)
			{
				while($row= mysqli_fetch_assoc($query))	
				{
			?>
			
			<div class="message">
				<p>
					<span>
						<?php 
						echo $row['username']; 
						?> 
						:</span>
						<?php 
						echo $row['message']; 
						?>
				</p>
			</div>
			
			<?php
				}
			}
				else
			{
			?>
			
			<div class="message">
				<p>
					No Previous Chat Available.
				</p>
			</div>
			
			<?php
			} 
			?>
		</div>

		<form class="form" method="post" action="sendMessage.php">
			<center>
				<input name="msg" class="textarea" placeholder="Type your message here...">
			</center>
			<br>
			<center>
				<button type="submit" class="btn">
					Send
				</button>
			</center>
		</form>
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