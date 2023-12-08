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
    <title>Chaos Space Marines</title>
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

                <h2>Chaos Space Marines</h2>
                <hr>

                <ul id="points-list">

                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Chaos Space Marines");

                        Builder.addUnit("Abaddon the Despoiler", 1, 12, 310);

                        Builder.new("Accursed Cultists")
                            .model(8, 14, 95)
                            .model(16, 10, 190)
                            .add();

                        Builder.new("Chaos Bikers")
                            .model(3, 14, 85)
                            .model(6, 12, 170)
                            .add();

                        Builder.addUnit("Chaos Land Raider", 1, 12, 240);

                        Builder.addUnit("Chaos Lord", 1, 14, 75);

                        Builder.addUnit("Chaos Lord in Terminator Armour", 1, 14, 95);

                        Builder.addUnit("Chaos Predator Annihilator", 1, 12, 130);

                        Builder.addUnit("Chaos Predator Destructor", 1, 12, 130);

                        Builder.addUnit("Chaos Rhino", 1, 14, 75);

                        Builder.addUnit("Chaos Spawn", 1, 14, 70);

                        Builder.new("Chaos Terminator Squad")
                            .model(5, 12, 195)
                            .model(10, 10, 390)
                            .add();

                        Builder.addUnit("Chaos Vindicator", 1, 12, 190);

                        Builder.new("Chosen")
                            .model(5, 12, 110)
                            .model(10, 10, 220)
                            .add();

                        Builder.new("Cultist Mob")
                            .model(10, 12, 55)
                            .model(20, 10, 110)
                            .add();

                        Builder.addUnit("Cypher", 1, 12, 105);

                        Builder.addUnit("Dark Apostle", 3, 14, 75);

                        Builder.addUnit("Dark Commune", 5, 14, 55);

                        Builder.addUnit("Defiler", 1, 12, 190);

                        Builder.addUnit("Exalted Champion", 1, 14, 70);

                        Builder.addUnit("Fabius Bile", 2, 14, 85);

                        Builder.addUnit("Fellgor Beastmen", 10, 12, 95);

                        Builder.addUnit("Forgefiend", 1, 12, 180);

                        Builder.addUnit("Haarken Worldclaimer", 1, 14, 90);

                        Builder.addUnit("Havocs", 5, 12, 135);

                        Builder.addUnit("Helbrute", 1, 12, 140);

                        Builder.addUnit("Heldrake", 1, 12, 205);

                        Builder.addUnit("Heretic Astartes Daemon Prince", 1, 12, 180);

                        Builder.addUnit("Heretic Astartes Daemon Prince with Wings", 1, 12, 195);

                        Builder.addUnit("Huron Blackheart", 1, 14, 80);

                        Builder.addUnit("Khorne Lord of Skulls", 1, 12, 480);

                        Builder.new("Legionaries")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .add();

                        Builder.addUnit("Lord Discordant on Helstalker", 1, 12, 190);

                        Builder.addUnit("Lucius the Eternal", 1, 14, 95);

                        Builder.addUnit("Master of Executions", 1, 14, 80);

                        Builder.addUnit("Master of Possession", 1, 14, 80);

                        Builder.addUnit("Maulerfiend", 1, 12, 155);

                        Builder.addUnit("Noctilith Crown", 1, 12, 125);

                        Builder.new("Noise Marines")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.new("Obliterators")
                            .model(2, 12, 170)
                            .model(4, 12, 340)
                            .add();

                        Builder.new("Possessed")
                            .model(5, 12, 140)
                            .model(10, 10, 280)
                            .add();

                        Builder.new("Raptors")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .add();

                        Builder.addUnit("Sorcerer", 1, 14, 60);

                        Builder.addUnit("Sorcerer in Terminator Armour", 1, 14, 90);

                        Builder.addUnit("Traitor Enforcer", 2, 14, 65);

                        Builder.addUnit("Traitor Guardsmen Squad", 10, 12, 70);

                        Builder.addUnit("Vashtorr the Arkifane", 1, 12, 190);

                        Builder.addUnit("Venomcrawler", 1, 12, 120);

                        Builder.new("Warp Talons")
                            .model(5, 12, 100)
                            .model(10, 10, 200)
                            .add();

                        Builder.addUnit("Warpsmith", 1, 14, 70);
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