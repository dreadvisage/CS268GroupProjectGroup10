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
    <title>Death Guard</title>
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
                <h2>Death Guard</h2>
                <hr>

                <div id="image">
                    <img src="../images/death-guard-image.jpeg" alt="Death Guard">
                </div>

                <p>The Death Guard is a malevolent Chaos Space Marine Legion in the Warhammer 40,000 universe. Once noble warriors of the
                    Emperor's own Legiones Astartes, they succumbed to the dark influence of Chaos, transforming into a grotesque and
                    decay-ridden force that spreads pestilence and corruption.</p>

                <ul class="faction-list">
                    <li>
                        Fall to Nurgle: The Death Guard Legion pledged their loyalty to the Chaos God Nurgle during the Horus Heresy. In
                        exchange, they received the "gifts" of decay, resilience, and an eternal existence as Plague Marines. The corruption
                        of Nurgle transformed them into living embodiments of disease and decay.

                    </li>
                    <li>
                        Endurance in Decay: The Death Guard's bodies and wargear are perpetually corroded and decayed. Despite their grotesque
                        appearance, they are unnaturally resilient, with their decayed armor and flesh providing a deceptive layer of protection.
                        The Death Guard's unyielding nature is a testament to their unholy endurance.
                    </li>
                    <li>
                        Typhus and the Plague Companies: Typhus, the Herald of Nurgle, leads the Death Guard in spreading pestilence and decay.
                        He commands the Plague Companies, each dedicated to a specific aspect of contagion and death. The Plague Companies include
                        the Tainted Sons, the Drowned, and the Ferrymen, each specializing in their unique methods of spreading Nurgle's gifts.
                    </li>
                    <li>
                        Poxwalkers and Daemon Engines: Poxwalkers are victims of the Death Guard's contagions, transformed into mindless, zombie-like
                        thralls. These hordes of walking pestilence accompany the Death Guard into battle. Daemon Engines, such as the infamous
                        Plagueburst Crawler and Foetid Bloat-Drone, serve as twisted war machines, spreading disease and destruction.
                    </li>
                    <li>
                        Grandfather Nurgle's Favor: The Death Guard considers Nurgle's blessings as gifts and views their decay as a form of enlightenment.
                        They revel in the spreading of contagion, seeing it as a means of bringing Nurgle's bountiful gifts to the galaxy. Their ideology
                        revolves around the cycle of life and death, embracing decay as a natural and glorious process.
                    </li>
                </ul>

                <p>The Death Guard, once noble Space Marines, have succumbed to the corruption of Nurgle, becoming grotesque Plague Marines dedicated
                    to spreading decay and pestilence. Led by Typhus and organized into Plague Companies, they field hordes of Poxwalkers and twisted
                    Daemon Engines. The Death Guard's endurance in decay and their twisted worldview make them a resilient and malevolent force in the
                    grim and pestilent future of the 41st millennium.</p>
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