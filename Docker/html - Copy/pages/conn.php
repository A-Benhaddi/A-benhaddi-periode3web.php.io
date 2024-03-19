<?php
$host = "db"
$db = "database"
$user = "user"
$pass =  "password"
$charset = "utf8mb4"

$dsn = "myquel:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPASES => false,  
];
try{
    $connection = new PDO($dsn, $user, $pass , $options);
    echo"connected to database"
}catch(\PDOException $e){
    echo "Connection Failed : " . $e->getMessage();
}

?>
