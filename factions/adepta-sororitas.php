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
        <title>Adepta Sororitas</title>
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
                    <h2>Adepta Sororitas</h2>
                    <hr>
                
                <div id ="image">
                <img src = "../images/sororitas-images.webp" alt = "Sisters of Battle">
                </div>
            
                    <p>The Adepta Sororitas, also known as the Sisters of Battle, is a faction in the Warhammer 40,000 universe known 
                        for their unwavering devotion to the God-Emperor of Mankind and their militant and religious zeal. Here's a 
                        summary of the Adepta Sororitas:</p>

                    <ul class="faction-list">
                        <li>
                            Warrior Nuns of the Emperor: The Adepta Sororitas is an all-female faction within the Imperium of Man. They are 
                            a religious order, combining faith and martial prowess in service of the God-Emperor.
                        </li>
                        <li>
                            Ecclesiarchy Affiliation: The Sisters of Battle are closely affiliated with the Ecclesiarchy, the state religion 
                            of the Imperium. They serve as the military arm of the Ecclesiarchy, ensuring the Emperor's divine will is enforced 
                            with zeal.
                        </li>
                        <li>
                            Fanatical Devotion: Adepta Sororitas members are characterized by their unwavering faith and devotion. They see 
                            the Emperor as a divine figure and are dedicated to rooting out heresy, mutant abominations, and alien threats.
                        </li>
                        <li>
                            Power Armor: Sisters of Battle wear specialized power armor known as "Sororitas Power Armor," which provides enhanced 
                            protection and strength. They are often armed with a variety of potent weapons, including flamers, bolt pistols, and 
                            chainswords.
                        </li>
                        <li>
                            Orders Militant: The Adepta Sororitas is organized into various Orders Militant, each with its own specific focus 
                            and mission. The most well-known order is the Order of Our Martyred Lady.
                        </li>
                        <li>
                            Witch Hunters: Some Orders Militant, such as the Ordo Hereticus, are dedicated to hunting down and purging heretics, 
                            witches, and other threats to the Imperium.
                        </li>
                        <li>
                            Iconography: The Sisters of Battle are known for their distinctive iconography, including the use of the fleur-de-lis, 
                            red and black color schemes, and symbols representing the Emperor.
                        </li>
                        <li>
                            Palatine and Canoness: The highest-ranking members of the Adepta Sororitas are the Palatine and Canoness, who lead 
                            their Orders Militant and ensure the purity of their faith and combat skills.
                        </li>
                        <li>
                            Militant Crusades: Sisters of Battle embark on militant crusades to cleanse worlds of heresy and xenos threats. They often 
                            lead armies in large-scale battles, wielding their faith as a potent weapon.
                        </li>
                        <li>
                            Interactions with Other Factions: The Adepta Sororitas often collaborate with other Imperial factions, such as the Imperial 
                            Guard and Space Marines, but they are also known for their skepticism of these allies and their readiness to enforce their 
                            own doctrine.
                        </li>
                    </ul>
                    
                    <p>The Adepta Sororitas are a unique and iconic faction in the Warhammer 40,000 universe, combining religious fervor
                        with military might to defend the faith and the Imperium against its many enemies.</p>
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