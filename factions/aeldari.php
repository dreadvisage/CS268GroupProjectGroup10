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
    <title>Aeldari</title>
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
                <h2>Aeldari</h2>
                <hr>

                <div id="image">
                    <img src="../images/aeldari-image.jpeg" alt="The Eldar">
                </div>

                <p>The Aeldari, often referred to as the Eldar, are an ancient and enigmatic faction in the Warhammer 40,000 universe.
                    They are a highly advanced, elf-like race with exceptional psychic abilities and a complex society that once rivaled
                    the might of the Imperium.</p>

                <ul class="faction-list">
                    <li>
                        Eldar Species: The Aeldari consist of several distinct groups, including the craftworld Eldar, the enigmatic Harlequins,
                        and the dark and hedonistic Drukhari. Each has its own unique culture and motives. The craftworld Eldar are known for
                        their intricate and elegant technology and their deep connection to the psychic realm.
                    </li>
                    <li>
                        Psychic Prowess: Aeldari are renowned for their psychic abilities, which allow them to manipulate reality, foresee the
                        future, and wield devastating powers on the battlefield. Their psychic mastery is a key element of their culture, but
                        it also makes them vulnerable to the dangers of the Warp.
                    </li>
                    <li>
                        Fall of the Aeldari Empire: The Aeldari's once-mighty civilization fell due to their excesses, which birthed the Chaos
                        God Slaanesh. This cataclysmic event, known as the Fall, devastated their species and shattered their empire. As a result,
                        Aeldari society became highly fragmented, with different factions pursuing their own agendas.
                    </li>
                    <li>
                        Craftworlds: Many Aeldari now reside on massive, mobile craftworlds that drift through the void of space. These craftworlds
                        are havens of culture and tradition, providing refuge from the dangers of the galaxy. Craftworld Aeldari prioritize the
                        preservation of their ancient traditions and knowledge.
                    </li>
                    <li>
                        Path of the Eldar: A central concept in Aeldari culture is the "Path of the Eldar," a way of life that dictates an individual's
                        focus on a specific aspect of their society, whether it be war, art, or another pursuit. This concept allows Aeldari to master
                        various aspects of their culture but can also lead to emotional detachment.
                    </li>
                </ul>

                <p>The Aeldari, an ancient and psychic race, are characterized by their distinct groups, including the craftworld Eldar, Harlequins,
                    and Drukhari. Their psychic prowess is central to their culture, but the cataclysmic Fall of their civilization has left them
                    fragmented and pursuing diverse agendas. Craftworld Aeldari reside on massive, drifting craftworlds, preserving traditions, while
                    the Path of the Eldar guides their lives. The Aeldari's complex society and enigmatic nature make them a unique and formidable
                    faction in the grim future of the 41st millennium.</p>
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