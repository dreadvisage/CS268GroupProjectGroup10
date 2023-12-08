<?php
session_start();
require_once '../../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = 'SELECT * FROM unit_table WHERE UserID="'. $_SESSION["UserID"] .'"';
    $results = $mysqli->query($query);
    
    $data = array();
    
    $total_points = 0;
    $i = 0;
    while($unit_table_row = mysqli_fetch_array($results)) {
        $unit_table_id = $unit_table_row['UnitTableID'];
        $faction = $unit_table_row['faction'];
        $name = $unit_table_row['name'];
        $models = $unit_table_row['models'];
        $points = $unit_table_row['points'];
    
        $total_points += $points;
    
        $data[$i++] = [$unit_table_id, $faction, $name, $models, $points];
    }
    echo json_encode([$data, $total_points]);
}


?>