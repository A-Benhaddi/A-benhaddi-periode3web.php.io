<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Redstore</title>
  <link rel="stylesheet" href="../css/main1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav>
    <div class="container-logo">
      <img class="store-logo" src="../imgs/storelogo.png">
    </div>
    <div class="menu-container">
      <div class="menu-bar">
        <p>Home</p>
        <p>Store</p>
        <p>About Us</p>
      </div>
    </div>
    <div class="push"></div>
    <div class="login-container">
      <a href="http://localhost:8000/pages/login.php" class="button">
        <div class="button-tekst">
          <p>Login</p>
        </div>
        </button>
      </a>
    </div>
  </nav>
  <div class="push"></div>
  <div class="form-container">
    <form action='login.logic.php' name="login" method="POST">
      <div class="login-titel">
    <h1>Login</h1>
    </div>
      <label> Username: </label>
      <input type="text" name="username" placeholder="Username">
      <label>Password:</label>
      <input type="password" name="password" placeholder="Password">
      <div class="forgot-password">Forgot Password?</div>
      <button type="submit" value="Login" class="submit-button">
        <h2>Log In</h2>
      </button>
      <div class="registeer-link">
        Nog niet geregistreed?<a href="http://localhost:8000/pages/register.php" class="register-button">Register</a>
      </div>
  </div>
  </form>
</body>

</html>