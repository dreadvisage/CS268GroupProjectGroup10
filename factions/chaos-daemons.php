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
    <title>Chaos Daemons</title>
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
                <h2>Chaos Daemons</h2>
                <hr>

                <div id="image">
                    <img src="../images/daemons-image.jpeg" alt="Chaos Daemons">
                </div>

                <p>Chaos Daemons are malevolent and otherworldly entities that hail from the Warp, a realm of pure chaos and psychic energy, in the Warhammer
                    40,000 universe. These entities serve the dark deities of Chaos and are embodiments of the most primal and destructive emotions.</p>

                <ul class="faction-list">
                    <li>
                        Four Ruinous Powers: Chaos Daemons are aligned with one of the four major Chaos Gods: Khorne, the Blood God of violence; Tzeentch, the
                        Changer of Ways and master of sorcery; Nurgle, the Lord of Decay and disease; and Slaanesh, the Prince of Pleasure and excess. Each Chaos
                        God represents a different aspect of chaos and corruption.
                    </li>
                    <li>
                        Ever-Shifting Forms: Chaos Daemons are shape-shifters, taking on a variety of forms to reflect their patron god's essence. They range from
                        hulking, brutal warriors to seductive and monstrous creatures, all driven by the dark desires and emotions of their god. Their chaotic
                        nature makes them unpredictable and difficult to comprehend.
                    </li>
                    <li>
                        Realm of the Warp: Chaos Daemons dwell within the Warp, a turbulent and malevolent dimension. They can breach into real space through warp
                        rifts, possessing individuals, summoning daemonic legions, and causing havoc in the material universe. These breaches are often linked to
                        psychic disturbances and cults devoted to Chaos.
                    </li>
                    <li>
                        Infinite Hordes: Chaos Daemons are infinite in number and can be summoned in unending hordes. They serve as the vanguard of many Chaos forces,
                        accompanying traitor Space Marines, Renegades, and heretical cults. Their sheer numbers and supernatural abilities make them formidable opponents.
                    </li>
                    <li>
                        Warped Morality: The morality of Chaos Daemons is alien and grotesque. They have no true sense of right or wrong, and their actions are dictated
                        solely by their patron god's desires and the whims of the Warp. Their existence is an affront to the order and reason of the Imperium.
                    </li>
                </ul>

                <p>Chaos Daemons, foul entities born from the Warp, serve the dark gods of Khorne, Tzeentch, Nurgle, and Slaanesh. These ever-shifting, malevolent
                    creatures are embodiments of chaos, destruction, and dark desires. They can manifest in the material universe, causing widespread havoc and destruction.
                    With their infinite numbers and supernatural powers, they are a relentless threat to the Imperium and all who oppose the forces of Chaos in the grim
                    and perilous future of the 41st millennium.</p>
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