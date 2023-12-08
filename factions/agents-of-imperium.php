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
    <title>Agents of the Imperium</title>
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
                <h2>Agents of the Imperium</h2>
                <hr>

                <div id="image">
                    <img src="../images/agents-image.jpeg" alt="Agents of the the Imperium">
                </div>

                <p>The Agents of the Imperium represent a diverse and extensive faction within the Warhammer 40,000 universe. These
                    individuals and organizations are devoted to the service of the Imperium and are tasked with a range of critical
                    duties to ensure its survival in the grim and perilous galaxy.</p>

                <ul class="faction-list">
                    <li>
                        Infiltration and Espionage: Numerous secretive organizations operate under the auspices of the Imperium, including the Inquisition,
                        Adeptus Arbites, and Officio Assassinorum. They specialize in espionage, intelligence gathering, and subterfuge. Inquisitors, in
                        particular, are feared and respected for their authority to investigate heresy and alien threats within the Imperium.
                    </li>
                    <li>
                        Law and Order: The Adeptus Arbites serve as enforcers of Imperial law, maintaining order and rooting out corruption and heresy within
                        the Imperium's vast bureaucracies. Their authority is absolute, and they are known for their uncompromising pursuit of justice.
                    </li>
                    <li>
                        Silent Assassins: The Officio Assassinorum is responsible for training and deploying deadly assassins who eliminate high-value targets,
                        from heretics to xenos leaders. These assassins are highly specialized and possess unique skills and abilities.
                    </li>
                    <li>
                        Imperial Intelligence: Various Imperial organizations, such as the Imperial Guard, Imperial Navy, and even the Administratum, have
                        their intelligence agencies tasked with gathering information and countering external threats. These agents operate covertly to protect
                        the interests of the Imperium.
                    </li>
                    <li>
                        Secretive Network: The existence and operations of these agents are often shrouded in secrecy, and they operate beyond the scrutiny
                        of other Imperial institutions. Their missions are often highly classified and may involve actions that would be deemed extreme by
                        ordinary standards.
                    </li>
                </ul>

                <p>The Agents of the Imperium encompass a wide range of organizations and individuals dedicated to serving the Imperium's interests.
                    From the shadowy Inquisitors and their investigations into heresy and xenos threats, to the relentless enforcers of the Adeptus
                    Arbites and the deadly assassins of the Officio Assassinorum, these agents operate with a level of secrecy and authority that is
                    absolute within the Imperium. They play a crucial role in maintaining the Imperium's dominance and ensuring its survival in the
                    grim and perilous future of the 41st millennium.</p>
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