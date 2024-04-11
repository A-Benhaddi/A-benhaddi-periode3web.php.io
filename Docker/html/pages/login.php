

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Redstore</title>
  <link rel="stylesheet" href="../css/main1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
include '../pages/nav.php';
include '../pages/conn.php';

?>

<body>

  
  <div class="push"></div>
  
  <div class="form-container">
    <form action='login.logic.php' name="login" method="POST">
      <div class="login-titel">
    <h1>Login</h1>
    </div>
    
    <div class="txt-field">
      <label> Username: </label>
      <input type="text" name="username" placeholder="Username">
      </div>

      <div  class="txt-field">
      <label>Password:</label>
      <input type="password" name="password" placeholder="Password">
      </div>
      <div class="forgot-password">Forgot Password?</div>
      
      <input type="submit" value="Login" class="submit-button">
      </button>
      
      <div class="registeer-link">
        Nog niet geregistreed?<a href="http://localhost:8000/pages/register.php" class="register-button">Register</a>
      </div>
  </div>
  </form>
</body>

</html>