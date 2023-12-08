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
    <title>Drukhari</title>
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
                <h2>Drukhari</h2>
                <hr>

                <div id="image">
                    <img src="../images/drukhari-image.jpeg" alt="The Dark Eldar">
                </div>

                <p>The Drukhari, formerly known as the Dark Eldar, are a sinister and sadistic faction within the Warhammer 40,000 universe.
                    Hailing from the dark city of Commorragh in the Webway, the Drukhari revel in cruelty, piracy, and the pursuit of hedonistic
                    pleasures.</p>

                <ul class="faction-list">
                    <li>
                        Dark City of Commorragh: The Drukhari reside in Commorragh, a dark and sprawling city hidden within the Webway. This labyrinthine
                        metropolis is a haven for the Drukhari, providing refuge from the predations of the Chaos God Slaanesh. Commorragh is a twisted
                        realm of decadence, where each dark spire houses covens, Kabals, and arenas for gladiatorial combat.
                    </li>
                    <li>
                        Soul-Stealing Raiders: The Drukhari are notorious raiders who traverse the Webway in their sleek and darkly elegant vessels. They
                        conduct lightning-fast raids on unsuspecting worlds, capturing victims to harvest their souls. The harvested souls are a source of
                        sustenance for the Drukhari, as they stave off the soul-hunger that plagues their race.
                    </li>
                    <li>
                        Kabals, Wych Cults, and Haemonculus Covens: Drukhari society is divided into Kabals, Wych Cults, and Haemonculus Covens, each with
                        its unique focus. Kabals are militaristic and political, Wych Cults revel in gladiatorial combat, and Haemonculus Covens engage in
                        grotesque experimentation. Each faction vies for power and influence within Commorragh's dark hierarchy.
                    </li>
                    <li>
                        Combat Drugs and Wych Cult Arenas: Drukhari warriors often use combat drugs to enhance their physical abilities and sensations.
                        This addiction to pleasure and pain drives their combat prowess. Wych Cults host bloody and theatrical arena battles where warriors
                        engage in brutal displays of skill to entertain the denizens of Commorragh.
                    </li>
                    <li>
                        Dark Eldar Philosophy: The Drukhari are driven by the pursuit of avoiding Slaanesh's clutches. To stave off the god's hunger, they
                        engage in acts of sadism, cruelty, and hedonism. Their raids and atrocities are not only for survival but also a twisted form of
                        entertainment and a means of proving their superiority.
                    </li>
                </ul>

                <p>The Drukhari, denizens of the dark city Commorragh, are sadistic raiders who traverse the Webway in pursuit of souls to satiate
                    their soul-hunger. Divided into Kabals, Wych Cults, and Haemonculus Covens, they engage in a brutal and decadent society. Their
                    combat prowess is enhanced by combat drugs, and their philosophy revolves around the pursuit of pleasure and the avoidance of
                    Slaanesh's grasp. In the grim and dark future of the 41st millennium, the Drukhari epitomize cruelty and decadence.</p>
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