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
    <title>Chaos Knights</title>
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

                <h2>Chaos Knights</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Chaos Knights");

                        Builder.addUnit("Knight Abominant", 1, 12, 455);

                        Builder.addUnit("Knight Desecrator", 1, 12, 450);

                        Builder.addUnit("Knight Despoiler", 1, 12, 470);

                        Builder.addUnit("Knight Rampager", 1, 12, 380);

                        Builder.addUnit("Knight Tyrant", 1, 12, 555);

                        Builder.addUnit("War Dog Executioner", 1, 12, 150);

                        Builder.addUnit("War Dog Huntsman", 1, 12, 150);

                        Builder.addUnit("War Dog Karnivore", 1, 12, 140);

                        Builder.addUnit("War Dog Stalker", 1, 12, 150);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<h2>");

                        Builder.addUnit("Chaos Acastus Knight Asterius", 1, 12, 840);

                        Builder.addUnit("Chaos Acastus Knight Porphyrion", 1, 12, 740);

                        Builder.addUnit("Chaos Cerastus Knight Acheron", 1, 12, 465);

                        Builder.addUnit("Chaos Cerastus Knight Atrapos", 1, 12, 465);

                        Builder.addUnit("Chaos Cerastus Knight Castigator", 1, 12, 480);

                        Builder.addUnit("Chaos Cerastus Knight Lancer", 1, 12, 465);

                        Builder.addUnit("Chaos Questoris Knight Magaera", 1, 12, 465);

                        Builder.addUnit("Chaos Questoris Knight Styrix", 1, 12, 505);

                        Builder.addUnit("War Dog Moirax", 1, 12, 170);
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