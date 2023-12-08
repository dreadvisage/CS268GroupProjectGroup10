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
    <title>About</title>
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

                <h2 style="text-align: center;">About</h2>

                <h3 style="text-align: center">Army List Builder</h3>
                <p>
                    The main attraction of our website is the one of a kind army list builder that emphasizes ease of use for all our users. Ditching the
                    confusing formatting of units in order of class and function, we present all the factions and thier units in alphabetical order.
                    This allows 40k players, new and old, to easily find thier desired units without the endless scrolling and searching. To begin your
                    creating your army list, please create an account.
                </p>

                <br>
                <h3 style="text-align: center">Warhammer 40k Lore</h3>
                <p>
                    Newer 40k players often know very little about specific 40k factions. Even some experienced players have gaps of knowledge due to the
                    large amount of factions in the Warhammer universe. We understand that the lore and background of a faction is for many 40k players a
                    deciding factor on what to bring to the table. Because of this, we provide the basic information of all playable 40k factions, as
                    well as imagery that represents their respective themes and look. This feature does not require an account, and is availabe for all who
                    visit Warhammer Haven!
                </p>
                <h5> *WARNING! Some faction content may include spoilers for The Horus Heresy book series!*</h5>

                <br>
                <h3 style="text-align: center">Helpful Tips and Links</h3>
                <p>
                    Warhammer 40k can seem like a daunting hobby to get into. Learning how to play, how to build an army list, how to collect your army, etc.
                    are some of the most fundemental parts of getting into 40k. Because we strive to provide a website that is accomdating to new players,
                    we include many tips and links that help answer these questions. Check the FAQ to learn more about the game and about Warhammer Haven!

                </p>
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