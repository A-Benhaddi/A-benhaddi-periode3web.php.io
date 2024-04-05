<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
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
    <form action='register_logic.php' name='register_logic' method="POST">
      <label> Username: </label>
      <input type="text" name="username" placeholder="Username" required>
      <label>Password:</label>
      <input type="password" name="password" placeholder="Password" required>
      <label>Email:</label>
      <input type="email" name="email" placeholder="email">
      <input type="submit" value="Register" />
    </form>
</body>

</html>