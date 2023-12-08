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
    <title>Tyranids</title>
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

                <h2>Tyranids</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Tyranids");

                        Builder.new("Barbgaunts")
                            .model(5, 14, 60)
                            .model(10, 10, 120)
                            .add();

                        Builder.new("Barbgaunts")
                            .model(1, 14, 75)
                            .model(2, 12, 150)
                            .model(3, 12, 225)
                            .add();

                        Builder.addUnit("Broodlord", 1, 14, 90);

                        Builder.new("Carnifexes")
                            .model(1, 12, 125)
                            .model(2, 12, 250)
                            .add();

                        Builder.addUnit("Deathleaper", 1, 14, 70);

                        Builder.addUnit("Deathleaper", 1, 14, 70);

                        Builder.addUnit("Exocrine", 1, 12, 135);

                        Builder.new("Gargoyles")
                            .model(10, 12, 75)
                            .model(20, 10, 150)
                            .add();

                        Builder.new("Genestealers")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Harpy", 1, 12, 215);

                        Builder.addUnit("Haruspex", 1, 12, 125);

                        Builder.addUnit("Hive Crone", 1, 12, 200);

                        Builder.new("Hive Guard")
                            .model(3, 12, 110)
                            .model(6, 12, 220)
                            .add();

                        Builder.addUnit("Hive Tyrant", 1, 12, 235);

                        Builder.new("Hormagaunts")
                            .model(10, 12, 65)
                            .model(20, 10, 130)
                            .add();

                        Builder.addUnit("Lictor", 1, 14, 60);

                        Builder.addUnit("Maleceptor", 1, 12, 170);

                        Builder.addUnit("Mawloc", 1, 12, 145);

                        Builder.new("Mucolid Spores")
                            .model(1, 14, 50)
                            .model(2, 12, 100)
                            .add();

                        Builder.new("Neurogaunts")
                            .model(11, 12, 45)
                            .model(22, 12, 90)
                            .add();

                        Builder.addUnit("Neurolictor", 1, 12, 105);

                        Builder.addUnit("Norn Assimilator", 1, 12, 310);

                        Builder.addUnit("Norn Emissary", 1, 12, 290);

                        Builder.addUnit("Old One Eye", 1, 12, 140);

                        Builder.addUnit("Parasite of Mortrex", 1, 14, 80);

                        Builder.addUnit("Psychophage", 1, 12, 125);

                        Builder.new("Pyrovores")
                            .model(1, 14, 30)
                            .model(2, 14, 60)
                            .model(3, 14, 90)
                            .add();

                        Builder.new("Raveners")
                            .model(3, 14, 75)
                            .model(6, 12, 150)
                            .add();

                        Builder.new("Ripper Swarms")
                            .model(1, 14, 20)
                            .model(2, 14, 40)
                            .model(3, 14, 60)
                            .add();

                        Builder.addUnit("Screamer-Killer", 1, 12, 170);

                        Builder.new("Spore Mines")
                            .model(3, 14, 55)
                            .model(6, 12, 110)
                            .add();

                        Builder.addUnit("Sporocyst", 1, 12, 145);

                        Builder.new("Termagants")
                            .model(10, 12, 60)
                            .model(20, 10, 120)
                            .add();

                        Builder.addUnit("Tervigon", 1, 12, 190);

                        Builder.addUnit("The Swarmlord", 1, 12, 270);

                        Builder.addUnit("Toxicrene", 1, 12, 180);

                        Builder.addUnit("Trygon", 1, 12, 180);

                        Builder.new("Tyranid Warriors with Melee Bio-weapons")
                            .model(3, 14, 85)
                            .model(6, 12, 170)
                            .add();

                        Builder.new("Tyranid Warriors with Ranged Bio-weapons")
                            .model(3, 14, 70)
                            .model(6, 12, 140)
                            .add();

                        Builder.addUnit("Tyrannocyte", 1, 12, 105);

                        Builder.addUnit("Tyrannofex", 1, 12, 245);

                        Builder.new("Tyrant Guard")
                            .model(3, 14, 95)
                            .model(6, 12, 190)
                            .add();

                        Builder.new("Venomthropes")
                            .model(3, 14, 70)
                            .model(6, 12, 140)
                            .add();

                        Builder.new("Von Ryan's Leapers")
                            .model(3, 14, 75)
                            .model(6, 12, 150)
                            .add();

                        Builder.addUnit("Winged Hive Tyrant", 1, 12, 210);

                        Builder.addUnit("Winged Tyranid Prime", 1, 14, 65);

                        Builder.new("Zoanthropes")
                            .model(3, 12, 110)
                            .model(6, 12, 220)
                            .add();

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Barbed Hierodule", 1, 12, 340);

                        Builder.addUnit("Harridan", 1, 12, 610);

                        Builder.addUnit("Hierophant", 1, 12, 810);

                        Builder.addUnit("Scythed Hierodule", 1, 12, 330);
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