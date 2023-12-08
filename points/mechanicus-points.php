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
    <title>Adeptus Mechanicus</title>
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

                <h2>Adeptus Mechanicus</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Adeptus Mechanicus");

                        Builder.addUnit("Archaeopter Fusilave", 1, 12, 155);

                        Builder.addUnit("Archaeopter Stratoraptor", 1, 12, 165);

                        Builder.addUnit("Archaeopter Transvector", 1, 12, 140);

                        Builder.addUnit("Belisarius Cawl", 1, 12, 185);

                        Builder.new("Corpuscarii Electro-Priests")
                            .model(5, 14, 55)
                            .model(10, 10, 110)
                            .add();

                        Builder.addUnit("Cybernetica Datasmith", 1, 14, 35);

                        Builder.new("Fulgurite Electro-Priests")
                            .model(5, 14, 60)
                            .model(10, 10, 120)
                            .add();

                        Builder.new("Ironstrider Ballistarii")
                            .model(1, 14, 50)
                            .model(2, 12, 100)
                            .model(3, 12, 150)
                            .add();

                        Builder.new("Kastelan Robots")
                            .model(2, 12, 200)
                            .model(4, 12, 400)
                            .add();

                        Builder.new("Kataphron Breachers")
                            .model(3, 12, 145)
                            .model(6, 12, 290)
                            .add();

                        Builder.new("Kataphron Destroyers")
                            .model(3, 12, 115)
                            .model(6, 12, 230)
                            .add();

                        Builder.addUnit("Onager Dunecrawler", 1, 12, 140);

                        Builder.new("Pteraxii Skystalkers")
                            .model(5, 14, 65)
                            .model(10, 10, 130)
                            .add();

                        Builder.new("Pteraxii Sterylizors")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.new("Serberys Raiders")
                            .model(3, 14, 60)
                            .model(6, 12, 120)
                            .add();

                        Builder.new("Serberys Sulphurhounds")
                            .model(3, 14, 55)
                            .model(6, 12, 110)
                            .add();

                        Builder.addUnit("Servitors", 4, 14, 50);

                        Builder.new("Sicarian Infiltrators")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.new("Sicarian Ruststalkers")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Skitarii Marshal", 1, 14, 35);

                        Builder.addUnit("Skitarii Rangers", 10, 12, 90);

                        Builder.addUnit("Skitarii Vanguard", 8, 14, 80);

                        Builder.addUnit("Skorpius Disintegrator", 1, 12, 180);

                        Builder.addUnit("Skorpius Dunerider", 1, 14, 80);

                        Builder.new("Sydonian Dragoons")
                            .model(1, 14, 60)
                            .model(2, 12, 120)
                            .model(3, 12, 180)
                            .add();

                        Builder.addUnit("Tech-Priest Dominus", 1, 14, 75);

                        Builder.addUnit("Tech-Priest Enginseer", 1, 14, 40);

                        Builder.addUnit("Tech-Priest Manipulus", 1, 14, 55);

                        Builder.addUnit("Technoarcheologist", 1, 14, 45);
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