<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Setup</title>
</head>

<body>
    <?php

    mysqli_report(MYSQLI_REPORT_OFF);
    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_NAME', "cs268group10database");

    /* Attempt to connect to MySQL database */
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);

    // Check connection
    if (!$mysqli) {
        die("Failed to connect to server. " . $mysqli->connect_error);
    }

    // DANGER. UNPROMPTED DROPPING OF EXISTING DATABASE.
    // If the database already exists, drop it. Otherwise continue as normal.
    $query = "DROP DATABASE IF EXISTS " . DB_NAME;
    if ($mysqli->query($query)) {
        echo "Database dropped successfully" . "<br>";
    } else {
        die("Error dropping database: " . $mysqli->error . "<br>");
    }


    $query = "CREATE DATABASE " . DB_NAME;
    if ($mysqli->query($query)) {
        echo "Database created successfully" . "<br>";
    } else {
        die("Error creating database: " . $mysqli->error . "<br>");
    }

    $query = "USE " . DB_NAME;
    if ($mysqli->query($query)) {
        echo "Database changed successfully"."<br>";
    } else {
        die("Error changing database: " . $mysqli->error . "<br>");
    }

    $query = "CREATE TABLE `search_suggestions` (
        `suggestionID` int(11) NOT NULL,
        `suggestionMatchOn` varchar(255) NOT NULL,
        `suggestionDisplay` varchar(255) NOT NULL,
        `suggestionLink` varchar(255) NOT NULL,
        `sectionTitle` varchar(255) DEFAULT NULL,
        `requireLogin` tinyint(1) DEFAULT 0
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
    if ($mysqli->query($query)) {
        echo "Successfully created `search_suggestions` table" . "<br>";
    } else {
        die("Error creating `search_suggestions` table: " . $mysqli->error . "<br>");
    }

    $query = "INSERT INTO `search_suggestions` (`suggestionID`, `suggestionMatchOn`, `suggestionDisplay`, `suggestionLink`, `sectionTitle`, `requireLogin`) VALUES
    (1, 'Home', 'Home', 'index.php', NULL, 0),
    (2, 'Factions', 'Factions', 'factions.php', NULL, 0),
    (3, 'About', 'About', 'about.php', NULL, 0),
    (4, 'Points', 'Points', 'points.php', NULL, 1),
    (5, 'FAQ', 'FAQ', 'faq.php', NULL, 0),
    (6, 'Frequently Asked Questions', 'FAQ', 'faq.php', NULL, 0),
    (7, 'Adepta Sororitas', 'Adepta Sororitas', 'factions/adepta-sororitas.php', 'Factions', 0),
    (8, 'Adeptus Custodes', 'Adeptus Custodes', 'factions/adeptus-custodes.php', 'Factions', 0),
    (9, 'Adeptus Mechanicus', 'Adeptus Mechanicus', 'factions/adeptus-mechanicus.php', 'Factions', 0),
    (10, 'Adeptus Titanicus', 'Adeptus Titanicus', 'factions/adeptus-titanicus.php', 'Factions', 0),
    (11, 'Aeldari', 'Aeldari', 'factions/aeldari.php', 'Factions', 0),
    (12, 'Agents of the Imperium', 'Agents of the Imperium', 'factions/agents-of-imperium.php', 'Factions', 0),
    (13, 'Astra Militarum', 'Astra Militarum', 'factions/astra-militarum.php', 'Factions', 0),
    (14, 'Black Templars', 'Black Templars', 'factions/black-templars.php', 'Factions', 0),
    (15, 'Blood Angels', 'Blood Angels', 'factions/blood-angels.php', 'Factions', 0),
    (16, 'Chaos Daemons', 'Chaos Daemons', 'factions/chaos-daemons.php', 'Factions', 0),
    (17, 'Chaos Knights', 'Chaos Knights', 'factions/chaos-knights.php', 'Factions', 0),
    (18, 'Chaos Space Marines', 'Chaos Space Marines', 'factions/chaos-marines.php', 'Factions', 0),
    (19, 'Dark Angels', 'Dark Angels', 'factions/dark-angels.php', 'Factions', 0),
    (20, 'Death Guard', 'Death Guard', 'factions/death-guard.php', 'Factions', 0),
    (21, 'Deathwatch', 'Deathwatch', 'factions/deathwatch.php', 'Factions', 0),
    (22, 'Drukhari', 'Drukhari', 'factions/drukhari.php', 'Factions', 0),
    (23, 'Genestealer Cults', 'Genestealer Cults', 'factions/genestealer-cults.php', 'Factions', 0),
    (24, 'Grey Knights', 'Grey Knights', 'factions/grey-knights.php', 'Factions', 0),
    (25, 'Imperial Knights', 'Imperial Knights', 'factions/imperial-knights.php', 'Factions', 0),
    (26, 'Leagues of Votann', 'Leagues of Votann', 'factions/leagues-of-votann.php', 'Factions', 0),
    (27, 'Necrons', 'Necrons', 'factions/necrons.php', 'Factions', 0),
    (28, 'Orks', 'Orks', 'factions/orks.php', 'Factions', 0),
    (29, 'Space Marines', 'Space Marines', 'factions/space-marine.php', 'Factions', 0),
    (30, 'Space Wolves', 'Space Wolves', 'factions/space-wolves.php', 'Factions', 0),
    (31, \"T'au Empire\", \"T'au Empire\", \"factions/t'au-empire.php\", 'Factions', 0),
    (32, 'Thousand Sons', 'Thousand Sons', 'factions/thousand-sons.php', 'Factions', 0),
    (33, 'Tyranids', 'Tyranids', 'factions/tyranids.php', 'Factions', 0),
    (34, 'World Eaters', 'World Eaters', 'factions/world-eaters.php', 'Factions', 0),
    (35, 'Adepta Sororitas', 'Adepta Sororitas', 'points/sororitas-points.php', 'Points', 1),
    (36, 'Adeptus Custodes', 'Adeptus Custodes', 'points/custodes-points.php', 'Points', 1),
    (37, 'Adeptus Mechanicus', 'Adeptus Mechanicus', 'points/mechanicus-points.php', 'Points', 1),
    (38, 'Adeptus Titanicus', 'Adeptus Titanicus', 'points/titanicus-points.php', 'Points', 1),
    (39, 'Aeldari', 'Aeldari', 'points/aeldari-points.php', 'Points', 1),
    (40, 'Agents of the Imperium', 'Agents of the Imperium', 'points/agents-points.php', 'Points', 1),
    (41, 'Astra Militarum', 'Astra Militarum', 'points/militarum-points.php', 'Points', 1),
    (42, 'Black Templars', 'Black Templars', 'points/templars-points.php', 'Points', 1),
    (43, 'Blood Angels', 'Blood Angels', 'points/blood-angels-points.php', 'Points', 1),
    (44, 'Chaos Daemons', 'Chaos Daemons', 'points/daemons-points.php', 'Points', 1),
    (45, 'Chaos Knights', 'Chaos Knights', 'points/chaos-knights-points.php', 'Points', 1),
    (46, 'Chaos Space Marines', 'Chaos Space Marines', 'points/chaos-marines-points.php', 'Points', 1),
    (47, 'Dark Angels', 'Dark Angels', 'points/dark-angels-points.php', 'Points', 1),
    (48, 'Death Guard', 'Death Guard', 'points/death-guard-points.php', 'Points', 1),
    (49, 'Deathwatch', 'Deathwatch', 'points/deathwatch-points.php', 'Points', 1),
    (50, 'Drukhari', 'Drukhari', 'points/drukhari-points.php', 'Points', 1),
    (51, 'Genestealer Cults', 'Genestealer Cults', 'points/genestealers-points.php', 'Points', 1),
    (52, 'Grey Knights', 'Grey Knights', 'points/grey-knights-points.php', 'Points', 1),
    (53, 'Imperial Knights', 'Imperial Knights', 'points/imperial-knights-points.php', 'Points', 1),
    (54, 'Leagues of Votann', 'Leagues of Votann', 'points/votann-points.php', 'Points', 1),
    (55, 'Necrons', 'Necrons', 'points/necrons-points.php', 'Points', 1),
    (56, 'Orks', 'Orks', 'points/orks-points.php', 'Points', 1),
    (57, 'Space Marines', 'Space Marines', 'points/space-marines-points.php', 'Points', 1),
    (58, 'Space Wolves', 'Space Wolves', 'points/space-wolves-points.php', 'Points', 1),
    (59, \"T'au Empire\", \"T'au Empire\", \"points/t'au-points.php\", 'Points', 1),
    (60, 'Thousand Sons', 'Thousand Sons', 'points/thousand-sons-points.php', 'Points', 1),
    (61, 'Tyranids', 'Tyranids', 'points/tyranids-points.php', 'Points', 1),
    (62, 'World Eaters', 'World Eaters', 'points/world-eaters-points.php', 'Points', 1)";
    if ($mysqli->query($query)) {
        echo "Successfully inserted values into `search_suggestions` table" . "<br>";
    } else {
        die("Error inserting values `search_suggestions` table: " . $mysqli->error . "<br>");
    }

    $query = "CREATE TABLE `unit_table` (
        `UnitTableID` int(11) NOT NULL AUTO_INCREMENT,
        `UserID` int(11) NOT NULL,
        `faction` varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL,
        `models` varchar(255) NOT NULL,
        `points` varchar(255) NOT NULL,
        PRIMARY KEY(`UnitTableID`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    if ($mysqli->query($query)) {
        echo "Successfully created `unit_table` table" . "<br>";
    } else {
        die("Error creating `unit_table` table: " . $mysqli->error . "<br>");
    }

    $query = "CREATE TABLE `users` (
        `UserID` int(11) NOT NULL,
        `username` varchar(50) NOT NULL,
        `password` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT current_timestamp(),
        `pfp_path` varchar(255) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    if ($mysqli->query($query)) {
        echo "Successfully created `users` table" . "<br>";
    } else {
        die("Error creating `users` table: " . $mysqli->error . "<br>");
    }

    $query = "ALTER TABLE `search_suggestions`
    ADD PRIMARY KEY (`suggestionID`)";
    if ($mysqli->query($query)) {
        echo "Successfully altered `search_suggestions` table" . "<br>";
    } else {
        die("Error altering `search_suggestions` table: " . $mysqli->error . "<br>");
    }

    $query = "ALTER TABLE `unit_table`
    ADD KEY `UserID` (`UserID`)";
    if ($mysqli->query($query)) {
        echo "Successfully altered `unit_table` table" . "<br>";
    } else {
        die("Error altering `unit_table` table: " . $mysqli->error . "<br>");
    }
    
    $query = "ALTER TABLE `users`
    ADD PRIMARY KEY (`UserID`),
    ADD UNIQUE KEY `username` (`username`)";
    if ($mysqli->query($query)) {
        echo "Successfully altered `users` table" . "<br>";
    } else {
        die("Error altering `users` table: " . $mysqli->error . "<br>");
    }

    $query = "ALTER TABLE `search_suggestions`
    MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36";
    if ($mysqli->query($query)) {
        echo "Successfully altered `search_suggestions` table" . "<br>";
    } else {
        die("Error altering `search_suggestions` table: " . $mysqli->error . "<br>");
    }

    $query = "ALTER TABLE `users`
    MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2";
    if ($mysqli->query($query)) {
        echo "Successfully altered `users` table" . "<br>";
    } else {
        die("Error altering `users` table: " . $mysqli->error . "<br>");
    }

    $query = "ALTER TABLE `unit_table`
    ADD CONSTRAINT `unit_table_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`)";
    if ($mysqli->query($query)) {
        echo "Successfully altered `unit_table` table" . "<br>";
    } else {
        die("Error altering `unit_table` table: " . $mysqli->error . "<br>");
    }

    echo "Successfully created the database and all tables"."<br>";
    $mysqli->close();


    ?>
</body>

</html>