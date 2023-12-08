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
    <title>Orks</title>
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
                <h2>Orks</h2>
                <hr>

                <div id="image">
                    <img src="../images/orks-image.jpeg" alt="Greenskins">
                </div>

                <p>The Orks, also known as Greenskins, are a brutal and warlike xenos race in the Warhammer 40,000 universe. Unbeknownst to them, their latent psychic
                    abilities shape reality, allowing their ramshackle technology to function and their Waaagh! energy to propel them on a perpetual path of conquest.
                </p>

                <ul class="faction-list">
                    <li>
                        Waaagh! Energy: Orks generate a psychic field collectively known as Waaagh! This energy is fueled by their aggressive tendencies and shared
                        belief in the effectiveness of their technology. It influences reality, making Ork technology work despite its seemingly haphazard construction.
                        Waaagh! also manifests in massive Ork armies, providing them with enhanced strength, speed, and coordination in battle.
                    </li>
                    <li>
                        Clans and Tribes: Orks are organized into various clans, each with its unique culture, colors, and combat specialties. Notable clans include the
                        Goffs, known for their brutal melee combat, and the Bad Moons, who favor flashy displays of wealth and have a love for dakka (firepower). Ork
                        society is tribal and hierarchical, with the biggest and meanest Orks often rising to leadership positions.
                    </li>
                    <li>
                        Mekboyz and Gretchin: Mekboyz are Ork engineers who possess an instinctive understanding of technology. They create bizarre and often effective war
                        machines, from ramshackle tanks to massive Stompas. Gretchin, smaller and weaker members of the Ork race, serve as laborers and support staff. Despite
                        their diminutive size, they play crucial roles in Ork society.
                    </li>
                    <li>
                        Love for Violence: Orks have an innate love for violence and combat. They relish in the thrill of battle, and the strongest Orks are often those who
                        survive the longest in the chaotic melee. Their culture revolves around the concept of "might makes right," with constant infighting and challenges for
                        dominance.
                    </li>
                    <li>
                        Endless Conquest: Orks are constantly driven by a desire for "da biggest Waaagh!" This insatiable thirst for warfare leads them to launch Waaagh! after
                        Waaagh!, spreading across the galaxy and causing widespread destruction. Orks invade planets, loot resources, and engage in epic battles against any and
                        all opponents, be they other xenos, heretics, or the Imperium of Man.
                    </li>
                </ul>

                <p>Orks, driven by an instinctual love for violence and fueled by the Waaagh! energy, are a constant and formidable threat in the Warhammer 40,000 universe.
                    Organized into diverse clans, with a unique approach to technology and warfare, Orks embody the anarchic and chaotic nature of the galaxy in the grim
                    and perilous future of the 41st millennium.</p>
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