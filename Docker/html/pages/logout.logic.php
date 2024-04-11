<?php
session_start();
session_unset();
session_destroy();

session_start();
if (empty($_POST ["username"])|| empty($_POST["password"])){
    header("Location: logout.php");
    exit();
}

$username =$_POST["username"];
$password =$_POST["password"];

if ($username = "admin" && $password = "admin"){
    $_SESSION["user"] = $username;
    $_SESSION["password"] = $password;
    header("Location: dashboard.php");
}else{
    header("Location: logout.php");
}
?>