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
    <title>Aeldari</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/points.css">
    <script src="../js/create-unit-helper.js"></script>
</head>

<body>
    <div id="background-image"><img src="../images/warhammer-background.jpg" alt="Warhammer Background"></div>

    <?php echoNavbar(1); ?>

    <main>
        <div class="display">
            <div class="pad"></div>
            <div id="article">

                <h2>Aeldari</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Aeldari");

                        Builder.addUnit("Asurmen", 1, 12, 135);

                        Builder.addUnit("Autarch", 1, 14, 75);

                        Builder.addUnit("Autarch Skyrunner", 1, 14, 90);

                        Builder.addUnit("Autarch Wayleaper", 1, 12, 115);

                        Builder.addUnit("Avatar of Khaine", 1, 12, 335);

                        Builder.addUnit("Baharroth", 1, 12, 125);

                        Builder.new("Corsair Voidreavers")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.new("Corsair Voidscarred")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .add();

                        Builder.addUnit("Crimson Hunter", 1, 12, 160);

                        Builder.new("Dark Reapers")
                            .model(5, 14, 80)
                            .model(10, 10, 160)
                            .add();

                        Builder.addUnit("Death Jester", 1, 14, 90);

                        Builder.new("Dire Avengers")
                            .model(5, 14, 70)
                            .model(10, 10, 140)
                            .add();

                        Builder.addUnit("Eldrad Ulthran", 1, 12, 110);

                        Builder.addUnit("Falcon", 1, 12, 140);

                        Builder.addUnit("Farseer", 1, 14, 80);

                        Builder.addUnit("Farseer Skyrunner", 1, 14, 90);

                        Builder.new("Fire Dragon")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Fire Prism", 1, 12, 180);

                        Builder.addUnit("Fuegan", 1, 12, 115);

                        Builder.addUnit("Guardian Defenders", 11, 10, 110);

                        Builder.addUnit("Hemlock Wraithfighter", 1, 12, 155);

                        Builder.new("Howling Banshees")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Illic Nightspear", 1, 14, 70);

                        Builder.addUnit("Jain Zar", 1, 12, 105);

                        Builder.addUnit("Karandras", 1, 12, 100);

                        Builder.addUnit("Maugan Ra", 1, 12, 130);

                        Builder.addUnit("Night Spinner", 1, 12, 180);

                        Builder.addUnit("Prince Yriel", 1, 12, 100);

                        Builder.new("Rangers")
                            .model(5, 14, 55)
                            .model(10, 10, 110)
                            .add();

                        Builder.addUnit("Shadowseer", 1, 14, 60);

                        Builder.new("Shining Spears")
                            .model(3, 12, 120)
                            .model(6, 12, 240)
                            .add();

                        Builder.new("Shroud Runners")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .add();

                        Builder.new("Skyweavers")
                            .model(2, 14, 95)
                            .model(4, 12, 190)
                            .add();

                        Builder.addUnit("Solitaire", 1, 12, 115);

                        Builder.addUnit("Spiritseer", 1, 14, 65);

                        Builder.addUnit("Starweaver", 1, 14, 80);

                        Builder.addUnit("Storm Guardians", 11, 10, 115);

                        Builder.new("Striking Sqorpions")
                            .model(5, 14, 75)
                            .model(10, 10, 150)
                            .add();

                        Builder.addUnit("Support Weapons", 1, 12, 125);

                        Builder.new("Swooping Hawks")
                            .model(5, 14, 75)
                            .model(10, 10, 150)
                            .add();

                        Builder.addUnit("The Visarch", 1, 14, 90);

                        Builder.addUnit("The Yncarnes", 1, 12, 350);

                        Builder.new("Troupe")
                            .model(5, 14, 75)
                            .model(6, 14, 90)
                            .model(11, 10, 165)
                            .model(12, 10, 180)
                            .add();

                        Builder.addUnit("Troupe Master", 1, 14, 55);

                        Builder.addUnit("Voidweaver", 1, 12, 125);

                        Builder.addUnit("Vyper", 1, 14, 85);

                        Builder.addUnit("War Walker", 1, 12, 110);

                        Builder.addUnit("Warlock", 1, 14, 45);

                        Builder.new("Warlock Conclave")
                            .model(2, 14, 60)
                            .model(4, 12, 120)
                            .add();

                        Builder.addUnit("Warlock Skyrunner", 1, 14, 55);

                        Builder.new("Warlock Skyrunner Conclave")
                            .model(2, 12, 100)
                            .model(3, 12, 150)
                            .add();

                        Builder.new("Warp Spiders")
                            .model(5, 12, 115)
                            .model(10, 10, 230)
                            .add();

                        Builder.addUnit("Wave Serpent", 1, 12, 120);

                        Builder.addUnit("Webway Gate", 2, 12, 220);

                        Builder.new("Windriders")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .model(9, 12, 240)
                            .add();

                        Builder.new("Wraithblades")
                            .model(5, 12, 170)
                            .model(10, 10, 340)
                            .add();

                        Builder.new("Wraithguard")
                            .model(5, 12, 170)
                            .model(10, 10, 340)
                            .add();

                        Builder.addUnit("Wraithknight", 1, 12, 510);

                        Builder.addUnit("Wraithlord", 1, 12, 160);

                        Builder.addUnit("Yvraine", 1, 12, 100);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Cobra", 1, 12, 415);

                        Builder.addUnit("Hornet", 1, 12, 100);

                        Builder.addUnit("Irillyth", 1, 12, 105);

                        Builder.addUnit("Lynx", 1, 12, 180);

                        Builder.addUnit("Nightwing", 1, 12, 150);

                        Builder.addUnit("Scorpion", 1, 12, 410);

                        Builder.addUnit("Skathach Wraithknight", 1, 12, 490);

                        Builder.new("Shadow Specters")
                            .model(5, 14, 95)
                            .model(10, 10, 190)
                            .modelCustom("Exarch", 16, "+30", true)
                            .add();

                        Builder.addUnit("Phantom Titan", 1, 10, 2100);

                        Builder.addUnit("Revenant Titan", 1, 10, 1100);

                        Builder.addUnit("Warp Hunter", 1, 12, 145);

                        Builder.addUnit("Wraithseer", 1, 12, 160);
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