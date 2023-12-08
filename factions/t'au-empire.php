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
    <title>T'au Empire</title>
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
                <h2>T'au Empire</h2>
                <hr>

                <div id="image">
                    <img src="../images/t'au-image.webp" alt="The T'au">
                </div>

                <p>The T'au Empire is a rapidly expanding and technologically advanced faction in the Warhammer 40,000 universe. Governed by the Greater Good philosophy,
                    the T'au seek to unite the galaxy under their banner, offering progress, unity, and a new order to those who join willingly or face the might of their
                    formidable battlesuits.
                </p>

                <ul class="faction-list">
                    <li>
                        Greater Good Philosophy: The T'au Empire is driven by the Greater Good, a guiding principle that emphasizes cooperation, progress, and unity for the
                        betterment of all. The T'au believe in the assimilation of other species into their empire for mutual benefit. The Ethereals, the ruling caste, maintain
                        order and guide the T'au in their pursuit of the Greater Good.
                    </li>
                    <li>
                        T'au Castes: T'au society is structured into castes, each serving a specific role. The Fire Caste are warriors, the Earth Caste are engineers and workers,
                        the Air Caste are pilots, and the Water Caste are diplomats and administrators. Ethereals, the spiritual leaders, oversee the unity and harmony of the castes.
                    </li>
                    <li>
                        XV8 Crisis Battlesuits: The T'au are renowned for their highly advanced battlesuits, especially the XV8 Crisis Battlesuits. These versatile war machines are
                        equipped with an array of weapons and can be customized for various battlefield roles. Battlesuits are piloted by skilled T'au warriors, adding to the Empire's
                        formidable military prowess.
                    </li>
                    <li>
                        Mont'ka and Kauyon Strategies: T'au military strategy revolves around the concepts of Mont'ka (the Killing Blow) and Kauyon (the Patient Hunter). Mont'ka
                        emphasizes aggressive strikes to deliver decisive blows, while Kauyon focuses on patience, luring enemies into well-prepared killing zones. T'au Commanders
                        master these strategies to outmaneuver and defeat their adversaries.
                    </li>
                    <li>
                        Auxiliary Races and Diplomacy: The T'au Empire incorporates various auxiliary races into its fold, offering them a place within the Greater Good. Kroot, Vespid,
                        and Demiurg are among the species allied with the T'au. T'au diplomats use a combination of military might and persuasive rhetoric to expand their influence and
                        bring new worlds into the fold.
                    </li>
                </ul>

                <p>The T'au Empire, guided by the principles of the Greater Good, is a rapidly expanding faction with a focus on cooperation, progress, and unity. Armed with advanced
                    battlesuits and employing strategic flexibility, the T'au seek to unite the galaxy under their banner, offering a vision of progress and harmony in the grim and
                    perilous future of the 41st millennium.</p>
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