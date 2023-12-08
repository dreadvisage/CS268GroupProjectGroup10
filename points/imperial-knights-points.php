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
    <title>Imperial Knights</title>
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

                <h2>Imperial Knights</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Imperial Knights");

                        Builder.addUnit("Armiger Helverin", 1, 12, 150);

                        Builder.addUnit("Armoger Warglaive", 1, 12, 150);

                        Builder.addUnit("Canis Rex", 1, 12, 460);

                        Builder.addUnit("Knight Castellan", 1, 12, 565);

                        Builder.addUnit("Knight Crusader", 1, 12, 475);

                        Builder.addUnit("Knight Errant", 1, 12, 430);

                        Builder.addUnit("Knight Gallant", 1, 12, 400);

                        Builder.addUnit("Knight Paladin", 1, 12, 450);

                        Builder.addUnit("Knight Preceptor", 1, 12, 430);

                        Builder.addUnit("Knight Valiant", 1, 12, 565);

                        Builder.addUnit("Knight Warden", 1, 12, 480);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Acastus Knight Asterius", 1, 12, 840);

                        Builder.addUnit("Acastus Knight Porphyrion", 1, 12, 745);

                        Builder.addUnit("Armiger Moirax", 1, 12, 170);

                        Builder.addUnit("Cerastus Knight Acheron", 1, 12, 445);

                        Builder.addUnit("Cerastus Knight Atrapos", 1, 12, 440);

                        Builder.addUnit("Cerastus Knight Castigator", 1, 12, 485);

                        Builder.addUnit("Cerastus Knight Lancer", 1, 12, 495);

                        Builder.addUnit("Questoris Knight Magaera", 1, 12, 450);

                        Builder.addUnit("Questoris Knight Styrix", 1, 12, 490);
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