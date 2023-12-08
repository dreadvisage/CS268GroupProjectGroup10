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
    <title>Dark Angels</title>
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

                <h2>Dark Angels</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Dark Angels");

                        Builder.addUnit("Asmodai", 1, 14, 70);

                        Builder.addUnit("Azrael", 1, 12, 105);

                        Builder.addUnit("Belial", 1, 14, 85);

                        Builder.new("Deathwing Command Squad")
                            .model(5, 12, 210)
                            .model(10, 10, 420)
                            .add();

                        Builder.new("Deathwing Knights")
                            .model(5, 12, 235)
                            .model(10, 10, 470)
                            .add();

                        Builder.addUnit("Deathwing Strikemaster", 1, 14, 80);

                        Builder.new("Deathwing Terminator Squad")
                            .model(5, 12, 200)
                            .model(10, 10, 400)
                            .add();

                        Builder.addUnit("Ezekiel", 1, 14, 75);

                        Builder.addUnit("Lazarus", 1, 14, 70);

                        Builder.addUnit("Lion El'Jonson", 1, 12, 380);

                        Builder.addUnit("Nephilim Jetfighter", 1, 12, 195);

                        Builder.new("Ravenwing Black Knights")
                            .model(3, 12, 110)
                            .model(6, 12, 220)
                            .add();

                        Builder.new("Ravenwing Command Squad")
                            .model(3, 12, 130)
                            .model(6, 12, 260)
                            .add();

                        Builder.addUnit("Ravenwing Dark Talon", 1, 12, 210);

                        Builder.addUnit("Ravenwing Darkshroud", 1, 12, 125);

                        Builder.addUnit("Ravenwing Land Speeder Vengeance", 1, 12, 160);

                        Builder.addUnit("Ravenwing Talonmaster", 1, 12, 105);

                        Builder.addUnit("Sammael", 1, 12, 130);
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