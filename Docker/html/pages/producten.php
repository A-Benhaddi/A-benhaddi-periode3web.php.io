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
  include 'conn.php';
  ?>
  <div class="whitebalk"></div>
  <div class="container-rodebalk">
  <div class="rodebalk"></div>
  </div>
  <header>

    <section class='productenRow'>
      <?php
      // Variable statement is het resultaat van connectie & de query
      $stmt = $connection->query("SELECT * FROM Producten");

      // Loop voor alles wat we vinden
      while ($row = $stmt->fetch()) {
        echo '<div class="singleProduct">';
        echo '<img class="menu-fotos" src="../imgs/banaan.jpg" alt="">';
        echo $row['naam'];
        echo $row['prijs'];
        echo $row['omschrijving'];

        echo '</div>';
      }
      ?>
    </section>
</body>
</header>

</html>