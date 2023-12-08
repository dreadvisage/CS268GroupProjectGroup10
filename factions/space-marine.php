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
    <title>Space Marines</title>
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
                <h2>Space Marines</h2>
                <hr>

                <div id="image">
                    <img src="../images/space-marines-image.jpeg" alt="Space Marines">
                </div>
                <p>The Space Marines are a fictional faction in the Warhammer 40,000 universe, a tabletop wargame and science
                    fiction setting created by Games Workshop. Here is a brief summary of the Space Marine faction:</p>

                <ul class="faction-list">
                    <li>
                        Superhuman Soldiers: Space Marines are genetically enhanced and cybernetically modified superhuman soldiers.
                        They are larger, stronger, and tougher than regular humans, and they are known for their unwavering loyalty
                        to the Imperium of Man.
                    </li>
                    <li>
                        Chapters: Space Marines are organized into numerous distinct Chapters, each with its own unique
                        characteristics, colors, and heraldry. The most famous Chapter is the Ultramarines, led by the
                        Ultramarine Primarch, Roboute Guilliman.
                    </li>
                    <li>
                        The Emperor's Angels of Death: Space Marines are often referred to as the Emperor's Angels of
                        Death. They are the forefront of the Imperium's military might, battling various threats, including
                        alien races, heretics, and demonic forces.
                    </li>
                    <li>
                        Power Armor: Space Marines wear incredibly advanced powered armor known as Power Armor, which provides
                        them with superior protection, strength, and mobility. They also have access to various weapon systems,
                        including bolters, plasma guns, and chainswords.
                    </li>
                    <li>
                        Gene-Enhancements: Space Marines are created through a grueling and dangerous process involving extensive
                        genetic modification. They are implanted with the gene-seed of their Primarch, the genetic "father" of
                        their Chapter.
                    </li>
                    <li>
                        Combat Doctrine: Space Marines are highly disciplined and follow a strict combat doctrine. They often use
                        shock and awe tactics, and their tactical versatility allows them to engage in various types of warfare,
                        from close-quarters battles to long-range firefights.
                    </li>
                    <li>
                        Psychic Abilities: Some Space Marine Chapters, like the Grey Knights, possess psychic abilities, making
                        them particularly effective against demonic forces.
                    </li>
                    <li>
                        Enemies and Allies: Space Marines fight against a wide array of threats, including the alien Tyranids,
                        Orks, the heretical Chaos Space Marines, and more. They are staunch allies of the Imperium but can sometimes
                        be at odds with other factions within it.
                    </li>
                    <li>
                        Primarchs: Each Space Marine Chapter is descended from one of the 20 Primarchs, who were the Emperor's
                        genetic "sons." The Primarchs are legendary figures in the lore and played a pivotal role in the early history
                        of the Imperium.
                    </li>
                </ul>

                <p>In the grim and dystopian universe of Warhammer 40,000, the Space Marines stand as the most iconic and revered
                    warriors, serving as a symbol of hope and resilience for humanity in its desperate struggle for survival.</p>
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