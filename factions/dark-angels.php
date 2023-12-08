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
    <title>Dark Angels</title>
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
                <h2>Dark Angels</h2>
                <hr>

                <div id="image">
                    <img src="../images/dark-angels-image.jpeg" alt="Traitor Legions">
                </div>

                <p>The Dark Angels are a mysterious and secretive Space Marine Chapter in the Warhammer 40,000 universe. They are renowned for
                    their unshakable loyalty to the Emperor and their dark, hidden past, often shrouded in enigmatic traditions and secrets.</p>

                <ul class="faction-list">
                    <li>
                        Obsessive Quest for Redemption: The Dark Angels are driven by an obsessive desire to atone for their Chapter's ancient betrayal during
                        the Horus Heresy. They view this betrayal as their ultimate shame and are determined to seek redemption through acts of heroic valor.
                        This quest for redemption influences their every action and decision.
                    </li>
                    <li>
                        The Unforgiven: The Dark Angels are part of a larger organization known as the Unforgiven, which includes their successor Chapters,
                        such as the Space Marine Chapters of the Dark Angels' lineage. These successors share the burden of the Dark Angels' secret shame and
                        quest for redemption. The Unforgiven are bound by their shared history and sworn to protect their dark secrets.
                    </li>
                    <li>
                        Ravenwing and Deathwing: The Dark Angels are organized into specialized formations. The Ravenwing is the Chapter's bike and speeder-riding
                        force, excelling in rapid strikes and reconnaissance. The Deathwing is comprised of Terminator-armored veterans, serving as the Chapter's
                        most elite warriors. They are often tasked with hunting down the Chapter's hidden foes.
                    </li>
                    <li>
                        Secrets and the Fallen: The Dark Angels are consumed by a relentless hunt for the Fallen, former members of their Chapter who turned to
                        Chaos during the Horus Heresy. The capture and interrogation of these traitors is a top priority. The Dark Angels' enigmatic behavior,
                        their involvement with the Inquisition, and their secrecy about their past are all linked to their pursuit of the Fallen.
                    </li>
                    <li>
                        Loyalty and Honor: The Dark Angels maintain an unwavering loyalty to the Emperor and uphold a strong code of honor and duty. They are
                        often seen as noble and resolute warriors. Despite their dark secret, they are committed to serving the Imperium.
                    </li>
                </ul>

                <p>The Dark Angels, members of the Unforgiven, are driven by a fervent quest for redemption stemming from their Chapter's ancient betrayal.
                    Their specialized formations, the Ravenwing and Deathwing, reflect their pursuit of honor and justice. The relentless hunt for the Fallen
                    and the secrets they harbor are at the core of their enigmatic traditions and secrecy. Despite their hidden past, the Dark Angels remain
                    stalwart defenders of the Imperium in the grim and perilous future of the 41st millennium.</p>
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