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
    <title>Adeptus Custodes</title>
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

                <h2>Adeptus Custodes</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Adeptus Custodes");

                        Builder.addUnit("Aleya", 1, 14, 80);

                        Builder.new("Allarus Custodians")
                            .model(2, 12, 140)
                            .model(3, 12, 210)
                            .model(5, 12, 350)
                            .model(6, 12, 420)
                            .add();

                        Builder.addUnit("Anathema Psykana Rhino", 1, 14, 75);

                        Builder.addUnit("Blade Champion", 1, 12, 120);

                        Builder.new("Custodian Guard")
                            .model(4, 12, 200)
                            .model(5, 12, 250)
                            .add();

                        Builder.new("Custodian Wardens")
                            .model(4, 12, 220)
                            .model(5, 12, 275)
                            .add();

                        Builder.addUnit("Knight-Centura", 1, 14, 75);

                        Builder.new("Prosecutors")
                            .model(4, 14, 40)
                            .model(5, 14, 50)
                            .model(9, 14, 90)
                            .model(10, 10, 100)
                            .add();

                        Builder.addUnit("Shield-Captain", 4, 12, 220);

                        Builder.addUnit("Shield-Captain in Allarus Terminator Armour", 1, 12, 140);

                        Builder.addUnit("Shield-Captain on Dawneagle Jetbike", 1, 12, 180);

                        Builder.addUnit("Trajann Valoris", 1, 12, 160);

                        Builder.addUnit("Valerian", 1, 12, 115);

                        Builder.addUnit("Venerable Contemptor Dreadnought", 1, 12, 185);

                        Builder.addUnit("Venerable Land Raider", 1, 12, 240);

                        Builder.new("Vertus Praetors")
                            .model(2, 12, 160)
                            .model(3, 13, 240)
                            .add();

                        Builder.new("Vigilators")
                            .model(4, 14, 50)
                            .model(5, 15, 65)
                            .model(9, 13, 115)
                            .model(10, 11, 130)
                            .add();

                        Builder.new("Witchseekers")
                            .model(4, 14, 50)
                            .model(5, 15, 65)
                            .model(9, 13, 115)
                            .model(10, 11, 130)
                            .add();

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.new("Agamatus Custodians")
                            .model(3, 12, 240)
                            .model(6, 12, 480)
                            .add();

                        Builder.new("Aquilon Custodians")
                            .model(3, 12, 210)
                            .model(6, 12, 420)
                            .add();

                        Builder.addUnit("Ares Gunship", 1, 12, 240);

                        Builder.addUnit("Caladius Grav-tank", 1, 12, 215);

                        Builder.addUnit("Contemptor-Achillus Dreadnought", 1, 12, 165);

                        Builder.addUnit("Contemptor-Galatus Dreadnought", 1, 12, 175);

                        Builder.addUnit("Coronus Grav-carrier", 1, 12, 200);

                        Builder.addUnit("Custodian Guard with Adrasite and Pyrithite Spears", 5, 12, 300);

                        Builder.addUnit("Orion Assualt Dropship", 1, 12, 690);

                        Builder.addUnit("Pallas Grav-attack", 1, 12, 120);

                        Builder.addUnit("Sagittarum Custodians", 5, 12, 225);

                        Builder.addUnit("Telemon Heavy Dreadnought", 1, 12, 235);

                        Builder.new("Venatari Custodians")
                            .model(3, 12, 200)
                            .model(6, 12, 400)
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