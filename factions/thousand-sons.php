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
    <title>Thousand Sons</title>
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
                <h2>Thousand Sons</h2>
                <hr>

                <div id="image">
                    <img src="../images/thousand-sons-image.jpeg" alt="Thousand Sons">
                </div>

                <p>The Thousand Sons are a Chaos Space Marine Legion with a tragic and sorcerous history in the Warhammer 40,000 universe. Once loyal Space Marines,
                    their fall to Chaos was marked by a pursuit of forbidden knowledge and psychic power, leading to a devastating curse that transformed them into
                    psychic entities bound to intricate suits of power armor known as Rubric Marines.
                </p>

                <ul class="faction-list">
                    <li>
                        Ahriman's Ambition: Ahriman, Chief Librarian of the Thousand Sons, sought knowledge to prevent his Legion from falling to mutation. However, his powerful sorcery
                        inadvertently unleashed the disastrous Rubric of Ahriman, which turned most of his Legion into dust within their power armor. Ahriman, now a sorcerer of unparalleled
                        power, leads the remnants of his Legion in search of forbidden lore to undo the Rubric and restore his brothers.
                    </li>
                    <li>
                        Rubric Marines: The Rubric of Ahriman transformed many Thousand Sons Space Marines into Rubric Marines, psychic entities trapped within their power armor. These
                        warriors lost their physical forms but retained potent psychic abilities. Rubric Marines are immortal but lack the versatility of living beings, forever sealed
                        within their enchanted armor.
                    </li>
                    <li>
                        Thirst for Forbidden Knowledge: The Thousand Sons are marked by their relentless thirst for knowledge, particularly in the arcane arts of sorcery and psychic power.
                        Their pursuit of forbidden secrets often leads them into dangerous alliances with daemonic entities and Chaos forces. Tzeentch, the Chaos God of Change, is the
                        primary patron of the Thousand Sons, influencing their fate and granting them psychic abilities.
                    </li>
                    <li>
                        Sorcerous Warfare: The Thousand Sons excel in sorcerous warfare, unleashing devastating psychic powers on the battlefield. Their psychic mastery allows them to
                        manipulate reality, summon daemonic allies, and unleash destructive spells against their enemies. Sorcerers within the Thousand Sons are highly valued and play a
                        crucial role in the Legion's strategies.
                    </li>
                    <li>
                        Crystal Labyrinth of Prospero: The homeworld of the Thousand Sons, Prospero, was devastated during the Horus Heresy. The survivors, including Ahriman and his sorcerous
                        cabal, reside within the Crystal Labyrinth - a pocket dimension within the Warp. The Crystal Labyrinth serves as the Thousand Sons' base of operations, shielded from
                        the predations of both the Imperium and the forces of Chaos.
                    </li>
                </ul>

                <p>The Thousand Sons, once noble Space Marines, fell from grace due to their pursuit of forbidden knowledge. Marked by the Rubric of Ahriman, they are now sorcerous entities
                    bound within their power armor. Led by Ahriman's quest for redemption, the Thousand Sons navigate the treacherous paths of the Warp, wielding psychic powers and seeking
                    to unravel the mysteries that bind them in the grim and perilous future of the 41st millennium.</p>
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