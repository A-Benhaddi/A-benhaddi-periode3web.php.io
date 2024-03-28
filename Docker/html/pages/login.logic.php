<?php
session_start();
if (empty($_POST ["username"])|| empty($_POST["password"])){
    header("Location: login.php");
    exit();
}

$username =$_POST["username"];
$password =$_POST["password"];

if ($username = "admin" && $password = "admin"){
    $_SESSION["user"] = $username;
    $_SESSION["password"] = $password;
    header("Location: dashboard.php");
}else{
    header("Location: index.php");
}
?>