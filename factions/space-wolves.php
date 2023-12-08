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
    <title>Space Wolves</title>
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
                <h2>Space Wolves</h2>
                <hr>

                <div id="image">
                    <img src="../images/space-wolves-image.jpeg" alt="Space Wolves">
                </div>

                <p>The Space Wolves, also known as the Vlka Fenryka, are a fierce and independent Space Marine Chapter in the Warhammer 40,000 universe. Hailing
                    from the ice-covered Death World of Fenris, they are known for their savage combat prowess, wolf-themed iconography, and the bonds they share
                    with mysterious creatures known as the Fenrisian Wolves and the mighty Thunderwolf Cavalry.
                </p>

                <ul class="faction-list">
                    <li>
                        Fenrisian Culture: The Space Wolves draw heavily from the Norse mythology-inspired culture of Fenris, their homeworld. They embrace a warrior ethos,
                        and their sagas and legends play a significant role in their traditions. Each Space Wolf is part of a Great Company, and their leaders are known as
                        Wolf Lords.
                    </li>
                    <li>
                        Canis Helix and Wulfen Curse: Aspirants undergo the "Canis Helix" gene-seed implantation, a unique genetic modification that enhances their physical
                        abilities and endows them with wolf-like characteristics. However, exposure to the Canis Helix carries a risk: some Space Wolves succumb to the Wulfen
                        Curse, transforming into powerful but bestial entities known as Wulfen.
                    </li>
                    <li>
                        Fenrisian Wolves and Thunderwolf Cavalry: The Space Wolves share a unique bond with Fenrisian Wolves, massive wolves native to their homeworld. These
                        creatures accompany them in battle and are revered for their instincts and ferocity. Thunderwolf Cavalry, mounted on the formidable Fenrisian Thunderwolves,
                        exemplify the Space Wolves' symbiotic relationship with the creatures of Fenris. These cavalry units provide additional speed and firepower on the battlefield.
                    </li>
                    <li>
                        The Rout and the Allfather: The Space Wolves refer to themselves as the "Rout," embracing their wild and untamed nature. They believe in the Allfather, a deity
                        representing the combined might of the Emperor and the Primarch Leman Russ. The Space Wolves maintain a unique perspective on the Imperial Creed, incorporating
                        their own beliefs into their rituals and ceremonies.
                    </li>
                    <li>
                        Ragnar Blackmane and the Primaris Reinforcements: Ragnar Blackmane, a legendary Space Wolf, has risen to prominence within the Chapter. He is known for his combat
                        prowess and leadership during the events of the Great Rift. The Space Wolves have also integrated Primaris Space Marines into their ranks, reinforcing their
                        strength and adapting to the changing challenges of the galaxy.
                    </li>
                </ul>

                <p>The Space Wolves, hailing from the harsh world of Fenris, are fierce and independent warriors with a distinct culture. Bonded with Fenrisian Wolves and mounted on
                    Thunderwolf Cavalry, they embody the untamed spirit of their homeworld. Despite their unique traditions and the risk of the Wulfen Curse, the Space Wolves fiercely
                    defend the Imperium, driven by their loyalty to the Allfather in the grim and perilous future of the 41st millennium.</p>
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