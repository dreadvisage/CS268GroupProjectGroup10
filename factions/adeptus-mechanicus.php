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
    <title>Adeptus Mechanicus</title>
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
                <h2>Adeptus Mechanicus</h2>
                <hr>

                <div id="image">
                    <img src="../images/mechanicus-images.webp" alt="Tech-Priests">
                </div>

                <p>The Adeptus Mechanicus, often referred to as the Tech-Priests, is a technologically-obsessed faction in the Warhammer
                    40,000 universe. They are the keepers of knowledge and technology within the Imperium and are driven by a religious
                    devotion to the Machine God, pursuing technological advancement at any cost.</p>

                <ul class="faction-list">
                    <li>
                        Origin and Beliefs: The Adeptus Mechanicus originated from the remnants of the Dark Age of Technology and are fervent
                        believers in the Omnissiah, whom they equate to the Machine God. They consider technology to be sacred and believe that
                        knowledge is power. Their faith is centered around the understanding and veneration of machines.
                    </li>
                    <li>
                        Bionics and Augmentations: Tech-Priests undergo extensive bionic enhancements, replacing parts of their bodies with machinery.
                        This process reflects their belief in the union of man and machine. The higher their rank, the more extensive and elaborate their
                        augmentations become, making them almost unrecognizable as human.
                    </li>
                    <li>
                        Forge Worlds and Production: The Adeptus Mechanicus maintain Forge Worlds throughout the galaxy, colossal factories dedicated to the
                        production of advanced technology and war machines. These worlds are the heart of technological production in the Imperium, and the
                        Mechanicus jealously guards their secrets.
                    </li>
                    <li>
                        Exploration and Research: They send Tech-Priests on exploratory missions to recover lost technology, known as "Archaeotech," often
                        unearthing ancient and powerful relics of the past. Research and development are central to their creed, but they are extremely
                        cautious about sharing their discoveries with the rest of the Imperium.
                    </li>
                    <li>
                        Alliance with the Imperium: While they maintain an independent hierarchy, the Adeptus Mechanicus is closely allied with the Imperium.
                        They provide the bulk of the Imperium's technological advancements, including building and maintaining the war machines and starships.
                        The Imperium, in turn, tolerates their religious practices, as their technological contributions are essential to its survival.
                    </li>
                </ul>

                <p>The Adeptus Mechanicus, or Tech-Priests, are the guardians of technology and knowledge in the Warhammer 40,000 universe. They revere
                    the Machine God, the Omnissiah, and believe in the sanctity of machines. Their lives are marked by extensive bionic augmentations,
                    and they oversee the vast Forge Worlds that produce advanced technology for the Imperium. Exploration, research, and the recovery of
                    lost technology are central to their mission, but they guard their discoveries with religious zeal. Despite their distinctive culture,
                    they maintain a crucial alliance with the Imperium, providing the technological backbone that sustains the grim and dark future of the
                    41st millennium.</p>
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