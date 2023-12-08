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
    <title>Blood Angels</title>
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

                <h2>Blood Angels</h2>
                <hr>

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Blood Angels");

                        Builder.addUnit("Callidus Assassin", 1, 14, 90);

                        Builder.addUnit("Culexus Assassin", 1, 14, 85);

                        Builder.addUnit("Eversor Assassin", 1, 14, 75);

                        Builder.addUnit("Exaction Squad", 10, 10, 110);

                        Builder.addUnit("Imperial Navy Breachers", 10, 10, 105);

                        Builder.addUnit("Inquisitor", 1, 14, 55);

                        Builder.addUnit("Inquisitor Coteaz", 1, 14, 75);

                        Builder.addUnit("Inquisitor Eisenhorn", 1, 14, 65);

                        Builder.addUnit("Inquisitor Greyfax", 1, 14, 65);

                        Builder.addUnit("Inquisitor Karamazov", 1, 12, 130);

                        Builder.addUnit("Lord Inquisitor Kyria Draxus", 1, 14, 75);

                        Builder.addUnit("Rogue Trader Entourage", 4, 12, 105);

                        Builder.addUnit("Subductor Squad", 10, 10, 110);

                        Builder.addUnit("Vigiliant Squad", 10, 10, 105);

                        Builder.addUnit("Vindicare Assassin", 1, 14, 80);

                        Builder.new("Voidsmen-at-Arms")
                            .model(5, 14, 50)
                            .model(10, 10, 100)
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