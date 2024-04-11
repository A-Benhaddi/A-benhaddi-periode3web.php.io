<?php
session_start();
include("conn.php");  //connecting

$stmt = $connection->prepare("SELECT * FROM producten WHERE id=:id"); 
$stmt -> prepare($sql);
$product = $stmt->fetch();
?>
execute($data);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main1.css">
</head>
<body>
    <form action='login.logic.php' name="product_update_logic" method="POST">
          <label> Id van product: </label>
            <input type="text" name="id_product" value="<?php echo $producten['id']; ?>" required>
            <label>Naam van product: </label>
          <input type="text" name="id_product" value="<?php echo $producten['naam']; ?>" required>
          <label>Prijs van product: </label>
          <input type="text" name="id_product" value="<?php echo $producten['prijs']; ?>" required>
          <input type="submit" value="update product">
    </form>
</body>
</html>
