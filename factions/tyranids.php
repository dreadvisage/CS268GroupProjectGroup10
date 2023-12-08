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
    <title>Tyranids</title>
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
                <h2>Tyranids</h2>
                <hr>

                <div id="image">
                    <img src="../images/tyranids-image.webp" alt="Tyranids">
                </div>

                <p>The Tyranids are a nightmarish and all-consuming extragalactic alien race in the Warhammer 40,000 universe. Arriving in massive Hive Fleets, they are a relentless
                    force of biological entities driven by a collective consciousness, consuming entire worlds to fuel their insatiable hunger.
                </p>

                <ul class="faction-list">
                    <li>
                        Hive Mind and Synaptic Control: The Tyranids operate under the control of the Hive Mind, a psychic gestalt consciousness that guides the actions of every individual
                        within the swarm. This centralized control allows for efficient coordination and adaptation on a galactic scale. Synapse Creatures serve as conduits for the Hive Mind,
                        providing a psychic link that maintains control over lesser Tyranid organisms.
                    </li>
                    <li>
                        Biological Adaptation: Tyranids are highly adaptable, capable of evolving rapidly in response to new threats. This adaptability is facilitated by the absorption of
                        genetic material from conquered species, leading to the creation of new bioforms tailored to specific challenges. Biovores, Carnifexes, and Hive Tyrants are examples
                        of the diverse and specialized Tyranid organisms.
                    </li>
                    <li>
                        Hive Fleets and Consumption Worlds: The Tyranids arrive in massive Hive Fleets, each consisting of countless bioforms and bio-ships. These fleets travel through the
                        void of space, drawn by psychic beacons or the scent of biomass-rich worlds. Upon reaching a target planet, Tyranids engage in a rapid and devastating consumption
                        process, stripping the world of all organic matter for the benefit of the Hive Fleet.
                    </li>
                    <li>
                        Genestealer Cults: Genestealer Cults are insidious factions that infiltrate unsuspecting planets, working in secret to prepare the way for a Tyranid invasion. Genestealer
                        hybrids are created through the genetic manipulation of the Genestealer organism, establishing a psychic link with the Hive Mind. The emergence of a Genestealer Cult often
                        precedes a full-scale Tyranid invasion.
                    </li>
                    <li>
                        Shadow in the Warp: The psychic presence of the Tyranids is so overwhelming that it creates a phenomena known as the "Shadow in the Warp." This interference disrupts psychic
                        abilities and communication, causing fear and panic among psykers and weakening the defenses of targeted worlds.
                    </li>
                </ul>

                <p>The Tyranids are a relentless and voracious alien race, guided by the Hive Mind in a ceaseless quest for biological consumption. With Hive Fleets that span the cosmos, they
                    adapt rapidly to challenges, using specialized bioforms to overwhelm their prey. The Tyranids' arrival is a harbinger of devastation, as they strip entire worlds of life in
                    their unending pursuit of biomass in the grim and perilous future of the 41st millennium.</p>
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