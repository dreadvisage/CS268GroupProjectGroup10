<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_NAVBAR;
require_once PATH_IS_LOGGED_IN;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Marines</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/points.css">
    <script src="../js/create-unit-helper.js"></script>
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

                <ul id="points-list">
                    <script>
                        const Builder = UnitBuilder;
                        Builder.setParentId("points-list");
                        Builder.setFaction("Space Marines");

                        Builder.addUnit("Adrax Agatone", 1, 14, 90);

                        Builder.new("Aggressor Squad")
                            .model(3, 12, 100)
                            .model(6, 12, 200)
                            .add();

                        Builder.addUnit("Ancient in Terminator Armour", 1, 14, 90);

                        Builder.addUnit("Apothecary Biologis", 1, 14, 55);

                        Builder.new("Assault Intercessor Squad")
                            .model(5, 14, 80)
                            .model(10, 10, 160)
                            .add();

                        Builder.new("Assault Squad")
                            .model(5, 14, 95)
                            .model(10, 10, 190)
                            .add();

                        Builder.new("Assault Squad with Jump Packs")
                            .model(5, 12, 115)
                            .model(10, 10, 230)
                            .add();

                        Builder.addUnit("Astartes Servitors", 4, 14, 55);

                        Builder.new("Attack Bike Squad")
                            .model(1, 14, 55)
                            .model(2, 12, 110)
                            .model(3, 12, 165)
                            .add();

                        Builder.addUnit("Ballistus Dreadnought", 1, 12, 150);

                        Builder.new("Bike Squad")
                            .model(3, 14, 80)
                            .model(6, 12, 160)
                            .modelCustom("Attack Bike", 10, +55)
                            .add();

                        Builder.addUnit("Bladeguard Ancient", 1, 14, 50);

                        Builder.new("Bladeguard Veteran Squad")
                            .model(3, 14, 90)
                            .model(6, 12, 180)
                            .add();

                        Builder.addUnit("Brutalis Dreadnought", 1, 12, 175);

                        Builder.addUnit("Captain", 1, 14, 80);

                        Builder.addUnit("Captain in Gravis Armour", 1, 14, 80);

                        Builder.addUnit("Captain in Phobos Armour", 1, 14, 80);

                        Builder.addUnit("Captain in Terminator Armour", 1, 14, 95);

                        Builder.addUnit("Captain on Bike", 1, 14, 95);

                        Builder.addUnit("Captain Sicarius", 1, 14, 85);

                        Builder.addUnit("Captain with Jump Pack", 1, 12, 100);

                        Builder.new("Centurion Assault Squad")
                            .model(3, 12, 150)
                            .model(6, 12, 300)
                            .add();

                        Builder.new("Centurion Devastator Squad")
                            .model(3, 12, 175)
                            .model(6, 12, 350)
                            .add();

                        Builder.addUnit("Chaplain", 1, 14, 70);

                        Builder.addUnit("Chaplain Cassius", 1, 14, 80);

                        Builder.addUnit("Chaplain in Terminator Armour", 1, 14, 90);

                        Builder.addUnit("Chaplain on Bike", 1, 14, 80);

                        Builder.addUnit("Chaplain with Jump Pack", 1, 14, 85);

                        Builder.addUnit("Chief Librarian Tigurius", 1, 14, 80);

                        Builder.addUnit("Command Squad", 5, 12, 165);

                        Builder.addUnit("Contemptor Dreadnought", 1, 12, 170);

                        Builder.addUnit("Darnath Lysander", 1, 12, 105);

                        Builder.addUnit("Desolation Squad", 5, 12, 200);

                        Builder.new("Devastator Squad")
                            .model(5, 12, 120)
                            .model(10, 10, 200)
                            .add();

                        Builder.addUnit("Dreadnought", 1, 12, 135);

                        Builder.addUnit("Drop Pod", 1, 14, 70);

                        Builder.addUnit("Eliminator Squad", 3, 14, 75);

                        Builder.new("Eradicator Squad")
                            .model(3, 14, 95)
                            .model(6, 12, 190)
                            .add();

                        Builder.new("Firestrike Servo-turrets")
                            .model(1, 14, 80)
                            .model(2, 12, 160)
                            .add();

                        Builder.addUnit("Gladiator Lancer", 1, 12, 160);

                        Builder.addUnit("Gladiaror Reaper", 1, 12, 150);

                        Builder.addUnit("Gladiaror Valiant", 1, 12, 150);

                        Builder.addUnit("Hammerfall Bunker", 1, 12, 210);

                        Builder.new("Heavy Intercessor Squad")
                            .model(5, 12, 125)
                            .model(10, 10, 250)
                            .add();

                        Builder.addUnit("Hunter", 1, 12, 100);

                        Builder.addUnit("Impulsor", 1, 14, 85);

                        Builder.new("Inceptor Squad")
                            .model(3, 12, 115)
                            .model(6, 12, 230)
                            .add();

                        Builder.new("Incursor Squad")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.new("Infernus Squad")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.new("Infiltrator Squad")
                            .model(5, 12, 100)
                            .model(10, 10, 200)
                            .add();

                        Builder.new("Intercessor Squad")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.addUnit("Invader ATV", 1, 14, 70);

                        Builder.addUnit("Invictor Tactical Warsuit", 1, 12, 150);

                        Builder.addUnit("Iron Father Feirros", 1, 14, 95);

                        Builder.addUnit("Ironclad Dreadnought", 1, 12, 150);

                        Builder.addUnit("Judiciar", 1, 14, 75);

                        Builder.addUnit("Kayvaan Shrike", 1, 12, 105);

                        Builder.addUnit("Kor'sarro Khan", 1, 14, 75);

                        Builder.addUnit("Land Raider", 1, 12, 240);

                        Builder.addUnit("Land Raider Crusader", 1, 12, 230);

                        Builder.addUnit("Land Raider Redeemer", 1, 12, 260);

                        Builder.addUnit("Land Speeder", 1, 14, 80);

                        Builder.addUnit("Land Speeder Storm", 1, 14, 70);

                        Builder.addUnit("Land Speeder Tornado", 1, 14, 95);

                        Builder.addUnit("Land Speeder Typhoon", 1, 12, 100);

                        Builder.addUnit("Librarian", 1, 14, 75);

                        Builder.addUnit("Librarian in Phobos Armour", 1, 14, 75);

                        Builder.addUnit("Librarian in Terminator Armour", 1, 14, 90);

                        Builder.addUnit("Librarian in Jump Pack", 1, 14, 75);

                        Builder.addUnit("Lieutenant", 1, 14, 80);

                        Builder.addUnit("Lieutenant in Phobos Armour", 1, 14, 60);

                        Builder.addUnit("Lieutenant in Reiver Armour", 1, 14, 60);

                        Builder.addUnit("Lieutenant with Combi-weapon", 1, 14, 70);

                        Builder.addUnit("Marneus Calgar", 3, 12, 185);

                        Builder.new("Outrider Squad")
                            .model(3, 12, 105)
                            .model(6, 12, 210)
                            .modelCustom("Invader ATV", 10, +70)
                            .add();

                        Builder.addUnit("Pedro Kantor", 1, 14, 95);

                        Builder.addUnit("Predator Annihilator", 1, 12, 130);

                        Builder.addUnit("Predator Destructor", 1, 12, 130);

                        Builder.addUnit("Primaris Ancient", 1, 14, 55);

                        Builder.addUnit("Primaris Apothecary", 1, 14, 55);

                        Builder.addUnit("Primaris Captain", 1, 14, 80);

                        Builder.addUnit("Primaris Chaplain", 1, 14, 65);

                        Builder.addUnit("Primaris Company Champion", 1, 14, 55);

                        Builder.addUnit("Primaris Librarian", 1, 14, 70);

                        Builder.addUnit("Primaris Lieutenant", 1, 14, 75);

                        Builder.addUnit("Primaris Techmarine", 1, 14, 65);

                        Builder.addUnit("Razorback", 1, 12, 100);

                        Builder.addUnit("Redemptor Dreadnought", 1, 12, 210);

                        Builder.new("Reiver Squad")
                            .model(5, 14, 85)
                            .model(10, 10, 170)
                            .add();

                        Builder.new("Relic Terminator Squad")
                            .model(5, 12, 200)
                            .model(10, 10, 400)
                            .add();

                        Builder.addUnit("Repulsor", 1, 12, 195);

                        Builder.addUnit("Repulsor Executioner", 1, 12, 230);

                        Builder.addUnit("Rhino", 1, 14, 75);

                        Builder.addUnit("Roboute Guilliman", 1, 12, 380);

                        Builder.new("Scout Bike Squad")
                            .model(3, 14, 75)
                            .model(6, 12, 150)
                            .add();

                        insertRawHtml("points-list", "<br><h2>Forge World Units<\/h2>");

                        Builder.new("Scout Sniper Squad")
                            .model(3, 14, 75)
                            .model(6, 12, 150)
                            .add();

                        Builder.new("Scout Squad")
                            .model(3, 14, 65)
                            .model(6, 12, 130)
                            .add();

                        Builder.addUnit("Sergeant Chronus", 1, 14, 75);

                        Builder.addUnit("Sergeant Telion", 1, 14, 70);

                        Builder.addUnit("Stalker", 1, 12, 140);

                        Builder.new("Sternguard Vetern Squad")
                            .model(5, 12, 110)
                            .model(10, 10, 220)
                            .add();

                        Builder.addUnit("Storm Speeder Hailstrike", 1, 12, 140);

                        Builder.addUnit("Storm Speeder Hammerstrike", 1, 12, 160);

                        Builder.addUnit("Storm Speeder Thunderstrike", 1, 12, 170);

                        Builder.addUnit("Stormhawk Interceptor", 1, 12, 165);

                        Builder.addUnit("Stormraven Gunship", 1, 12, 255);

                        Builder.addUnit("Stormtalon Gunship", 1, 12, 175);

                        Builder.addUnit("Suppressor Squad", 3, 14, 85);

                        Builder.addUnit("Tactical Squad", 10, 10, 160);

                        Builder.addUnit("Techmarine", 1, 14, 70);

                        Builder.new("Terminator Assault Squad")
                            .model(5, 12, 205)
                            .model(10, 10, 410)
                            .add();

                        Builder.new("Terminator Squad")
                            .model(5, 12, 190)
                            .model(10, 10, 380)
                            .add();

                        Builder.addUnit("Thunderfire Cannon", 2, 14, 90);

                        Builder.addUnit("Tor Garadon", 1, 14, 90);

                        Builder.addUnit("Tyrannic War Veterans", 5, 14, 85);

                        Builder.addUnit("Uriel Ventris", 1, 14, 75);

                        Builder.new("Vanguard Veteran Squad")
                            .model(5, 12, 120)
                            .model(10, 10, 240)
                            .add();

                        Builder.new("Vanguard Vetern Squad with Jump Packs")
                            .model(5, 12, 105)
                            .model(10, 10, 210)
                            .add();

                        Builder.addUnit("Vinicator", 1, 12, 190);

                        Builder.addUnit("Vulkan He'stan", 1, 14, 80);

                        Builder.addUnit("Whirlwind", 1, 12, 150);



                        Builder.addUnit("Astraeus", 1, 12, 525);

                        Builder.addUnit("Thunderhawk Gunship", 1, 12, 840);
                    </script>
                </ul>

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