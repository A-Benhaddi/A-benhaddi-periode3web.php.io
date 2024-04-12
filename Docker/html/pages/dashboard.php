<?php
session_start();
if (!isset($_SESSION["user"])){
    header( "Location: login.php");
    exit();
}
include ("conn.php");
include '../pages/nav.php';

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
    <div class="push"></div>
    <div class="form-container">
    <form action="user_delete_logic.php" name="user_delete_logic" method="POST">
        <label> iduser: </label>
        <input type="text" name="id_user" placeholder="iduser">
      
        <input type=submit value="delete_user"> 
    </form>
    <div class="div">
		<?php
    $stmt = $connection->prepare("SELECT * FROM Producten");
		$stmt->execute();
    $data = $stmt->fetchAll();

		foreach ($data as $row) {
      echo $row['naam'];
      echo "<a href='producten_update.php?id=".$row ['id']."'>Update</a>";
      echo "<a href='producten_delete.php?id=".$row['id']."'>Delete</a>";
		}
		?>
	</div>
    
</body>
</html>