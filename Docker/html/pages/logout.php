<?php
session_start();

var_dump($_SESSION);
echo "<br>";
if(isset($_GET['logout'])) {
    session_destroy();
} else if (isset($_POST['login'])){
	$username = $_POST["username"];
	$_SESSION["user"]=$username; 
	header("Location: index.html");
}
?>

<?php
include '../pages/nav.php';

// session_unset();
// var_dump($_SESSION);
echo "<br>";
?>