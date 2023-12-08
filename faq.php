<?php
session_start();
require_once 'utils/constants.php';

require_once PATH_NAVBAR;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/article-section.css">
</head>

<body>
    <div id="background-image"><img src="images/warhammer-background.jpg" alt="Warhammer Background"></div>

    <?php
    echoNavbar(0);
    ?>
    <main>
        <div class="display">
            <div class="pad"></div>
            <div id="article">

                <h2 style="text-align: center;">Frequently Asked Questions</h2>

                <ul>
                    <h3>How do I play Warhammer 40k?</h3>
                    <ul>
                        <li>Warhammer 40k has many rules due to the large amount of factions and units, each with thier
                            own unique abilities and stats. Therefore, it is important that you first understand the
                            core rules of 40k. Click this <a href="https://www.youtube.com/watch?v=s3xJudBU2dw" target="_blank">link</a>
                            to watch a video on the basics of Warhammer 40k.
                        </li>
                    </ul>

                    <h3>How do I choose my first faction?</h3>
                    <ul>
                        <li>Once you have learned the basic rules of 40k, the next step is to choose a faction/army to play
                            as. Because purchasing models can be costly, it is important to pick a faction that you will enjoy
                            for a long time. We recommend that you browse the Factions section of Warhammer Haven to find a
                            faction that interests you design and/or lore wise. Once you think you have found a desirebale faction,
                            you could watch YouTube videos of that army in action. This will help you get an idea of how the army plays,
                            and get a better understanding of the core rules of 40k. <a href="https://www.youtube.com/@PlayOnTabletop/videos" target="_blank">Play On Tabletop</a>
                            has many games available to watch, but there are many more channels that showcase games and provide information of any faction.
                        </li>
                    </ul>

                    <h3>How do I create an army list?</h3>
                    <ul>
                        <li>After choosing a faction, you will now want to build a list of units that will make up the army you bring to the
                            table. The first thing you should do is read these
                            <a href="https://www.warhammer-community.com/2023/03/30/how-army-building-works-in-the-new-edition-of-warhammer-40000/" target="_blank">official rules</a>
                            on how to build an army, as there are some restrictions as to what you can include in your list. Be sure to be careful and read the rules to full
                            understanding, as you don't want to waste money on a unit you can't use. After, you can return to Warhammer Haven and find the index for your faction in the
                            Indexes tab. Each index includes the datasheets for that factions specific units, as well as the rules and abilities for the army. Finally, you can once again return
                            to Warhammer Haven and utilize our beginner freindly army list builder. Find your faction in the Points tab, and then begin to add units to your list. The list can be found
                            on your account page, and for each unit added, the total army point score will be added up.
                        </li>
                    </ul>

                    <h3>How many points should my first army be worth?</h3>
                    <ul>
                        <li>For new players, who may find out that they don't really enjoy the hobby, the best possible army to start with is to buy a combat patrol box for your faction. Each faction
                            has a combat patrol box that contains about 500 points worth of units. If you aren't sure that you will like playing 40k, then buying a combat patrol might be best for your
                            time and money. If you decide that you do enjoy the game and would like to continue, the next step is going to be to collect enough units to get your army up to 1000 points.
                            A 1000 point army gives you a good diversity of units, without overwhelming you by commanding an army of 10-15 different units.
                        </li>
                    </ul>

                    <h3>Where do I buy Warhammer 40k models and units?</h3>
                    <ul>
                        <li>Playing 40k and collecting models can be an expensive hobby. Combat patrol boxes have a good bang for your buck, costing about $120 dollars for half of a 1000 point army. To
                            collect the other 500 points to finish your army, it is recommended to search sites like Ebay, as you will likely find the cheapest possible price there. If you can't find a unit
                            anywhere else, or you want to buy units from the offical source, purchasing units from Games Workshop could be an option. You could also go to a local game shop to pick up units at
                            a store and support a local business, but the price will likely be the same as buying directly from Games Workshop.
                        </li>
                    </ul>

                    <h3>What now?</h3>
                    <ul>
                        <li>Once you have gotten your army, it is now time to build and paint them. Building models in 40k required a few things. You'll need some kind of clippers to get the model pieces off of
                            thier plastic sprues. You'll need some kind of knife to trim some of the sprue plastic that gets stuck to the model when cutting. And most importantly, you will need glue to connect the
                            pieces of the model together, and stick it to its base. Once built, now it's time to paint! Spray the model with spray paint designed for miniatures first. This will allow all subsequent paints
                            to stick to the model much better. Then collect the paint colors that you want your units to be. The best place to get paints is at your local game store, as they will likely have a large selection.
                            Make sure to be creative and pick colors that you like, and when painting, take your time and don't try and rush through the process. You don't want your models to be sloppily painted, as you will
                            hopefully be using them for years to come. And if you end up not liking your nicely painted models somewhere in the future, then you can sell them on Ebay for an increased price because of the time
                            and effort you put into your models.
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="pad"></div>
        </div>
    </main>
    <footer>
        <div class="pad"></div>
        <div class="footer-content">
            <hr>
            <p>Author(s): Seth Pommer, Tyler Sobojinski</p>
        </div>
        <div class="pad"></div>
    </footer>
</body>

</html>