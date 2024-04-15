<?php
session_start();
if (!isset($_SESSION["user"])){
    header( "Location: login.php");
    exit();
}
include 'conn.php';//connecting

$stmt = $connection->prepare("SELECT*FROM Producten WHERE id=:id"); 
$stmt->execute(['id'=>$_GET['id']]);
$Producten = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main1.css">
</head>
<body>
    <form action='product_logic_update.php' name="logic" method="POST">
          <label> Id van Producten: </label>
          <input type="text" name="id" value="<?php echo $Producten['id']; ?>" required>
          <label>Naam van Producten: </label>
          <input type="text" name="naam" value="<?php echo $Producten['naam']; ?>" required>
          <label>Prijs van Producten: </label>
          <input type="text" name="prijs" value="<?php echo $Producten['prijs']; ?>" required>
          <input type="submit" value="update Producten">
    </form>
</body>
</html>
