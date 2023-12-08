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
    <title>World Eaters</title>
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

                <h2>World Eaters</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("World Eaters");

                        Builder.addUnit("Angron", 1, 12, 415);

                        Builder.new("Eightbound")
                            .model(3, 12, 135)
                            .model(6, 12, 270)
                            .add();

                        Builder.new("Exalted Eightbound")
                            .model(3, 12, 150)
                            .model(6, 12, 300)
                            .add();

                        Builder.new("Jakhals")
                            .model(10, 12, 70)
                            .model(20, 10, 140)
                            .add();

                        Builder.new("Khorne Berzerkers")
                            .model(5, 12, 100)
                            .model(10, 10, 200)
                            .add();

                        Builder.addUnit("Khorne Lord of Skulls", 1, 12, 480);

                        Builder.addUnit("Khârn the Betrayer", 1, 14, 80);

                        Builder.addUnit("Lord Invocatus", 1, 12, 140);

                        Builder.addUnit("World Eaters Chaos Spawn", 2, 14, 65);

                        Builder.addUnit("World Eaters Daemon Prince", 1, 12, 200);

                        Builder.addUnit("World Eaters Daemon Prince with Wings", 1, 12, 195);

                        Builder.addUnit("World Eaters Defiler", 1, 12, 190);

                        Builder.addUnit("World Eaters Forgefiend", 1, 12, 170);

                        Builder.addUnit("World Eaters Helbrute", 1, 12, 140);

                        Builder.addUnit("World Eaters Heldrake", 1, 12, 210);

                        Builder.addUnit("World Eaters Land Raider", 1, 12, 240);

                        Builder.addUnit("World Eaters Lord on Juggernaut", 1, 12, 100);

                        Builder.addUnit("World Eaters Master of Executions", 1, 14, 80);

                        Builder.addUnit("World Eaters Maulerfiend", 1, 12, 155);

                        Builder.addUnit("World Eaters Predator Annihilator", 1, 12, 130);

                        Builder.addUnit("World Eaters Predator Destructor", 1, 12, 130);

                        Builder.addUnit("World Eaters Rhino", 1, 14, 75);

                        Builder.new("World Eaters Terminator Squad")
                            .model(5, 12, 190)
                            .model(10, 10, 380)
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