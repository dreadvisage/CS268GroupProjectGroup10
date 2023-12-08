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
    <title>Necrons</title>
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

                <h2>Necrons</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Necrons");

                        Builder.addUnit("Annihilation Barge", 1, 12, 115);

                        Builder.addUnit("Anrakyr the Traveller", 1, 14, 95);

                        Builder.addUnit("C'tan Shard of the Deciever", 1, 12, 265);

                        Builder.addUnit("C'tan Shard of the Nightbringer", 1, 12, 255);

                        Builder.addUnit("C'tan Shard of the Void Dragon", 1, 12, 270);

                        Builder.addUnit("Canoptek Doomstalker", 1, 12, 135);

                        Builder.addUnit("Canopteke Reanimator", 1, 12, 105);

                        Builder.new("Canoptek Scarab Swarms")
                            .model(3, 14, 40)
                            .model(6, 14, 80)
                            .add();

                        Builder.new("Canoptek Spyders")
                            .model(1, 14, 75)
                            .model(2, 12, 150)
                            .add();

                        Builder.new("Canoptek Wraiths")
                            .model(3, 12, 110)
                            .model(6, 12, 220)
                            .add();

                        Builder.addUnit("Chronomancer", 1, 14, 50);

                        Builder.addUnit("Convergence of Dominion", 3, 12, 255);

                        Builder.addUnit("Cryptothralls", 2, 14, 60);

                        Builder.new("Deathmarks")
                            .model(5, 14, 65)
                            .model(10, 10, 130)
                            .add();

                        Builder.addUnit("Doom Scythe", 1, 12, 225);

                        Builder.addUnit("Doomsday Ark", 1, 12, 210);

                        Builder.new("Flayed Ones")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Ghost Ark", 1, 12, 125);

                        Builder.addUnit("Hexmark Destroyer", 1, 14, 80);

                        Builder.addUnit("Illuminor Szeras", 1, 12, 185);

                        Builder.new("Immortals")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Imotekh the Stormlord", 1, 12, 100);

                        Builder.new("Lokhust Destroyers")
                            .model(1, 14, 30)
                            .model(2, 14, 60)
                            .model(3, 14, 90)
                            .model(6, 12, 180)
                            .add();

                        Builder.new("Lokhust Heavy Destroyers")
                            .model(1, 14, 50)
                            .model(2, 12, 100)
                            .model(3, 12, 150)
                            .add();

                        Builder.addUnit("Lokhust Lord", 1, 14, 80);

                        Builder.addUnit("Lord", 1, 14, 65);

                        Builder.new("Lychguard")
                            .model(5, 12, 115)
                            .model(10, 10, 230)
                            .add();

                        Builder.addUnit("Monolith", 1, 12, 350);

                        Builder.new("Necron Warriors")
                            .model(10, 10, 110)
                            .model(20, 10, 220)
                            .add();

                        Builder.addUnit("Nemesor Zahndrekh", 1, 14, 85);

                        Builder.addUnit("Night Scythe", 1, 12, 145);

                        Builder.addUnit("Obelisk", 1, 12, 325);

                        Builder.new("Ophydian Destroyers")
                            .model(3, 12, 100)
                            .model(6, 12, 200)
                            .add();

                        Builder.addUnit("Orikan the Diviner", 1, 14, 80);

                        Builder.addUnit("Overlord", 1, 14, 85);

                        Builder.addUnit("Plasmancer", 1, 14, 55);

                        Builder.addUnit("Psychomancer", 1, 14, 50);

                        Builder.addUnit("Royal Warden", 1, 14, 40);

                        Builder.new("Skorpekh Destroyers")
                            .model(3, 12, 100)
                            .model(6, 12, 200)
                            .add();

                        Builder.addUnit("Skorpekh Lord", 1, 12, 100);

                        Builder.addUnit("Technomancer", 1, 14, 60);

                        Builder.addUnit("Tesseract Vault", 1, 12, 375);

                        Builder.addUnit("The Silent King", 3, 12, 420);

                        Builder.new("Tomb Blades")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .add();

                        Builder.addUnit("Transcendent C'tan", 1, 12, 300);

                        Builder.addUnit("Trazyn the Infinite", 1, 14, 75);

                        Builder.new("Triarch Praetorians")
                            .model(5, 12, 120)
                            .model(10, 10, 240)
                            .add();

                        Builder.addUnit("Triarch Stalker", 1, 12, 125);

                        Builder.addUnit("Vargard Obyron", 1, 14, 85);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.new("Canoptek Acanthrites")
                            .model(3, 14, 85)
                            .model(6, 12, 170)
                            .add();

                        Builder.addUnit("Canoptek Tomb Sentinel", 1, 12, 115);

                        Builder.addUnit("Canoptek Tomb Stalker", 1, 12, 130);

                        Builder.addUnit("Seraptek Heavy Construct", 1, 12, 540);

                        Builder.addUnit("Tesseract Ark", 1, 12, 130);
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