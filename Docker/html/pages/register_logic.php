<?php
session_start();
include 'conn.php';
if (empty($_POST["username"]) || empty($_POST["password"])) {
    header("Location: register.php");
    exit();
}


$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$stmt = $connection->prepare("INSERT INTO users(username, password, email)  VALUES(:user, :pass, :mail)");
$stmt->bindParam(":user", $username);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->execute();


header('Location: login.php');

// if ($username = "admin" && $password = "admin"){
//     $_SESSION["user"] = $username;
//     header("location:dashboard.php");
// }else{
//     header("Location: login.php");
// }
?>