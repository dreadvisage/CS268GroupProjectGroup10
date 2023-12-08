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
  <title>Leagues of Votann</title>
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
        <h2>Leagues of Votann</h2>
        <hr>

        <ul id="points-list">
          <script>
            const Builder = UnitBuilder;
            Builder.setParentId("points-list");
            Builder.setFaction("Leagues of Votann");

            Builder.addUnit("Brôkhy Iron-master", 5, 14, 65);

            Builder.new("Brôkhy Thunderkyn")
              .model(3, 14, 75)
              .model(6, 12, 150)
              .add();

            Builder.new("Cthonian Beserks")
              .model(5, 12, 100)
              .model(10, 10, 200)
              .add();

            Builder.addUnit("Einhyr Champion", 1, 14, 60);

            Builder.new("Einhyr Hearthguard")
              .model(5, 12, 150)
              .model(10, 10, 300)
              .add();

            Builder.addUnit("Grimnyr", 3, 14, 65);

            Builder.addUnit("Hearthkyn Warriors", 5, 12, 110);

            Builder.addUnit("Hekaton Land Fortress", 1, 12, 225);

            Builder.new("Hernkyn Pioneers")
              .model(3, 14, 90)
              .model(6, 12, 180)
              .add();

            Builder.addUnit("Kâhl", 1, 14, 70);

            Builder.addUnit("Sagitaur", 1, 12, 100);

            Builder.addUnit("Ûthar the Destined", 1, 14, 90);
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