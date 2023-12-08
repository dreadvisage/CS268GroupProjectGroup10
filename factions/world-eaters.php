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
    <title>World Eaters</title>
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
                <h2>World Eaters</h2>
                <hr>

                <div id="image">
                    <img src="../images/world-eaters-image.webp" alt="World Eaters">
                </div>

                <p>The World Eaters are a Chaos Space Marine Legion with a savage and bloodthirsty nature in the Warhammer 40,000 universe. Once known as the War Hounds, they were transformed
                    into the World Eaters through the corrupting influence of Chaos, embracing a berserker fury and becoming devotees of the Blood God, Khorne.
                </p>

                <ul class="faction-list">
                    <li>
                        Origins and Kharn the Betrayer: Originally named the War Hounds, the Legion embraced close-quarters combat and camaraderie. However, they fell to the temptations of Chaos
                        during the Horus Heresy, becoming the World Eaters. Kharn the Betrayer, their iconic Champion, is a fearsome and uncontrollable force on the battlefield, epitomizing the
                        Legion's devotion to bloodshed.
                    </li>
                    <li>
                        Khorne's Champions: The World Eaters worship Khorne, the Chaos God of Blood and War. Their actions on the battlefield, particularly the shedding of blood and the screams
                        of the dying, are offerings to Khorne. Champions of Khorne within the World Eaters are often blessed with mutations, becoming fearsome and unstoppable forces in battle.
                    </li>
                    <li>
                        Butcher's Nails: The World Eaters undergo the implantation of Butcher's Nails, cybernetic enhancements that heighten aggression but lead to uncontrollable bloodlust. This
                        augmentation intensifies the Legion's berserker nature, making them formidable but unpredictable in combat. The constant pain inflicted by the Butcher's Nails drives World
                        Eaters to seek relief through endless battle and the pursuit of greater challenges.
                    </li>
                    <li>
                        Berserker Assault Tactics: The World Eaters favor brutal and direct assault tactics, closing in on their enemies with overwhelming ferocity. They disdain subtlety and
                        strategic finesse, preferring the raw power of melee combat. The iconic chainaxe, favored by many World Eaters, embodies their brutal and uncompromising approach to warfare.
                    </li>
                    <li>
                        The Red Butchers and Daemon Engines: The most potent and bloodthirsty warriors within the World Eaters are known as the Red Butchers, champions whose combat prowess is further
                        enhanced by the favor of Khorne. The Legion also deploys Daemon Engines such as the infamous Heldrake and Maulerfiend, war machines fused with daemonic entities that embody
                        Khorne's destructive nature.
                    </li>
                </ul>

                <p>The World Eaters, once the War Hounds, are now devoted followers of Khorne, the Chaos God of Blood. Imbued with the ferocity of the Butcher's Nails, they are berserkers on the
                    battlefield, seeking to please Khorne through relentless carnage. Led by the infamous Kharn the Betrayer, the World Eaters embody the brutal and unforgiving nature of Chaos in
                    the grim and perilous future of the 41st millennium.</p>
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