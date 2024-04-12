<?php
session_start();
include ("conn.php");

if (!isset($_GET["id"]) || empty($_GET["id"])) {
  die("Missing product ID");
}

$Productenid = $_GET["id"];

// select a particular product by id
$stmt = $connection->prepare("DELETE FROM Producten WHERE id=:Productenid");
$stmt->bindParam(":Productenid", $Productenid);

if ($stmt->execute()) {
  $_SESSION["message"] = "Product deleted successfully";
} else {
  $_SESSION["message"] = "Error deleting product";
}

header("Location: dashboard.php");
exit;
?>