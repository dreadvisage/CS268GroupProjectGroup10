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
    <title>Necrons</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/factions.css">
</head>

<body>

    <div id="background-image"><img src="../images/warhammer-background.jpg" alt="Warhammer Background"></div>

    <?php echoNavbar(1); ?>

    <main>
        <div class="display">
            <div class="pad"></div>
            <div id="article">
                <h2>Necrons</h2>
                <hr>

                <div id="image">
                    <img src="../images/necrons-image.jpeg" alt="Necrons">
                </div>

                <p>The Necrons are a faction in the Warhammer 40,000 universe, known for their ancient and advanced technology.
                    Here is a summary of the Necron faction:</p>

                <ul class="faction-list">
                    <li>
                        Ancient and Enigmatic Race: The Necrons are an ancient alien race that predates even the rise of humanity
                        in the Warhammer 40,000 universe. They were once a humanoid species but transferred their consciousness
                        into robotic bodies to achieve immortality.
                    </li>
                    <li>
                        Undying and Immortal: Necrons are effectively immortal as their minds are stored in metallic bodies known
                        as "Necron Warriors." These bodies can regenerate and repair themselves, making them incredibly resilient
                        in battle.
                    </li>
                    <li>
                        Dynasties: The Necron race is divided into various dynasties, each ruled by a powerful Necron Overlord.
                        These dynasties have their own unique characteristics, goals, and leadership structures.
                    </li>
                    <li>
                        Advanced Technology: Necrons possess highly advanced technology, including powerful energy weapons,
                        teleportation devices, and the ability to reanimate fallen warriors during battle. Their weaponry and
                        equipment are often much more advanced than that of other factions in the Warhammer 40,000 universe.
                    </li>
                    <li>
                        The C'tan: The Necrons serve the C'tan, ancient star gods that they once rebelled against. The C'tan
                        were imprisoned by the Necrons, and the Necrons now use the C'tan's power to fuel their technology and
                        abilities.
                    </li>
                    <li>
                        Tomb Worlds: Necrons inhabit vast tomb worlds, which are usually barren planets with labyrinthine underground
                        cities where they sleep for millennia until they awaken to wage war or achieve their goals.
                    </li>
                    <li>
                        Eternal War: The Necrons are driven by a desire to regain their lost empire and are relentless in their
                        conquest of the galaxy. They often clash with other factions in their quest for dominance.
                    </li>
                    <li>
                        Lack of Emotion: Necrons lack the emotional and moral nuances of other races in the Warhammer 40,000 universe.
                        They are often depicted as cold, calculating, and single-minded in their goals.
                    </li>
                    <li>
                        Enemy of the Imperium: The Necrons are a significant threat to the Imperium of Man, as they are a powerful and
                        technologically superior adversary that seeks to expand its influence.
                    </li>
                    <li>
                        Destruction of All Life: Some Necron dynasties have a goal of eradicating all life from the galaxy, while others
                        may have more nuanced objectives, such as the recovery of their former glory or the extermination of their C'tan
                        masters.
                    </li>
                </ul>

                <p>The Necrons are a mysterious and formidable faction in the Warhammer 40,000 universe, with their advanced technology
                    and relentless pursuit of their goals making them a dangerous force in the grim darkness of the far future.</p>
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