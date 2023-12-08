<?php
session_start();
require_once 'utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_str = $_REQUEST["q"];
    $search_str = strtolower($search_str);
    $search_results = array();

    $query = "SELECT * FROM search_suggestions";
    $results = $mysqli->query($query);
    $i = 0;
    while($row = mysqli_fetch_array($results)) {
        $suggestionID = $row['suggestionID'];
        $suggestionMatchOn = $row['suggestionMatchOn'];
        $suggestionDisplay = $row['suggestionDisplay'];
        $suggestionLink = $row['suggestionLink'];
        $sectionTitle = $row['sectionTitle'];
        $requireLogin = $row['requireLogin'];
         
        if ($requireLogin && isNotLoggedIn()) {
            continue;
        } else {
            $search_results[$i++] = [$suggestionMatchOn, $suggestionDisplay, $sectionTitle, $suggestionLink];
        }
    }

    echo json_encode($search_results);
}
    
    
?>