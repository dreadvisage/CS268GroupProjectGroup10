<?php
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $is_logged_in_path;

if (isNotLoggedIn()) {
    header("location: ../login.php");
    exit;
}

function echo_unit_table_data() {
    global $mysqli;

    $query = 'SELECT * FROM unit_table WHERE UserID="'. $_SESSION["UserID"] .'"';
    $results = $mysqli->query($query);
    echo '<table class="unit-table">';
    echo '<tr><td>Faction:</td>';
    echo '<td>Unit Name:</td>';
    echo '<td>Num Models:</td>';
    echo '<td>Unit Points:</td></tr>';

    $total_points = 0;
    while($unit_table_row = mysqli_fetch_array($results)) {
        $faction = $unit_table_row['faction'];
        $name = $unit_table_row['name'];
        $models = $unit_table_row['models'];
        $points = $unit_table_row['points'];
    
        $total_points += $points;

        echo "<tr><td>$faction</td><td>$name</td><td>$models</td><td>$points</td></tr>";
    }
    echo '</table>';

    echo "total points: $total_points";
}

?>