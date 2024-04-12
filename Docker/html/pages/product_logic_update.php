<?php
include 'conn.php';
$data = [
    'naam'=>$_POST['naam'],
    'prijs'=>$_POST['prijs'],
    'beschrijving'=>$_POST['beschrijving'],
    'id'=>$_POST['id']

];
$sql = "UPDATE Producten SET naam=:naam, prijs=:prijs, beschrijving=:beschrijving WHERE id=:id"; 
$stmt=$connection->prepare($sql);
$stmt->execute($data);

header("Location: ../index.php");

?>