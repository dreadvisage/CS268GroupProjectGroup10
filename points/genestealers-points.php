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
    <title>Genestealer Cults</title>
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

                <h2>Genestealer Cults</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Genestealer Cults");

                        Builder.new("Aberrants")
                            .model(5, 12, 185)
                            .model(10, 10, 370)
                            .add();

                        Builder.addUnit("Abominant", 1, 14, 75);

                        Builder.new("Achilles Ridgerunners")
                            .model(1, 14, 85)
                            .model(2, 12, 170)
                            .add();

                        Builder.new("Acolyte Hybrids")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Acolyte Iconward", 1, 14, 50);

                        Builder.new("Atalan Jackals")
                            .model(5, 14, 90)
                            .model(10, 10, 180)
                            .add();

                        Builder.addUnit("Biophagus", 1, 14, 60);

                        Builder.addUnit("Clamavus", 1, 14, 50);

                        Builder.addUnit("Goliath Rockgrinder", 1, 12, 155);

                        Builder.addUnit("Goliath Truck", 1, 12, 110);

                        Builder.new("Hybrid Metamorphs")
                            .model(5, 14, 80)
                            .model(10, 10, 160)
                            .add();

                        Builder.addUnit("Jackal Alphus", 1, 14, 60);

                        Builder.addUnit("Kelermorph", 1, 14, 55);

                        Builder.addUnit("Locus", 1, 14, 45);

                        Builder.addUnit("Magus", 1, 14, 50);

                        Builder.new("Neophyte Hybrids")
                            .model(10, 12, 90)
                            .model(20, 10, 180)
                            .add();

                        Builder.addUnit("Nexos", 1, 14, 60);

                        Builder.addUnit("Patriarch", 1, 14, 85);

                        Builder.addUnit("Primus", 1, 14, 90);

                        Builder.new("Purestrain Genestealers")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Reductus Saboteur", 1, 14, 65);

                        Builder.addUnit("Sanctus", 1, 14, 50);
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