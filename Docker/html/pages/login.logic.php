<?php
session_start();
  include 'conn.php';

if (empty($_POST ["username"])|| empty($_POST["password"])){
    header("Location: dashboard.php");
    exit();
}
$username =$_POST["username"];
$password =$_POST["password"];
// $sql="SELECT * FROM user WHERE username
$stmt = $connection->prepare("SELECT * FROM users WHERE username=:users AND password=:pass");
$stmt->execute(["users" => $username, 'pass' => $password]);
$user = $stmt->fetch();
if (!$user) {
    header("Location: login.php");
    exit();
} else{
   $_SESSION["user"]=$username;
   header("Location: dashboard.php");
   exit();
}

// if ($username = "admin" && $password = "admin"){
//     $_SESSION["users"] = $username;
//     $_SESSION["password"] = $password;
//     header("Location: dashboard.php");
// }else{
//     header("Location: register.php");
// }
?>