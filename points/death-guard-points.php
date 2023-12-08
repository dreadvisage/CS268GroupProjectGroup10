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
    <title>Death Guard</title>
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

                <h2>Death Guard</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Death Guard");

                        Builder.addUnit("Biologus Putrifier", 1, 14, 50);

                        Builder.new("Blightlord Terminators")
                            .model(5, 12, 165)
                            .model(10, 10, 330)
                            .add();

                        Builder.addUnit("Death Guard Chaos Lord", 1, 14, 65);

                        Builder.addUnit("Death Guard Chaos Lord in Terminator Armour", 1, 14, 85);

                        Builder.addUnit("Death Guard Chaos Spawn", 10, 12, 70);

                        Builder.new("Death Guard Cultists")
                            .model(10, 12, 50)
                            .model(20, 10, 100)
                            .add();

                        Builder.addUnit("Death Guard Daemon Prince", 1, 12, 160);

                        Builder.addUnit("Death Guard Daemon Prince with Wings", 1, 12, 195);

                        Builder.addUnit("Death Guard Defiler", 1, 12, 190);

                        Builder.addUnit("Death Guard Helbrute", 1, 12, 140);

                        Builder.addUnit("Death Guard Icon Bearer", 1, 14, 45);

                        Builder.addUnit("Death Gaurd Land Raider", 1, 12, 240);

                        Builder.addUnit("Death Guard Predator Annihilator", 1, 12, 130);

                        Builder.addUnit("Death Guard Predator Destructor", 1, 12, 130);

                        Builder.addUnit("Death Guard Rhino", 1, 14, 75);

                        Builder.addUnit("Death Guard Sorcerer in Terminator Armour", 1, 14, 70);

                        Builder.new("Deathshroud Terminators")
                            .model(3, 12, 125)
                            .model(6, 12, 250)
                            .add();

                        Builder.addUnit("Foetid Bloat-drone", 1, 12, 100);

                        Builder.addUnit("Foetid Blightspawn", 1, 14, 50);

                        Builder.addUnit("Lord of Contagion", 1, 14, 80);

                        Builder.addUnit("Lord of Virulence", 1, 12, 100);

                        Builder.addUnit("Malignant Plaguecaster", 1, 14, 65);

                        Builder.addUnit("Miasmic Malignifier", 1, 12, 115);

                        Builder.addUnit("Mortarion", 1, 12, 325);

                        Builder.new("Myphitic Blight-haulers")
                            .model(1, 12, 100)
                            .model(2, 12, 200)
                            .model(3, 12, 300)
                            .add();

                        Builder.addUnit("Noxious Blightbringer", 1, 14, 50);

                        Builder.new("Plague Marines")
                            .model(5, 14, 80)
                            .model(7, 12, 110)
                            .model(10, 10, 160)
                            .add();


                        Builder.addUnit("Plague Surgeon", 1, 14, 65);

                        Builder.addUnit("Plagueburst Crawler", 1, 12, 165);

                        Builder.new("Poxwalkers")
                            .model(10, 12, 50)
                            .model(20, 10, 100)
                            .add();

                        Builder.addUnit("Tallyman", 1, 14, 45);

                        Builder.addUnit("Typhus", 1, 12, 100);
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