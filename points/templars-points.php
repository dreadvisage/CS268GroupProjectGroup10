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
    <title>Black Templars</title>
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

                <h2>Black Templars</h2>
                <hr>

                <ul id="points-list">

                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Black Templars");

                        Builder.addUnit("Black Templars Gladiator Lancer", 1, 12, 165);

                        Builder.addUnit("Black Templars Gladiator Reaper", 1, 12, 155);

                        Builder.addUnit("Black Templars Gladiator Valiant", 1, 12, 155);

                        Builder.addUnit("Black Templars Impulsor", 1, 14, 85);

                        Builder.addUnit("Black Templars Repulsor", 1, 12, 200);

                        Builder.addUnit("Black Templars Gladiator Executioner", 1, 12, 235);

                        Builder.addUnit("Castellan", 1, 14, 65);

                        Builder.addUnit("Chaplain Grimaldus", 1, 14, 95);

                        Builder.new("Crusader Squad")
                            .modelCustom("1 Sword Brother, 4 Initiates", 30, 65)
                            .modelCustom("1 Sword Brother, 9 Initiates", 28, 125)
                            .modelCustom("1 Sword Brother, 4 Initiates, 5 Neophytes", 6, 125)
                            .modelCustom("1 Sword Brother, 9 Initiates, 10 Neophytes", 4, 250)
                            .add();

                        Builder.addUnit("High Marshal Helbrecht", 1, 14, 95);

                        Builder.addUnit("Marshal", 1, 14, 80);

                        Builder.new("Primaris Crusader Squad")
                            .modelCustom("1 Sword Brother, 5 Initiates, 4 Neophytes", 6, 140)
                            .modelCustom("1 Sword Brother, 11 Initiates, 8 Neophytes", 6, 280)
                            .add();

                        Builder.new("Primaris Sword Brethren")
                            .model(5, 12, 140)
                            .model(10, 10, 280)
                            .add();

                        Builder.addUnit("The Emperor's Champion", 1, 14, 75);
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