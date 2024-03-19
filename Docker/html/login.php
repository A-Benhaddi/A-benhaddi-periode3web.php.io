<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "ccs/main1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
      <div class="container-logo">
        <img class="store-logo" src="imgs/storelogo.png">
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
        <form action="pages/login.php" method="post">
          <button type="submit" class="button">
            <div class="button-tekst">
              <p>Login</p>
            </div>
          </button>
        </form>
      </div>
    </nav>
    <form action='login.logic.php' name="login" method="POST">
        <label> Username: </label>
        <input type="text" name="username" placeholder="Username">
        <label>Password:</label>
        <input type ="password" name="password" placeholder="Password"> 
        <input type="submit" value="Login">
        <button type="submit" value="Login"><h2>Log In</h2></button><br>
    </form>
</body>
</html>