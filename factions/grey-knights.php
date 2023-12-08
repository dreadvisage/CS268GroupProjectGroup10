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
    <title>Grey Knights</title>
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
                <h2>Grey Knights</h2>
                <hr>

                <div id="image">
                    <img src="../images/grey-knights-image.jpeg" alt="Grey Knights">
                </div>

                <p>The Grey Knights are a unique and secretive Space Marine Chapter within the Warhammer 40,000 universe. Formed to combat the insidious
                    forces of Chaos and daemonkind, they are the Emperor's own daemon hunters, dedicated to the defense of humanity against the supernatural
                    threats that lurk in the Warp.</p>

                <ul class="faction-list">
                    <li>
                        Daemon Hunters: The Grey Knights are specifically created to combat the daemonic entities that emerge from the Warp. They are psychically
                        attuned and equipped with specialized anti-daemon wargear, making them a formidable force against Chaos. Their primary mission is to hunt
                        down and destroy any manifestations of Chaos, ensuring the protection of the Imperium.
                    </li>
                    <li>
                        Psychic Prowess: Grey Knights are psykers of exceptional power. Their psychic abilities are honed to combat daemonic entities, allowing
                        them to banish, disrupt, or destroy warp-spawned threats. The Grey Knights' psychic mastery is vital in countering the daemonic forces
                        that conventional weaponry often struggles to harm.
                    </li>
                    <li>
                        Chapter's Origin: The Grey Knights' creation is shrouded in secrecy. They were founded by the Emperor himself and are directly linked to
                        the Ordo Malleus, the Inquisition's branch dedicated to combating daemonic threats. Their gene-seed is unique, making them resistant to the
                        corrupting influence of Chaos.
                    </li>
                    <li>
                        Titanic War Machines: The Grey Knights have access to potent war machines, including the Grey Knight Dreadnoughts and the formidable Nemesis
                        Dreadknight. These machines are often deployed to deal with the most powerful daemon threats. The Dreadknight, in particular, is a towering
                        exoskeleton armed with powerful weaponry, piloted by a Grey Knight warrior.
                    </li>
                    <li>
                        Daemonhammers and Nemesis Force Weapons: Grey Knights wield advanced weaponry designed specifically for combating daemons. Daemonhammers are
                        massive power weapons, while Nemesis Force Weapons can disrupt and banish daemonic entities. These weapons are instrumental in the Grey Knights'
                        ability to engage and defeat even the most powerful daemonic adversaries.
                    </li>
                </ul>

                <p>The Grey Knights are an elite and secretive Space Marine Chapter with a singular purpose - the eradication of daemonic entities. Endowed with
                    potent psychic abilities and equipped with anti-daemon weaponry, they stand as humanity's bulwark against the supernatural threats that emerge
                    from the Warp. Founded by the Emperor himself, the Grey Knights exemplify a unique and vital force in the grim and perilous future of the 41st
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