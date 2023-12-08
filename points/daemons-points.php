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
    <title>Chaos Daemons</title>
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

                <h2>Chaos Daemons</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Chaos Daemons");

                        Builder.new("Beast of Nurgle")
                            .model(1, 14, 70)
                            .model(2, 12, 140)
                            .add();

                        Builder.addUnit("Be'lakor", 1, 12, 350);

                        Builder.new("Bloodcrushers")
                            .model(3, 12, 120)
                            .model(6, 12, 240)
                            .add();

                        Builder.addUnit("Bloodletters", 10, 10, 140);

                        Builder.addUnit("Bloodmaster", 1, 14, 75);

                        Builder.addUnit("Bloodthirster", 1, 12, 320);

                        Builder.addUnit("Blue Horrors", 1, 12, 125);

                        Builder.addUnit("Burning Chariot", 1, 12, 115);

                        Builder.addUnit("Changecaster", 1, 14, 65);

                        Builder.addUnit("Contorted Epitome", 1, 14, 85);

                        Builder.addUnit("Daemon Prince of Chaos", 1, 12, 200);

                        Builder.addUnit("Daemon Prince of Chaos with Winges", 1, 12, 195);

                        Builder.addUnit("Daemonettes", 1, 12, 120);

                        Builder.addUnit("Epidemius", 1, 14, 85);

                        Builder.addUnit("Exalted Flamer", 1, 14, 70);

                        Builder.addUnit("Exalted Seeker Chariot", 1, 12, 115);

                        Builder.addUnit("Fateskimmer", 1, 12, 105);

                        Builder.addUnit("Feculent Gnarimaw", 1, 12, 100);

                        Builder.new("Fiends")
                            .model(3, 12, 130)
                            .model(6, 12, 260)
                            .add();

                        Builder.new("Flamers")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .add();

                        Builder.new("Flesh Hounds")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Fluxmaster", 1, 14, 60);

                        Builder.addUnit("Great Unclean One", 1, 12, 250);

                        Builder.new("Hellflayer")
                            .model(1, 12, 105)
                            .model(2, 12, 210)
                            .add();

                        Builder.addUnit("Horticulous Slimux", 1, 12, 120);

                        Builder.addUnit("Infernal Enrapturess", 1, 14, 65);

                        Builder.addUnit("Kairos Fateweaver", 1, 12, 285);

                        Builder.addUnit("Karanak", 1, 14, 75);

                        Builder.addUnit("Keeper of Secrets", 1, 12, 330);

                        Builder.addUnit("Lord of Change", 1, 12, 260);

                        Builder.new("Nurglings")
                            .model(3, 14, 35)
                            .model(6, 14, 70)
                            .model(9, 12, 105)
                            .add();

                        Builder.addUnit("Pink Horrors", 10, 10, 140);

                        Builder.new("Plague Drones")
                            .model(3, 12, 120)
                            .model(6, 12, 240)
                            .add();

                        Builder.addUnit("Plaguebearers", 10, 10, 125);

                        Builder.addUnit("Poxbringer", 1, 14, 65);

                        Builder.addUnit("Rendmaster on Blood Throne", 1, 12, 150);

                        Builder.addUnit("Rotigus", 1, 12, 260);

                        Builder.new("Screamers")
                            .model(3, 14, 80)
                            .model(6, 12, 180)
                            .add();

                        Builder.new("Seeker Chariot")
                            .model(1, 14, 75)
                            .model(2, 12, 150)
                            .add();

                        Builder.new("Seekers")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Shalaxi Helbane", 1, 12, 450);

                        Builder.addUnit("Skarbrand", 1, 12, 345);

                        Builder.addUnit("Skull Altar", 1, 12, 105);

                        Builder.addUnit("Skull Cannon", 1, 12, 105);

                        Builder.addUnit("Skullmaster", 1, 12, 105);

                        Builder.addUnit("Skulltaker", 1, 14, 95);

                        Builder.addUnit("Sloppity Bilepiper", 1, 14, 55);

                        Builder.addUnit("Soul Grinder", 1, 12, 200);

                        Builder.addUnit("Spoilpox Scrivener", 1, 14, 65);

                        Builder.addUnit("Syll'esske", 1, 12, 120);

                        Builder.addUnit("The Blue Scribes", 1, 14, 65);

                        Builder.addUnit("The Changeling", 1, 14, 90);

                        Builder.addUnit("The Masque of Slaanesh", 1, 12, 105);

                        Builder.addUnit("Tormenbringer on Exalted Seeker Chariot", 1, 12, 140);

                        Builder.addUnit("Tranceweaver", 1, 14, 60);
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