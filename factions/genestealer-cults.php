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
    <title>Genestealer Cults</title>
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
                <h2>Genestealer Cults</h2>
                <hr>

                <div id="image">
                    <img src="../images/genestealers-image.jpeg" alt="Genestealer Cults">
                </div>

                <p>Genestealer Cults are insidious and subversive factions within the Warhammer 40,000 universe. Originating from the hidden
                    machinations of the alien Tyranids, these cults infiltrate human societies with the goal of preparing the way for the Tyranid Hive
                    Fleets' arrival.</p>

                <ul class="faction-list">
                    <li>
                        Genestealer Hybrid Infestation: Genestealer Cults are initiated by the implantation of Genestealer genetic material into unsuspecting
                        hosts. Over generations, the infected individuals give birth to Genestealer Hybrids, who are part human and part Tyranid. These cults
                        spread quietly, working to gain influence and power while concealing their true nature.
                    </li>
                    <li>
                        Cult Hierarchy: Genestealer Cults are organized into a hierarchical structure. At the top is the Patriarch, a powerful psychic Genestealer
                        Hybrid. Below are Maguses, Primus leaders, and the common hybrids who form the bulk of the cult. Each cult operates in secrecy, awaiting
                        the day they can rise up and aid the Tyranids in their conquest.
                    </li>
                    <li>
                        Subversion of Society: Genestealer Cults infiltrate various aspects of human society, from religious institutions to industrial complexes.
                        They work to undermine and weaken the defenses of their target planet. Cultists maintain a facade of normalcy, concealing their allegiance
                        until the moment is ripe for rebellion.
                    </li>
                    <li>
                        Cult Uprisings: When the Tyranid Hive Fleet approaches, the Genestealer Cults launch coordinated uprisings, revealing their true nature.
                        Armed with a mix of human and Tyranid weaponry, they seek to overrun their unsuspecting human neighbors. The cults aim to seize control of
                        key infrastructure and create a path for the Tyranids to invade.
                    </li>
                    <li>
                        Brood Brothers and Aberrants: In addition to Genestealer Hybrids, Genestealer Cults may include human allies known as Brood Brothers and
                        mutated Aberrants. These forces bolster the cult's strength during the uprising. Aberrants, in particular, are heavily mutated hybrids with
                        enhanced strength and resilience.
                    </li>
                </ul>

                <p>Genestealer Cults are hidden tendrils of the Tyranid Hive Mind, infiltrating human societies and awaiting the moment to strike. Through
                    insidious genetic manipulation, they create hybrids that blend in with the population until the arrival of the Tyranid Hive Fleet triggers a
                    violent uprising. This subversive and secretive nature makes Genestealer Cults a unique and formidable threat in the grim and perilous future
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