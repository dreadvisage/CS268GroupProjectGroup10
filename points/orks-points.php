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
    <title>Orks</title>
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

                <h2>Orks</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Orks");

                        Builder.addUnit("Battlewagon", 1, 12, 185);

                        Builder.new("Beast Snagga Boyz")
                            .model(10, 10, 105)
                            .model(20, 10, 210)
                            .add();

                        Builder.addUnit("Beastboss", 1, 12, 100);

                        Builder.addUnit("Beastboss on Squigosaur", 1, 12, 165);

                        Builder.addUnit("Big Mek in Mega Armour", 1, 14, 85);

                        Builder.addUnit("Big Mek in Kustom Force Field", 1, 14, 55);

                        Builder.addUnit("Big Mek with Shokk Attack Gun", 1, 14, 75);

                        Builder.addUnit("Big'ed Bossbunka", 1, 12, 135);

                        Builder.addUnit("Blitza-bommer", 1, 12, 115);

                        Builder.addUnit("Boomdakka Snazzwagon", 1, 14, 90);

                        Builder.addUnit("Boss Snikrot", 1, 14, 85);

                        Builder.addUnit("Boss Zagstruk", 1, 14, 90);

                        Builder.new("Boyz")
                            .model(10, 12, 85)
                            .model(20, 10, 170)
                            .add();

                        Builder.new("Burna Boyz")
                            .modelCustom("1 Spanner and 4 Burna Boyz", 30, 60)
                            .modelCustom("2 Spanner and 8 Burna Boyz", 28, 120)
                            .modelCustom("3 Spanner and 12 Burna Boyz", 26, 180)
                            .add();

                        Builder.addUnit("Burna-bommer", 1, 12, 125);

                        Builder.addUnit("Dakkajet", 1, 12, 135);

                        Builder.addUnit("Deff Dread", 1, 12, 130);

                        Builder.addUnit("Deffkilla Wartrike", 1, 14, 80);

                        Builder.new("Deffkoptas")
                            .model(3, 12, 100)
                            .model(6, 12, 200)
                            .add();

                        Builder.new("Flash Gitz")
                            .model(5, 14, 95)
                            .model(10, 10, 190)
                            .add();

                        Builder.addUnit("Ghazghkull Thraka", 2, 12, 235);

                        Builder.addUnit("Gorkanaut", 1, 12, 280);

                        Builder.new("Gretchin")
                            .model(11, 12, 40)
                            .model(22, 12, 80)
                            .add();

                        Builder.addUnit("Hunta Rig", 1, 12, 160);

                        Builder.addUnit("Kaptin Badrukk", 1, 14, 80);

                        Builder.addUnit("Kill Rig", 1, 12, 200);

                        Builder.new("Killa Kans")
                            .model(3, 12, 150)
                            .model(6, 12, 300)
                            .add();

                        Builder.addUnit("Kommandos", 10, 10, 135);

                        Builder.addUnit("Kustom Boosta-blasta", 1, 14, 85);

                        Builder.new("Lootas")
                            .modelCustom("1 Spanner and 4 Lootas", 30, 50)
                            .modelCustom("2 Spanner and 8 Lootas", 28, 100)
                            .modelCustom("3 Spanner and 12 Lootas", 26, 150)
                            .add();

                        Builder.addUnit("Mad Dok Grotsnik", 1, 14, 65);

                        Builder.new("Meganobz")
                            .model(2, 14, 60)
                            .model(3, 14, 90)
                            .model(5, 12, 150)
                            .model(6, 12, 180)
                            .add();

                        Builder.addUnit("Megatrakk Scrapjet", 1, 14, 90);

                        Builder.addUnit("Mek", 1, 14, 45);

                        Builder.new("Mek Gunz")
                            .model(1, 14, 55)
                            .model(2, 12, 110)
                            .model(3, 12, 165)
                            .add();

                        Builder.addUnit("Mekboy Workshop", 1, 14, 80);

                        Builder.addUnit("Morkanaut", 1, 12, 330);

                        Builder.addUnit("Mozrog Skragbad", 1, 12, 195);

                        Builder.addUnit("Nob on Smasha Squig", 1, 14, 60);

                        Builder.addUnit("Nob with Waaagh! Banner", 1, 14, 70);

                        Builder.new("Nobz")
                            .model(5, 12, 105)
                            .model(10, 10, 210)
                            .add();

                        Builder.addUnit("Painboss", 1, 14, 60);

                        Builder.addUnit("Painboy", 1, 14, 70);

                        Builder.addUnit("Rukkatrukk Squigbuggy", 1, 12, 110);

                        Builder.addUnit("Shokkjump Dragsta", 1, 14, 85);

                        Builder.new("Squighog Boyz")
                            .model(3, 12, 110)
                            .model(6, 12, 220)
                            .add();

                        Builder.addUnit("Stompa", 1, 12, 800);

                        Builder.new("Stormboyz")
                            .model(5, 14, 65)
                            .model(10, 10, 130)
                            .add();

                        Builder.addUnit("Tankbustas", 5, 12, 110);

                        Builder.addUnit("Trukk", 1, 14, 60);

                        Builder.new("Warbikers")
                            .model(3, 14, 70)
                            .model(6, 12, 140)
                            .add();

                        Builder.addUnit("Warboss", 1, 14, 65);

                        Builder.addUnit("Warboss in Mega Armour", 1, 14, 80);

                        Builder.addUnit("Wazbom Blastajet", 1, 12, 175);

                        Builder.addUnit("Weirdboy", 1, 14, 55);

                        Builder.addUnit("Wurrboy", 1, 14, 60);

                        Builder.addUnit("Zodgrod Wortsnagga", 1, 14, 80);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Big Trakk", 1, 14, 90);

                        Builder.addUnit("Grot Mega-tank", 1, 12, 110);

                        Builder.new("Grot Tanks")
                            .model(4, 12, 155)
                            .model(8, 12, 310)
                            .add();

                        Builder.addUnit("Gargantuan Squiggoth", 1, 12, 440);

                        Builder.addUnit("Kill Tank", 1, 12, 295);

                        Builder.addUnit("Mega Dread", 1, 12, 225);

                        Builder.addUnit("Meka-dread", 1, 12, 210);

                        Builder.addUnit("Nobz on Warbikes", 3, 12, 125);

                        Builder.addUnit("Squiggoth", 1, 12, 150);

                        Builder.addUnit("Warboss on Warbike", 1, 14, 75);
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