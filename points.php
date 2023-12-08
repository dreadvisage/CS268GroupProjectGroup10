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
    <title>Points</title>
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

                <h2 style="text-align: center;">Points</h2>

                <p>
                    Welcome to the Points main page. Click on your desired faction to be taken to the respective point page.
                </p>

                <br>
                <a href="points/sororitas-points.php">Adepta Sororitas</a>

                <br><br>
                <a href="points/custodes-points.php">Adeptus Custodes</a>

                <br><br>
                <a href="points/mechanicus-points.php">Adeptus Mechanicus</a>

                <br><br>
                <a href="points/titanicus-points.php">Adeptus Titanicus</a>

                <br><br>
                <a href="points/aeldari-points.php">Aeldari</a>

                <br><br>
                <a href="points/agents-points.php">Agents of the Imperium</a>

                <br><br>
                <a href="points/militarum-points.php">Astra Militarum</a>

                <br><br>
                <a href="points/templars-points.php">Black Templars</a>

                <br><br>
                <a href="points/blood-angels-points.php">Blood Angels</a>

                <br><br>
                <a href="points/daemons-points.php">Chaos Daemons</a>

                <br><br>
                <a href="points/chaos-knights-points.php">Chaos Knights</a>

                <br><br>
                <a href="points/chaos-marines-points.php">Chaos Space Marines</a>

                <br><br>
                <a href="points/dark-angels-points.php">Dark Angels</a>

                <br><br>
                <a href="points/death-guard-points.php">Death Guard</a>

                <br><br>
                <a href="points/deathwatch-points.php">Deathwatch</a>

                <br><br>
                <a href="points/drukhari-points.php">Drukhari</a>

                <br><br>
                <a href="points/genestealers-points.php">Genestealer Cults</a>

                <br><br>
                <a href="points/grey-knights-points.php">Grey Knights</a>

                <br><br>
                <a href="points/imperial-knights-points.php">Imperial Knights</a>

                <br><br>
                <a href="points/votann-points.php">Leauges of Votann</a>

                <br><br>
                <a href="points/necrons-points.php">Necrons</a>

                <br><br>
                <a href="points/orks-points.php">Orks</a>

                <br><br>
                <a href="points/space-marines-points.php">Space Marines</a>

                <br><br>
                <a href="points/space-wolves-points.php">Space Wolves</a>

                <br><br>
                <a href="points/t'au-points.php">T'au Empire</a>

                <br><br>
                <a href="points/thousand-sons-points.php">Thousand Sons</a>

                <br><br>
                <a href="points/tyranids-points.php">Tyranids</a>

                <br><br>
                <a href="points/world-eaters-points.php">World Eaters</a>
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