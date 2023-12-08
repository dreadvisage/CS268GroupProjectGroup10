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
    <title>Adeptus Custodes</title>
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
                <h2>Adeptus Custodes</h2>
                <hr>

                <div id="image">
                    <img src="../images/custodes-image.webp" alt="Custodian Guard">
                </div>

                <p>The Adeptus Custodes, or Custodian Guard, are the Emperor of Mankind's elite protectors in the Warhammer 40,000 universe.
                    Their sole purpose is to safeguard the Imperial Palace on Terra and defend the Emperor.</p>

                <ul class="faction-list">
                    <li>
                        Origin and Purpose: The Adeptus Custodes were founded during the early days of the Imperium, following the Emperor's
                        unification of Terra. They were created to be the Emperor's most trusted guardians and were selected from the finest
                        warriors in the galaxy. Their primary mission is to guard the Imperial Palace on Terra and protect the Emperor at all
                        costs. They are not meant to leave Terra, except under the most dire circumstances.
                    </li>
                    <li>
                        Recruitment and Training: Custodians are chosen from young recruits who display exceptional physical and mental prowess.
                        These recruits undergo rigorous training and biological augmentation to become superhuman warriors. Their training includes
                        mastering various combat styles, marksmanship, and tactics. They are also educated in various fields to be well-rounded individuals.
                    </li>
                    <li>
                        Equipment and Armor: Custodians are equipped with the finest wargear the Imperium can produce, including the iconic Guardian Spears,
                        which are versatile weapons combining a spear and a bolter.They wear the Auramite armor, a golden and highly advanced powered armor
                        that offers exceptional protection and mobility.
                    </li>
                    <li>
                        Eternal Vigilance: The Custodians stand in eternal vigilance at the Imperial Palace, protecting the Emperor and the Golden Throne
                        from both external and internal threats. They have a deep mistrust of the Adeptus Mechanicus and rarely allow them access to the
                        Emperor's technology.
                    </li>
                    <li>
                        Interaction with Others: Custodians are rarely seen outside Terra, and their presence in the wider galaxy is a rare occurrence.
                        They maintain an aloof and enigmatic demeanor, often seen as haughty and distant by other Imperial factions. This is partly due to
                        their isolation and their immense sense of responsibility.
                    </li>
                </ul>

                <p>Adeptus Custodes, the Emperor's ultimate protectors, are an exclusive order tasked with the unceasing defense of the Emperor and the
                    heart of the Imperium on Terra. Clad in their iconic golden armor, armed with Guardian Spears, they maintain an enigmatic presence
                    and a steadfast commitment to their sacred duty in the grim future of the 41st millennium.</p>
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