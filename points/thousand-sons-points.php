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
    <title>Thousand Sons</title>
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

                <h2>Thousand Sons</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Thousand Sons");

                        Builder.addUnit("Ahriman", 1, 12, 130);

                        Builder.addUnit("Ahriman on Disc of Tzeentch", 3, 12, 140);

                        Builder.addUnit("Exalted Sorcerer", 1, 12, 100);

                        Builder.addUnit("Exalted Sorcerer on Disc of Tzeentch", 1, 12, 115);

                        Builder.addUnit("Infernal Master", 1, 14, 90);

                        Builder.addUnit("Magnus the Red", 1, 12, 440);

                        Builder.addUnit("Mutalith Vortex Beast", 1, 12, 165);

                        Builder.new("Rubric Marines")
                            .model(5, 12, 105)
                            .model(10, 10, 210)
                            .add();

                        Builder.new("Scarab Occult Terminators")
                            .model(5, 12, 215)
                            .model(10, 10, 430)
                            .add();

                        Builder.addUnit("Thousand Sons Chaos Spawn", 1, 14, 65);

                        Builder.new("Thousand Sons Cultists")
                            .model(10, 12, 60)
                            .model(20, 10, 120)
                            .add();

                        Builder.addUnit("Thousand Sons Daemon Prince", 1, 12, 180);

                        Builder.addUnit("Thousand Sons Daemon Prince with Wings", 1, 12, 195);

                        Builder.addUnit("Thousand Sons Defiler", 1, 12, 190);

                        Builder.addUnit("Thousand Sons Forgefiend", 1, 12, 135);

                        Builder.addUnit("Thousand Sons Helbrute", 1, 12, 145);

                        Builder.addUnit("Thousand Sons Heldrake", 1, 12, 195);

                        Builder.addUnit("Thousand Sons Land Raider", 1, 12, 240);

                        Builder.addUnit("Thousand Sons Maulerfiend", 1, 12, 155);

                        Builder.addUnit("Thousand Sons Predator Annihilator", 1, 12, 130);

                        Builder.addUnit("Thousand Sons Predator Destructor", 1, 12, 130);

                        Builder.addUnit("Thousand Sons Rhino", 1, 14, 75);

                        Builder.addUnit("Thousand Sons Sorcerer", 1, 14, 95);

                        Builder.addUnit("Thousand Sons Sorcerer in Terminator Armour", 1, 12, 115);

                        Builder.addUnit("Thousand Sons Vindicator", 1, 12, 190);

                        Builder.new("Tzaangor Enlightened")
                            .model(3, 14, 45)
                            .model(6, 14, 90)
                            .add();

                        Builder.addUnit("Tzaangor Shaman", 1, 14, 60);

                        Builder.new("Tzaangors")
                            .model(10, 12, 65)
                            .model(20, 10, 130)
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