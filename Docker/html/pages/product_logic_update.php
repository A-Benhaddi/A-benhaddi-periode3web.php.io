<?php
include 'conn.php';
$data = [
    'naam'=>$_POST['naam'],
    'prijs'=>$_POST['prijs'],
    'id'=>$_POST['id']

];
$sql = "UPDATE Producten SET naam=:naam, prijs=:prijs, WHERE id=:id"; 
$stmt=$connection->prepare($sql);
$stmt->execute($data);

header("Location: ../index.php");

?>