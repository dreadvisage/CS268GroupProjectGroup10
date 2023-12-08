<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_NAVBAR;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Templars</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/factions.css">
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

                <div id="image">
                    <img src="../images/templars-image.jpeg" alt="Black Templars">
                </div>

                <p>The Black Templars are a fervent and zealous Space Marine Chapter in the Warhammer 40,000 universe. They are known for their
                    unshakable faith in the Emperor and their tireless crusade against heretics and aliens, making them one of the most relentless
                    and righteous Chapters of the Adeptus Astartes.</p>

                <ul class="faction-list">
                    <li>
                        Crusading Zeal: The Black Templars have an unquenchable zeal for battle, viewing themselves as the Emperor's sword against the enemies
                        of humanity. They maintain a never-ending crusade against heretics and xenos across the galaxy. Their fervor is unyielding, and they
                        disdain rest and resupply, constantly seeking new battles and challenges.
                    </li>
                    <li>
                        Independent Chapters: Unlike many Space Marine Chapters, the Black Templars operate as independent crusading fleets, with each fleet led
                        by a High Marshal. These fleets range across the galaxy, pursuing their holy mission. The Black Templars are notorious for their
                        decentralized organization, which can sometimes make them difficult to control by the wider Imperium.
                    </li>
                    <li>
                        Chaplaincy: The Chaplains within the Black Templars are a central aspect of their Chapter. These spiritual leaders instill discipline,
                        faith, and martial skill into their brethren. The Black Templars' Chaplains are known for their fierce rhetoric and their role in stoking
                        the fires of righteous fury.
                    </li>
                    <li>
                        Close Combat Prowess: The Black Templars excel in close combat, emphasizing assault tactics and favoring chain weapons, power swords,
                        and bolters with bayonets. Their combat doctrine revolves around brutal shock assaults, displaying fearlessness in the face of danger.
                    </li>
                    <li>
                        Size and Numbers: The Black Templars are known for maintaining a vast number of Space Marines, far exceeding the Codex Astartes' recommended
                        limit. Their numbers are sustained by the constant influx of neophytes and aspirants from their Crusade Fleets.
                    </li>
                </ul>

                <p>The Black Templars are a relentless and zealous Space Marine Chapter on an eternal crusade against heretics and xenos. They operate as independent
                    fleets, each under the leadership of a High Marshal, and their Chaplains play a central role in instilling faith and discipline in their ranks.
                    The Black Templars are renowned for their close combat prowess and unyielding resolve, making them a formidable force in the eternal war of the
                    grim and perilous future of the 41st millennium.</p>
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