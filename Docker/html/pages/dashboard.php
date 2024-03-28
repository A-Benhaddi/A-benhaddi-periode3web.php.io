<?php
session_start();
if (!isset($_SESSION["user"])){
    header( "Location: login.php");
    exit();
}
?>
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
    <form action="user_delete_logic.php" name="user_delete_logic" method="POST">
        <label> iduser: </label>
        <input type="text" name="id_user" placeholder="iduser">
      
        <input type=submit value="delete_user"> 
    </form>
    
</body>
</html>