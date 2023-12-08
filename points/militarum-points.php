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
    <title>Astra Militarum</title>
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

                <h2>Astra Militarum</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Astra Militarum");


                        Builder.addUnit("Aegis Defence Line", 1, 12, 145);

                        Builder.new("Armoured Sentinels")
                            .model(1, 14, 70)
                            .model(2, 12, 140)
                            .model(3, 12, 210)
                            .add();

                        Builder.new("Attilan Rough Riders")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Baneblade", 1, 12, 480);

                        Builder.addUnit("Banehammer", 1, 12, 450);

                        Builder.addUnit("Banesword", 1, 12, 480);

                        Builder.addUnit("Basilisk", 1, 12, 135);

                        Builder.new("Bullgryn Squad")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .add();

                        Builder.addUnit("Cadian Castellan", 1, 14, 45);

                        Builder.addUnit("Cadian Command Squad", 5, 14, 65);

                        Builder.new("Cadian Shock Troops")
                            .model(10, 12, 55)
                            .model(20, 10, 110)
                            .add();

                        Builder.addUnit("Chimera", 5, 14, 70);

                        Builder.addUnit("Commissar", 1, 14, 30);

                        Builder.new("Death Korps of Krieg")
                            .model(10, 12, 65)
                            .model(20, 10, 130)
                            .add();

                        Builder.addUnit("Deathstrike", 1, 12, 160);

                        Builder.addUnit("Doomhammer", 1, 12, 455);

                        Builder.addUnit("Field Ordnance Battery", 2, 12, 120);

                        Builder.addUnit("Gaunt's Ghosts", 6, 12, 100);

                        Builder.addUnit("Heavy Weapons Squad", 3, 14, 60);

                        Builder.addUnit("Hellhammer", 1, 12, 450);

                        Builder.addUnit("Hellhound", 1, 12, 125);

                        Builder.addUnit("Hydra", 1, 14, 95);

                        Builder.new("Infantry Squad")
                            .modelCustom("9-10 models", 9, "60")
                            .modelCustom("18-20 models", 5, "120")
                            .add();

                        Builder.addUnit("'Iron Hand' Straken", 1, 14, 55);

                        Builder.addUnit("Kasrkin", 10, 10, 100);

                        Builder.addUnit("Leman Russ Battle Tank", 1, 12, 180);

                        Builder.addUnit("Leman Russ Demolisher", 1, 12, 200);

                        Builder.addUnit("Leman Russ Eradicator", 1, 12, 160);

                        Builder.addUnit("Leman Russ Executioner", 1, 12, 180);

                        Builder.addUnit("Leman Russ Exterminator", 1, 12, 180);

                        Builder.addUnit("Leman Russ Punisher", 1, 12, 160);

                        Builder.addUnit("Leman Russ Vanquisher", 1, 12, 155);

                        Builder.addUnit("Lord Solar Leontus", 1, 12, 125);

                        Builder.addUnit("Manticore", 1, 12, 150);

                        Builder.addUnit("Militarum Tempestus Command Squad", 1, 14, 80);

                        Builder.addUnit("Munitorum Servitors", 4, 14, 35);

                        Builder.addUnit("Nork Deddog", 1, 14, 60);

                        Builder.addUnit("Ogryn Bodyguard", 1, 14, 40);

                        Builder.new("Ogryn Squad")
                            .model(3, 14, 65)
                            .model(6, 12, 130)
                            .add();

                        Builder.addUnit("Platoon Command Squad", "4-5", 11, 60);

                        Builder.addUnit("Primaris Psyker", 1, 14, 60);

                        Builder.addUnit("Ratling Snipers", 5, 14, 60);

                        Builder.addUnit("Regimental Attachés", 3, 14, 40);

                        Builder.addUnit("Regimental Enginseer", 1, 14, 45);

                        Builder.addUnit("Regimental Preacher", 1, 14, 35);

                        Builder.addUnit("Rogal Dorn Battle Tank", 1, 12, 260);

                        Builder.new("Scout Sentinels")
                            .model(1, 14, 60)
                            .model(2, 12, 120)
                            .model(3, 12, 180)
                            .add();

                        Builder.addUnit("Sergeant Harker", 1, 14, 40);

                        Builder.addUnit("Shadowsword", 1, 12, 440);

                        Builder.addUnit("Sly Marbo", 1, 14, 65);

                        Builder.addUnit("Stormlord", 1, 12, 460);

                        Builder.addUnit("Stormsword", 1, 12, 495);

                        Builder.addUnit("Tank Commander", 1, 12, 205);

                        Builder.addUnit("Taurox", 1, 14, 65);

                        Builder.addUnit("Taurox Prime", 1, 14, 90);

                        Builder.new("Tempestus Scions")
                            .model(5, 14, 55)
                            .model(10, 10, 110)
                            .add();

                        Builder.addUnit("Ursula Creed", 1, 14, 55);

                        Builder.addUnit("Valkyrie", 1, 12, 190);

                        Builder.addUnit("Wyvern", 1, 12, 110);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Avenger Strike Force", 1, 12, 130);

                        Builder.addUnit("Carnodon", 1, 12, 160);

                        Builder.addUnit("Colossus", 1, 12, 160);

                        Builder.addUnit("Crassus", 1, 12, 180);

                        Builder.addUnit("Cyclops Demolition Vehicle", 1, 14, 25);

                        Builder.addUnit("Death Korps Marshal", 1, 14, 60);

                        Builder.new("Death Rider Squadron")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Death Rider Squadron Commander", 1, 14, 60);

                        Builder.addUnit("Earthshaker Carriage Battery", 1, 12, 120);

                        Builder.addUnit("Hades Breaching Drill", 1, 12, 110);

                        Builder.addUnit("Macharius", 1, 12, 310);

                        Builder.addUnit("Macharius Vanquisher", 1, 12, 285);

                        Builder.addUnit("Macharius Vulcan", 1, 12, 310);

                        Builder.addUnit("Malcador", 1, 12, 250);

                        Builder.addUnit("Malcador Annihilator", 1, 12, 270);

                        Builder.addUnit("Malcador Defender", 1, 12, 310);

                        Builder.addUnit("Malcador Infernus", 1, 12, 235);

                        Builder.addUnit("Marauder Bomber", 1, 12, 345);

                        Builder.addUnit("Marauder Destroyer", 1, 12, 375);

                        Builder.addUnit("Marauder Carriage Battery", 1, 14, 60);

                        Builder.addUnit("Praetor", 1, 12, 275);

                        Builder.new("Rapier Laser Destroyer Battery")
                            .model(1, 14, 35)
                            .model(2, 14, 70)
                            .model(3, 12, 105)
                            .add();

                        Builder.addUnit("Stormblade", 1, 12, 415);

                        Builder.new("Tarantula Battery")
                            .model(1, 14, 40)
                            .model(2, 14, 80)
                            .model(3, 12, 120)
                            .add();

                        Builder.addUnit("Thunderbolt Heavy Fighter", 1, 12, 200);

                        Builder.addUnit("Trojan Support Vehicle", 1, 14, 80);

                        Builder.addUnit("Valdor", 1, 12, 285);

                        Builder.addUnit("Voss-pattern Lightning", 1, 12, 130);

                        Builder.addUnit("Vulture Gunship", 1, 14, 80);
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