<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fuggles&family=Lato:wght@700&family=Montserrat:wght@500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/main1.css">
</head>

<body>
  <?php
  include '../pages/nav.php';
  include 'conn.php';
  ?>

  <div class="whitebalk"></div>

  <div class="container-rodebalk">

  <div class="rodebalk-titel">
    <div class="titel-connetje">
    <h1>Fruiten</h1>
    </div>
  </div>

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

<div class="rodebalk1"></div>

<div class="whitebalk1"></div>

<!-- Footer -->
<footer>
    <div class="footercontainer">
      <div class="menu-footercontainer">
        <div class="menu-footer">
          <a href="http://localhost:8000/index.php">Home</a>
          <a href="http://localhost:8000/pages/producten.php">Store</a>
          <p>About Us</p>
        </div>
      </div>
    </div>
  </footer>

</html>