<?php
session_start();
require_once 'utils/constants.php';

require_once PATH_NAVBAR;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factions</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/article-section.css">
</head>

<body>
    <div id="background-image"><img src="images/warhammer-background.jpg" alt="Warhammer Background"></div>

    <?php
    echoNavbar(0);
    ?>

    <main>
        <div class="display">
            <div class="pad"></div>
            <div id="article">

                <h2 style="text-align: center;">Factions</h2>

                <p>
                    Welcome to the Factions main page. Click on your desired faction to be taken to the respective faction page.
                </p>

                <br>
                <a href="factions/adepta-sororitas.php">Adepta Sororitas</a>

                <br><br>
                <a href="factions/adeptus-custodes.php">Adeptus Custodes</a>

                <br><br>
                <a href="factions/adeptus-mechanicus.php">Adeptus Mechanicus</a>

                <br><br>
                <a href="factions/adeptus-titanicus.php">Adeptus Titanicus</a>

                <br><br>
                <a href="factions/aeldari.php">Aeldari</a>

                <br><br>
                <a href="factions/agents-of-imperium.php">Agents of the Imperium</a>

                <br><br>
                <a href="factions/astra-militarum.php">Astra Militarum</a>

                <br><br>
                <a href="factions/black-templars.php">Black Templars</a>

                <br><br>
                <a href="factions/blood-angels.php">Blood Angels</a>

                <br><br>
                <a href="factions/chaos-daemons.php">Chaos Daemons</a>

                <br><br>
                <a href="factions/chaos-knights.php">Chaos Knights</a>

                <br><br>
                <a href="factions/chaos-marines.php">Chaos Space Marines</a>

                <br><br>
                <a href="factions/dark-angels.php">Dark Angels</a>

                <br><br>
                <a href="factions/death-guard.php">Death Guard</a>

                <br><br>
                <a href="factions/deathwatch.php">Deathwatch</a>

                <br><br>
                <a href="factions/drukhari.php">Drukhari</a>

                <br><br>
                <a href="factions/genestealer-cults.php">Genestealer Cults</a>

                <br><br>
                <a href="factions/grey-knights.php">Grey Knights</a>

                <br><br>
                <a href="factions/imperial-knights.php">Imperial Knights</a>

                <br><br>
                <a href="factions/leagues-of-votann.php">Leauges of Votann</a>

                <br><br>
                <a href="factions/necrons.php">Necrons</a>

                <br><br>
                <a href="factions/orks.php">Orks</a>

                <br><br>
                <a href="factions/space-marine.php">Space Marines</a>

                <br><br>
                <a href="factions/space-wolves.php">Space Wolves</a>

                <br><br>
                <a href="factions/t'au-empire.php">T'au Empire</a>

                <br><br>
                <a href="factions/thousand-sons.php">Thousand Sons</a>

                <br><br>
                <a href="factions/tyranids.php">Tyranids</a>

                <br><br>
                <a href="factions/world-eaters.php">World Eaters</a>
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