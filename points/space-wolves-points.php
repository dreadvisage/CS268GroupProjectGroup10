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
    <title>Space Wolves</title>
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

                <h2>Space Wolves</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Space Wolves");

                        Builder.addUnit("Arjac Rockfist", 1, 14, 95);

                        Builder.addUnit("Bjorn the Fell-Handed", 1, 12, 180);

                        Builder.new("Blood Claws")
                            .model(10, 10, 140)
                            .model(15, 10, 210)
                            .add();

                        Builder.addUnit("Canis Wolfborn", 1, 14, 75);

                        Builder.addUnit("Cyberwolf", 1, 14, 20);

                        Builder.new("Fenisian Wolves")
                            .model(5, 14, 30)
                            .model(10, 12, 60)
                            .add();

                        Builder.new("Grey Hunters")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Harald Deathwolf", 1, 14, 85);

                        Builder.new("Hounds of Morkai")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .add();

                        Builder.addUnit("Iron Priest", 1, 14, 60);

                        Builder.addUnit("Krom Dragongaze", 1, 14, 65);

                        Builder.addUnit("Logan Grimnar", 1, 12, 100);

                        Builder.addUnit("Logan Grimnar on Stormrider", 1, 12, 180);

                        Builder.new("Long Fangs")
                            .model(5, 12, 150)
                            .model(6, 12, 180)
                            .add();

                        Builder.addUnit("Lukas the Trickster", 1, 14, 50);

                        Builder.addUnit("Murderfang", 1, 12, 170);

                        Builder.addUnit("Njal Stormcaller", 1, 14, 85);

                        Builder.addUnit("Ragnar Blackmane", 1, 14, 90);

                        Builder.new("Skyclaws")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .model(15, 10, 270)
                            .add();

                        Builder.addUnit("Space Wolves Venerable Dreadnought", 1, 12, 155);

                        Builder.addUnit("Stormfang Gunship", 1, 12, 300);

                        Builder.addUnit("Stormwolf", 1, 12, 250);

                        Builder.new("Thunderwolf Cavalry")
                            .model(3, 14, 90)
                            .model(6, 12, 180)
                            .add();

                        Builder.addUnit("Ulrik the Slayer", 1, 14, 70);

                        Builder.new("Wolf Guard")
                            .model(5, 14, 95)
                            .model(10, 10, 190)
                            .add();

                        Builder.addUnit("Wolf Guard Battle Leader in Terminator Armour", 1, 14, 75);

                        Builder.addUnit("Wolf Guard Battle Leader on Thunderwolf", 1, 14, 80);

                        Builder.addUnit("Wolf Guard Pack Leader", 1, 14, 30);

                        Builder.addUnit("Wolf Guard Pack Leader in Terminator Armour", 1, 14, 40);

                        Builder.addUnit("Wolf Guard Pack Leader with Jump Pack", 1, 14, 35);

                        Builder.new("Wolf Guard Terminators")
                            .model(5, 12, 195)
                            .model(10, 10, 390)
                            .add();

                        Builder.addUnit("Wolf Lord on Thunderwolf", 1, 12, 100);

                        Builder.new("Wolf Scouts")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.new("Wulfen")
                            .model(5, 14, 80)
                            .model(10, 10, 160)
                            .add();

                        Builder.addUnit("Wulfen Dreadnought", 1, 12, 130);
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