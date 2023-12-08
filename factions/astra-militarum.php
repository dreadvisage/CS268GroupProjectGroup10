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
    <title>Astra Militarum</title>
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
                <h2>Astra Militarum</h2>
                <hr>

                <div id="image">
                    <img src="../images/militarum-image.jpeg" alt="Imperial Guard">
                </div>

                <p>The Astra Militarum, formerly known as the Imperial Guard, is the largest and most numerous military force within the Warhammer 40,000
                    universe. Comprised of countless regiments from diverse planets, it forms the backbone of the Imperium's military might, defending
                    it against a myriad of threats.</p>

                <ul class="faction-list">
                    <li>
                        Planetary Regiments: The Astra Militarum is vast, consisting of regiments raised from countless Imperial worlds. Each regiment brings
                        its unique traditions, culture, and fighting style to the battlefield. These regiments are typically equipped with a wide range of
                        vehicles and weaponry, from simple lasguns to mighty tanks.
                    </li>
                    <li>
                        Imperial Tithes: Imperial worlds are required to provide troops to the Astra Militarum as part of their tithe to the Imperium, ensuring
                        a steady supply of soldiers. Tithes vary in quantity and quality, leading to the formation of both elite regiments and poorly equipped,
                        but determined, forces.
                    </li>
                    <li>
                        Command Structure: The Astra Militarum has a hierarchical command structure, with officers ranging from lowly commissars and company
                        commanders to high-ranking generals. The Commissariat enforces discipline, sometimes ruthlessly, among the troops, ensuring their loyalty
                        to the Emperor.
                    </li>
                    <li>
                        Overwhelming Numbers: The Astra Militarum's greatest strength lies in its sheer numbers. It can field immense armies in battles against a
                        wide range of adversaries, from alien threats to heretics and traitors. Their tactics often involve attrition warfare, relying on the
                        relentless advance of troops to wear down the enemy.
                    </li>
                    <li>
                        Guarding the Imperium: The Astra Militarum's primary role is to protect the Imperium and its worlds, defending the Emperor's domain from
                        external and internal threats. They are often at the forefront of battles, tasked with the grueling and unenviable duty of holding the line
                        against overwhelming odds.
                    </li>
                </ul>

                <p>The Astra Militarum, the Imperial Guard, is a colossal and diverse military force, made up of regiments from countless planets across the
                    Imperium. Bound by their service to the Emperor, these regiments vary in quality but bring their unique skills and traditions to the
                    battlefield. The Astra Militarum's overwhelming numbers and attrition-based tactics make it the first line of defense against the countless
                    threats that assail the Imperium in the grim and perilous future of the 41st millennium.</p>
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