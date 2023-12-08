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
    <title>Blood Angels</title>
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
                <h2>Blood Angels</h2>
                <hr>

                <div id="image">
                    <img src="../images/angels-image.webp" alt="Blood Angels">
                </div>

                <p>The Blood Angels are a noble and tragic Space Marine Chapter in the Warhammer 40,000 universe. Renowned for their warrior's grace and
                    ferocity in battle, they carry the dual burden of a dark curse that threatens their very existence.</p>

                <ul class="faction-list">
                    <li>
                        Blood Angels Gene-Seed: The Blood Angels, like all Space Marine Chapters, inherit their gene-seed from their Primarch, Sanguinius.
                        This gene-seed endows them with remarkable abilities, including heightened strength and a potent black rage. However, the Blood Angels
                        also suffer from the Red Thirst, an insatiable craving for blood that can lead to uncontrolled berserk rages.
                    </li>
                    <li>
                        Noble Heritage: The Blood Angels have a deeply noble and artistic culture, which sets them apart from many other Space Marine Chapters.
                        They appreciate art, literature, and music, and their combat is often infused with a sense of honor and chivalry. Their noble bearing and
                        penchant for flamboyant decoration are reflected in their regal aesthetics.
                    </li>
                    <li>
                        Dante and Chapter Leadership: Chapter Master Dante is one of the most iconic figures in the Blood Angels' history. He has led the Chapter
                        for many centuries and is a symbol of their resilience and valor. The Chapter's leadership values unity and brotherhood, recognizing the
                        importance of taming the Red Thirst through their bond with one another.
                    </li>
                    <li>
                        Suffering and Redemption: The Blood Angels' struggle against the Red Thirst and the Black Rage is a central theme in their lore. They
                        constantly battle to retain their humanity while waging war against the enemies of the Imperium. Despite their suffering, they maintain a
                        fierce loyalty to the Emperor and remain one of the most noble and respected Chapters within the Adeptus Astartes.
                    </li>
                    <li>
                        Close Combat Specialists: The Blood Angels excel in close combat, favoring jump packs and melee weapons like chainswords and power weapons.
                        They are known for their lightning-fast assaults and are particularly skilled at shock tactics.
                    </li>
                </ul>

                <p>The Blood Angels, bearing the bloodline of their noble Primarch Sanguinius, are marked by their dual nature: one of grace and honor, and the
                    other of dark struggle against the Red Thirst and the Black Rage. Despite their inner demons, they are staunch defenders of the Imperium and
                    maintain their legacy of nobility and close combat expertise, making them a significant and respected presence in the grim and perilous future
                    of the 41st millennium.</p>
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