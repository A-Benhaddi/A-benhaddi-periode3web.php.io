<?php
session_start();

var_dump($_SESSION);
echo "<br>";
if(isset($_GET['logout'])) {
    session_destroy();
} else if (isset($_POST['login'])){
	$username = $_POST["username"];
	$_SESSION["user"]=$username; 
	header("Location: index.php");
}
?>

<?php
include '../pages/nav.php';

// session_unset();
// var_dump($_SESSION);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="div">
		<?php
		$stmt = $conn->prepare("SELECT * FROM users");
		$stmt->execute();
		while ($row = $stmt->fetchAll()){
			echo "<a href='pages/product_update.php'".$row['id']."'>Update</a>'";
			echo "<a href='pages/product_update.php'".$row['id']."'>Delete</a>'";
		}
		?>
	</div>
</body>
</html>