<?php
session_start();
include ("conn.php");


$userid = $_POST["id"];


// select a particular user by id
$stmt = $connection->prepare("DELETE FROM Producten WHERE id=:id"); 
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: dashboard.php");
?>

