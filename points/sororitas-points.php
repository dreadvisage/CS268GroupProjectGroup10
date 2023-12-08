<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_NAVBAR;
require_once PATH_IS_LOGGED_IN;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adepta Sororitas</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/article-section.css">
  <link rel="stylesheet" href="../css/points.css">
  <script src="../js/create-unit-helper.js"></script>
</head>

<body>
  <div id="background-image"><img src="../images/warhammer-background.jpg" alt="Warhammer Background"></div>

  <?php
  echoNavbar(1);
  ?>

  <main>
    <div class="display">
      <div class="pad"></div>
      <div id="article">

        <h2>Adepta Sororitas</h2>
        <hr>

        <ul id="points-list">
          <script>
            const Builder = UnitBuilder;
            Builder.setParentId("points-list");
            Builder.setFaction("Adepta Sororitas");

            Builder.addUnit("Aestred Thruga and Agathae Dolan", 2, 14, 55);

            Builder.new("Arco-flagellants")
              .model(3, 14, 40)
              .model(10, 10, 130)
              .add();

            Builder.addUnit("Battle Sisters Squad", 10, 10, 100);

            Builder.addUnit("Canoness", 1, 14, 50);

            Builder.addUnit("Castigator", 1, 12, 140);

            Builder.new("Celestian Sacresants")
              .model(5, 14, 65)
              .model(10, 10, 130)
              .add();

            Builder.new("Crusaders")
              .model(2, 14, 25)
              .model(4, 14, 50)
              .model(6, 14, 75)
              .add();

            Builder.addUnit("Daeminfuge", 2, 14, 80);

            Builder.new("Death Cult Assassins")
              .model(2, 14, 35)
              .model(4, 14, 70)
              .model(6, 12, 105)
              .add();

            Builder.addUnit("Dialogus", 1, 14, 30);

            Builder.addUnit("Dogmata", 1, 14, 45);

            Builder.addUnit("Dominion Squad", 10, 10, 120);

            Builder.addUnit("Exorcist", 1, 12, 160);

            Builder.addUnit("Hospitaller", 1, 14, 35);

            Builder.addUnit("Imagifier", 1, 14, 35);

            Builder.addUnit("Immolator", 1, 12, 115);

            Builder.addUnit("Junith Eruita", 1, 14, 90);

            Builder.addUnit("Missionary", 1, 14, 30);

            Builder.new("Mortifiers")
              .model(1, 14, 60)
              .model(2, 12, 120)
              .add();

            Builder.addUnit("Morvenn Vahl", 1, 12, 125);

            Builder.addUnit("Palatine", 1, 14, 50);

            Builder.addUnit("Paragon Warsuits", 3, 14, 200);

            Builder.new("Penitent Engines")
              .model(1, 14, 60)
              .model(2, 12, 120)
              .add();

            Builder.addUnit("Paragon Warsuits", 3, 12, 200);

            Builder.addUnit("Repentia Squad", 5, 12, 115);

            Builder.addUnit("Preacher", 1, 14, 40);

            Builder.new("Repentia Squad")
              .model(5, 14, 65)
              .model(10, 10, 130)
              .add();

            Builder.addUnit("Retributor Squad", 5, 12, 115);

            Builder.addUnit("Saint Celestine", 3, 12, 135);

            Builder.new("Seraphim Squad")
              .model(5, 14, 70)
              .model(10, 10, 140)
              .add();

            Builder.addUnit("Sisters Novitiate Squad", 10, 12, 85);

            Builder.addUnit("Sororitas Rhino", 3, 14, 75);

            Builder.addUnit("Truimph of Saint Katherine", 1, 12, 125);

            Builder.new("Zephyrim Squad")
              .model(5, 14, 70)
              .model(10, 10, 140)
              .add();
          </script>

        </ul>

      </div>
      <div class="pad"></div>
    </div>
  </main>

  <footer>
    <div class="pad"></div>
    <div class="footer-content">
      <hr>
      <p>Author(s): Seth Pommer</p>
    </div>
    <div class="pad"></div>
  </footer>
</body>

</html>