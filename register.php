<!DOCTYPE html>
<html>
  <head>
    <title>SIMPLE WEB APP CHAT</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="navbar">
      <h2>SIMPLE WEB CHAT APP</h2>
    </nav>
    
    <form class="form" method="post" action="addfriend.php">
      <center>
        <h2>Register here</h2>
      </center>
      <button class="btn-log">
        <a href="login.php">login</a>
      </button>
      <label class="label" for="username">
        Username:
      </label>
      <br>
      <input type="text" class="input" id="username" placeholder="Enter username" name="username" required><br><br>

      <label class="label" for="email">
        Email:
      </label><br>
      <input type="email" class="input" id="email" placeholder="Enter your email" name="email" required><br><br>
        
      <label class="label" for="pwd">
        Password:
      </label><br>          
      <input type="password" class="input" id="pwd" placeholder="Enter your password" name="password" required><br><br>
      <center>
        <button type="submit" class="btn">
          Sign Up
        </button>
      </center><br><br>
      
    </form>
  </body>
</html>