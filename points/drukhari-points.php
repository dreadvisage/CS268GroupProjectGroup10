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
    <title>Drukhari</title>
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

                <h2>Drukhari</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Drukhari");

                        Builder.addUnit("Archon", 1, 14, 75);

                        Builder.addUnit("Beastmaster", 7, 12, 105);

                        Builder.addUnit("Court of the Archon", 4, 14, 85);

                        Builder.new("Cronos")
                            .model(1, 14, 50)
                            .model(2, 12, 100)
                            .add();

                        Builder.addUnit("Drazhar", 1, 14, 90);

                        Builder.new("Grotesques")
                            .model(3, 12, 105)
                            .model(6, 12, 210)
                            .add();

                        Builder.addUnit("Haemonculus", 1, 14, 60);

                        Builder.new("Hellions")
                            .model(5, 12, 100)
                            .model(10, 10, 200)
                            .add();

                        Builder.new("Incubi")
                            .model(5, 14, 80)
                            .model(10, 10, 160)
                            .add();

                        Builder.addUnit("Kabalite Warriors", 10, 10, 110);

                        Builder.addUnit("Lelith Hesperax", 1, 14, 85);

                        Builder.new("Mandrakes")
                            .model(5, 14, 65)
                            .model(10, 10, 130)
                            .add();

                        Builder.addUnit("Raider", 1, 14, 90);

                        Builder.addUnit("Ravager", 1, 12, 115);

                        Builder.addUnit("Razorwing Jetfighter", 1, 12, 170);

                        Builder.new("Reavers")
                            .model(3, 14, 70)
                            .model(6, 12, 140)
                            .add();

                        Builder.new("Scourges")
                            .model(5, 12, 110)
                            .model(10, 10, 220)
                            .add();

                        Builder.addUnit("Succubus", 1, 14, 55);

                        Builder.new("Talos")
                            .model(1, 14, 90)
                            .model(2, 12, 180)
                            .add();

                        Builder.addUnit("Urien Rakarth", 1, 14, 80);

                        Builder.addUnit("Venom", 1, 14, 80);

                        Builder.addUnit("Voidraven Bomber", 1, 12, 195);

                        Builder.new("Wracks")
                            .model(5, 14, 60)
                            .model(10, 10, 120)
                            .add();

                        Builder.addUnit("Wyches", 10, 12, 90);

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.addUnit("Tantalus", 1, 12, 230);
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