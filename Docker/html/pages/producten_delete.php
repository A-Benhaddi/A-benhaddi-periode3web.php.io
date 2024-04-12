<?php
session_start();
include ("conn.php");

if (!isset($_GET["id"]) || empty($_GET["id"])) {
  die("Missing product ID");
}

$productid = $_GET["id"];

// select a particular product by id
$stmt = $connection->prepare("DELETE FROM Producten WHERE id=:productid"); 
$stmt->bindParam(":productid", $productid);

if ($stmt->execute()) {
  $_SESSION["message"] = "Product deleted successfully";
} else {
  $_SESSION["message"] = "Error deleting product";
}

header("Location: dashboard.php");
exit;
?>