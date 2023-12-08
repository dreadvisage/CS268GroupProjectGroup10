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
    <title>Chaos Knights</title>
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
                <h2>Chaos Knights</h2>
                <hr>

                <div id="image">
                    <img src="../images/chaos-knights-image.jpeg" alt="Renegade Knights">
                </div>

                <p>Chaos Knights, also known as Renegade Knights, are a malevolent and twisted faction within the Warhammer 40,000 universe. These
                    towering war machines, once noble protectors of humanity, have fallen to the corruption of Chaos and now serve the dark powers
                    of the Warp.</p>

                <ul class="faction-list">
                    <li>
                        Corrupted Nobility: Chaos Knights were once part of the Knightly Houses, noble traditions dedicated to protecting humanity.
                        However, many have turned to Chaos, becoming Renegade Knights, driven by dark desires and the lure of power from the Warp. This
                        fall to corruption has transformed them into malevolent war machines.
                    </li>
                    <li>
                        Dark Allegiances: Chaos Knights pledge allegiance to the Chaos Gods or align themselves with the broader forces of Chaos. They
                        bear the marks and iconography of their chosen deity, such as Khorne, Tzeentch, Nurgle, or Slaanesh. These allegiances grant them
                        unique abilities and powers.
                    </li>
                    <li>
                        Cursed Machines: Chaos Knights are colossal bipedal war engines, often heavily adorned with spikes, chains, and blasphemous symbols.
                        They are armed with devastating weaponry, including rapid-fire battle cannons, chainswords, and harpoons. These weapons are often
                        corrupted and fueled by daemonic energies, causing immense devastation on the battlefield.
                    </li>
                    <li>
                        Daemonic Possession: Many Chaos Knights are possessed by daemons, further enhancing their combat prowess and resilience. These daemons
                        may emerge to protect the Knight in battle or take control, turning the machine into an avatar of destruction. The constant struggle
                        between the machine's pilot and the daemonic presence within makes Chaos Knights unpredictable.
                    </li>
                    <li>
                        Raids and Pillaging: Chaos Knights are often involved in raiding and pillaging across the galaxy, seeking to sate their dark desires
                        and serve the interests of Chaos. They are a constant threat to Imperial worlds and forces. Their actions are an affront to their former
                        noble purpose and a source of despair for the Imperium.
                    </li>
                </ul>

                <p>Chaos Knights, once noble defenders of humanity, have been corrupted by Chaos and now serve dark powers. These towering, twisted war machines
                    bear allegiance to the Chaos Gods, wield daemonic weaponry, and are often possessed by daemons. With their raider-like tendencies, Chaos
                    Knights are a relentless menace to the Imperium, embodying the grim and perilous future of the 41st millennium.</p>
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