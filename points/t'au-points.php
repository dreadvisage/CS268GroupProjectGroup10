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
    <title>T'au Empire</title>
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

                <h2>T'au Empire</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("T'au Empire");

                        Builder.addUnit("Aun'Shi", 1, 14, 95);

                        Builder.addUnit("Aun'Va", 3, 14, 65);

                        Builder.addUnit("Breacher Team", 10, 12, 90);

                        Builder.new("Broadside Battlesuits")
                            .model(1, 14, 90)
                            .model(2, 12, 180)
                            .model(3, 12, 270)
                            .add();

                        Builder.addUnit("Cadre Fireblade", 1, 14, 40);

                        Builder.addUnit("Commander Farsight", 1, 14, 90);

                        Builder.addUnit("Commander in Coldstar Battlesuit", 1, 12, 110);

                        Builder.addUnit("Commander in Crisis Battlesuit", 1, 14, 90);

                        Builder.addUnit("Commander in Enforcer Battlesuit", 1, 12, 100);

                        Builder.addUnit("Commander Shadowsun", 1, 12, 100);

                        Builder.new("Crisis Battlesuits")
                            .model(3, 12, 180)
                            .model(6, 12, 360)
                            .add();

                        Builder.addUnit("Darkstrider", 1, 14, 60);

                        Builder.addUnit("Devilfish", 1, 14, 75);

                        Builder.addUnit("Ethereal", 1, 14, 50);

                        Builder.addUnit("Firesight Team", 1, 14, 70);

                        Builder.addUnit("Ghostkeel Battlesuit", 1, 12, 160);

                        Builder.addUnit("Hammerhead Gunship", 1, 12, 130);

                        Builder.new("Kroot Carnivores")
                            .model(10, 12, 55)
                            .model(20, 10, 110)
                            .add();

                        Builder.addUnit("Kroot Farstalkers", 12, 12, 70);

                        Builder.new("Kroot Hounds")
                            .model(4, 14, 30)
                            .model(8, 14, 60)
                            .model(12, 12, 90)
                            .add();

                        Builder.addUnit("Kroot Shaper", 1, 14, 40);

                        Builder.new("Krootox Riders")
                            .model(1, 14, 35)
                            .model(2, 14, 70)
                            .model(3, 12, 105)
                            .add();

                        Builder.addUnit("Longstrike", 1, 12, 140);

                        Builder.addUnit("Pathfinder Team", 10, 12, 90);

                        Builder.new("Piranhas")
                            .model(1, 14, 55)
                            .model(2, 12, 110)
                            .model(3, 12, 165)
                            .add();

                        Builder.addUnit("Razorshark Strike Fighter", 1, 12, 165);

                        Builder.addUnit("Riptide Battlesuit", 1, 12, 180);

                        Builder.addUnit("Sky Ray Gunship", 1, 12, 130);

                        Builder.new("Stealth Battlesuits")
                            .model(3, 14, 60)
                            .model(6, 12, 120)
                            .add();

                        Builder.addUnit("Stormsurge", 1, 12, 400);

                        Builder.addUnit("Strike Team", 10, 12, 80);

                        Builder.addUnit("Sun Shark Bomber", 1, 12, 150);

                        Builder.new("Tactical Drones")
                            .model(4, 14, 70)
                            .model(8, 12, 140)
                            .model(12, 10, 210)
                            .add();

                        Builder.addUnit("Tidewall Droneport", 1, 14, 85);

                        Builder.addUnit("Tidewall Gunrig", 1, 14, 90);

                        Builder.new("Tidewall Shieldline")
                            .model(1, 14, 85)
                            .modelCustom("Tidewall Defence Platform", 5, +20)
                            .add();

                        Builder.addUnit("Vespid Stingwings", 5, 14, 75);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("AX-1-0 Tiger Shark", 1, 12, 315);

                        Builder.addUnit("Barracuda", 1, 12, 220);

                        Builder.addUnit("Manta", 1, 10, 2100);

                        Builder.addUnit("Remora Stealth Drones", 1, 12, 160);

                        Builder.addUnit("R'varna Battlesuit", 1, 12, 200);

                        Builder.addUnit("Ta'unar Supremacy Armour", 1, 12, 790);

                        Builder.new("Tetras")
                            .model(2, 14, 80)
                            .model(4, 12, 160)
                            .add();

                        Builder.addUnit("Tiger Shark", 1, 12, 275);

                        Builder.addUnit("Y'vahra Battlesuit", 1, 12, 210);
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