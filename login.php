<!DOCTYPE html>
<html>
  <head>
    <!-- title of our page -->
    <title>SIMPLE WEB APP CHAT</title>
    <!-- link to our stylesheet -->
    <link rel="stylesheet" href="style.css">
  </head>
  <!-- body of our page -->
  <body>
    <nav class="navbar">
      <h2>SIMPLE WEB CHAT APP</h2>
    </nav>
<!-- part that verify if the user as an account-->
<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['username'] = $row['username'];
			header('Location: home.php');
		}
		else
		{
			echo "Invalid Email or Password.";
		}
	}
?>
<!-- form for login  -->
  <form class="form" method="post" action="">
    <center>
      <h2>Login to your account</h2>
    </center>
    <!-- button that leads back to the register page if the user have no account -->
    <button class="btn-log">
        <a href="register.php">
          Register
        </a>
    </button>
    <label class="label" for="email">
      Email:
    </label><br>
    <input type="email" class="input" id="email" placeholder="Enter your email" name="email"><br><br>
      
    <label class="label" for="pwd">
      Password:
    </label><br>
    <input type="password" class="input" id="pwd" placeholder="Enter your password" name="password"><br><br>
      
    <center>
      <button type="submit" class="btn">
        Login
      </button>
    </center>

</form>
</body>
</html>