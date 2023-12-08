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
    <title>Deathwatch</title>
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
                <h2>Deathwatch</h2>
                <hr>

                <div id="image">
                    <img src="../images/deathwatch-image.jpeg" alt="Deathwatch">
                </div>

                <p>The Deathwatch is a highly specialized and secretive faction within the Warhammer 40,000 universe. Composed of
                    elite Space Marines from various Chapters, the Deathwatch serves as the Imperium's foremost xenos-hunting force,
                    tasked with combating the most insidious and dangerous alien threats.</p>

                <ul class="faction-list">
                    <li>
                        Xenos Hunters: The Deathwatch is exclusively composed of veteran Space Marines drawn from different Chapters. These warriors,
                        chosen for their exceptional skills and experience, form an elite xenos-hunting force. The Deathwatch is dedicated to countering
                        the various alien threats that pose a danger to the Imperium.
                    </li>
                    <li>
                        Watch Fortresses: The Deathwatch operates from Watch Fortresses, strategically positioned across the galaxy. These fortresses
                        serve as their bases of operations, equipped with advanced technology for monitoring and responding to xenos incursions. Each
                        Watch Fortress is a highly fortified bastion, acting as a hub for the Deathwatch's operations.
                    </li>
                    <li>
                        Specialized Kill-teams: Deathwatch Kill-teams are formed from a mix of veteran Space Marines, each specializing in combating
                        specific xenos threats. This diverse composition ensures the Deathwatch is well-equipped to face any alien adversary. Kill-teams
                        are often deployed to hotspots where xenos activity is detected.
                    </li>
                    <li>
                        Xenos Technology: The Deathwatch utilizes xenos technology, adapting it for their own use. This includes weaponry, armor, and
                        equipment obtained from defeated alien foes. This willingness to use xenos tech sets the Deathwatch apart from other Space Marine
                        Chapters.
                    </li>
                    <li>
                        Oath of the Long Vigil: Deathwatch members take the Oath of the Long Vigil, swearing allegiance to the Deathwatch for a specified
                        period. After this service, they return to their original Chapter, bringing with them valuable experience and knowledge gained
                        from battling xenos threats. This oath ensures a continuous influx of seasoned warriors into the Deathwatch.
                    </li>
                </ul>

                <p>The Deathwatch, an elite xenos-hunting force, is composed of veteran Space Marines from diverse Chapters. Deployed from Watch Fortresses,
                    Deathwatch Kill-teams specialize in combating specific alien threats and adapt xenos technology for their own use. With their Oath of
                    the Long Vigil, they serve as a vital bulwark against the most dangerous xenos adversaries in the grim and perilous future of the 41st
                    millennium.</p>
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