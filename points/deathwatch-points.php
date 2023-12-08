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
    <title>Deathwatch</title>
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

                <h2>Deathwatch</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Deathwatch");

                        Builder.addUnit("Corvus Blackstar", 1, 12, 180);

                        Builder.new("Deathwatch Terminator Squad")
                            .model(5, 12, 210)
                            .model(10, 10, 420)
                            .add();

                        Builder.new("Deathwatch Veterans")
                            .model(5, 12, 110)
                            .model(10, 10, 220)
                            .add();

                        Builder.new("Fortis Kill Team")
                            .model(5, 12, 115)
                            .model(10, 10, 230)
                            .add();

                        Builder.new("Indomitor Kill Team")
                            .model(5, 12, 135)
                            .model(10, 10, 270)
                            .add();

                        Builder.addUnit("Kill Team Cassius", 11, 10, 255);

                        Builder.new("Proteus Kill Team")
                            .model(5, 12, 180)
                            .model(10, 10, 360)
                            .add();

                        Builder.new("Spectrus Kill Team")
                            .model(5, 12, 105)
                            .model(10, 10, 210)
                            .add();

                        Builder.new("Veteran Bike Squad")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .add();

                        Builder.addUnit("Watch Captain Artemis", 1, 14, 75);

                        Builder.addUnit("Watch Master", 1, 12, 115);
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