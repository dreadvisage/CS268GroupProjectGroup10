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
    <title>Imperial Knights</title>
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
                <h2>Imperial Knights</h2>
                <hr>

                <div id="image">
                    <img src="../images/imperial-knights-image.png" alt="Imperial Knights">
                </div>

                <p>The Imperial Knights, towering war machines of the Adeptus Mechanicus, are a stalwart force within the Warhammer 40,000 universe. These
                    colossal war engines are piloted by noble scions of the Knight Houses, sworn to defend the Imperium with honor and unmatched firepower.
                </p>

                <ul class="faction-list">
                    <li>
                        Noble Houses of the Imperium: Imperial Knights are associated with the noble houses, aristocratic families who have piloted these colossal
                        war machines for generations. Each house has its traditions, heraldry, and a strong sense of honor. Pilots, known as Knight Scions, undergo
                        extensive training to pilot these war engines, forging a deep bond with their machines.
                    </li>
                    <li>
                        Knight Classes: Imperial Knights come in different classes, each serving a unique battlefield role. The towering and heavily armed Questoris
                        class excels in ranged and close-quarters combat, while the more agile Armiger class provides reconnaissance and flanking support. Knights
                        are armed with devastating weapons, from rapid-fire battle cannons to fearsome melee weapons like chainswords and power fists.
                    </li>
                    <li>
                        Sacred Rites and Ceremonies: Imperial Knights adhere to sacred rites and ceremonies, emphasizing their chivalric code and fealty to the Imperium.
                        Knights often engage in formal duels to settle disputes and prove their prowess in combat. The sacred traditions of the Knight Houses instill a
                        sense of honor and duty in their pilots.
                    </li>
                    <li>
                        Sacristans and Mechanicum Ties: Sacristans, loyal servants of the Adeptus Mechanicus, maintain and repair the intricate systems of Imperial Knights.
                        These technicians forge a close relationship with the Knight pilots and play a crucial role in ensuring the war machines' functionality. The alliance
                        between the Knight Houses and the Adeptus Mechanicus strengthens the Imperium's technological might.
                    </li>
                    <li>
                        Titanic Knight Gallants and Cerastus Lancers: The Imperial Knights include specialized patterns such as the towering Knight Gallants, designed for
                        close-quarters combat with colossal melee weapons, and the swift Cerastus Lancers, which excel in speed and agility. These specialized patterns offer
                        diverse battlefield capabilities, allowing the Knight Houses to adapt to various threats.
                    </li>
                </ul>

                <p>Imperial Knights, associated with noble houses and sworn to uphold honor and duty, are colossal war machines vital to the Imperium's defense. Piloted
                    by Knight Scions, these war engines adhere to sacred traditions and ceremonies, embodying a chivalric code. Maintained by Sacristans and tied to the
                    Adeptus Mechanicus, the Imperial Knights stand as a symbol of the Imperium's might in the grim and perilous future of the 41st millennium.</p>
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