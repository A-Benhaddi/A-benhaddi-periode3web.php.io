<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main1.css">
  </head>
  <body>
<?php
include '../pages/nav.php';
include '../pages/conn.php';
?>


  


  <header>

  <section class='productenRow'>
    <?php
    // Variable statement is het resultaat van connectie & de query
    $stmt = $connection->query("SELECT * FROM Producten");

    // Loop voor alles wat we vinden
    while ($row = $stmt->fetch()) {
      echo '<div class="singleProduct">';
      echo $row['naam'];
      echo $row['prijs'];
      echo '</div>';
    }
    ?>
  </section>
</body>
</header>
</html>
