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
    <title>Chaos Space Marines</title>
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
                <h2>Chaos Space Marines</h2>
                <hr>

                <div id="image">
                    <img src="../images/chaos-marines-image.jpeg" alt="Traitor Legions">
                </div>

                <p>Chaos Space Marines, also known as the Traitor Legions, are a malevolent and corrupted faction within the Warhammer 40,000
                    universe. They are former Space Marines who have turned against the Imperium and pledged their loyalty to the dark gods of Chaos,
                    becoming relentless agents of destruction.</p>

                <ul class="faction-list">
                    <li>
                        Betrayal of the Imperium: Chaos Space Marines were once loyal Adeptus Astartes, warriors of the Emperor's own design. However,
                        they turned against the Imperium, embracing the corrupting influence of Chaos. Their rebellion was sparked during the Horus Heresy,
                        when they followed the Warmaster Horus in a traitorous uprising against the Emperor.
                    </li>
                    <li>
                        Legion Diversity: Chaos Space Marine warbands originate from various Traitor Legions, each with its own unique character and combat
                        style. These legions include the World Eaters, Death Guard, Alpha Legion, and others. Each legion serves a specific Chaos God or has
                        its particular ideology.
                    </li>
                    <li>
                        Chaos Gods' Favor: Many Chaos Space Marines pledge themselves to the service of one of the four major Chaos Gods: Khorne, Tzeentch,
                        Nurgle, or Slaanesh. These dark deities grant them supernatural powers and mutations. Some warbands remain undivided, worshiping Chaos
                        as a whole and seeking the favor of all the gods.
                    </li>
                    <li>
                        Unholy Advancements: Chaos Space Marines often undergo further mutations and cybernetic enhancements, embracing their monstrous forms
                        and the gifts of the Chaos Gods. These mutations can include tentacles, daemonic appendages, or other grotesque alterations.
                    </li>
                    <li>
                        Relentless Assault: Chaos Space Marines excel in brutal close combat and use an array of heretical weaponry, such as bolt pistols,
                        chainaxes, and power swords. Their tactics often involve relentless assaults and surprise attacks, making them formidable adversaries on
                        the battlefield.
                    </li>
                </ul>

                <p>Chaos Space Marines, once loyal Space Marines, have turned traitor and embraced the dark powers of Chaos. These corrupted warriors are
                    diverse in their origins, legions, and allegiances to Chaos Gods. Their mutations and enhancements reflect their unholy devotion, and
                    they are relentless combatants, constantly waging war against the Imperium and all who oppose Chaos in the grim and perilous future of
                    the 41st millennium.</p>
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