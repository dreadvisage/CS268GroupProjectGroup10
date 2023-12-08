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
    $faction = $_REQUEST["faction"];
    $name = $_REQUEST["name"];
    $models = $_REQUEST["models"];
    $points = $_REQUEST["points"];
    $optional_models = json_decode($_REQUEST["optionalmodels"]);

    /* For each user, create a table for them so that we can insert their units into it */
    $query = 'INSERT INTO unit_table (UserID, faction, name, models, points) VALUES (?,?,?,?,?)';
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("issss", $param_user_id, $param_faction, $param_name, $param_models, $param_points);
        
        $param_user_id = $_SESSION["UserID"];
        $param_faction = $faction;

        $param_name = $name;
        
        
        $optional_models_key_value = array();
        for ($i = 0; $i < count($optional_models); ++$i) {

            $exists = 0;
            $index = 0;
            for ($j = 0; $j < count($optional_models_key_value); ++$j) {
                $array_key = $optional_models_key_value[$j][0];
                if ($optional_models[$i][2] == $array_key) {
                    $exists = 1;
                    $index = $j;
                    break;
                }
            }



            if (!$exists) {
                array_push($optional_models_key_value, [$optional_models[$i][2], 1]);
            } else {
                ++$optional_models_key_value[$index][1];
            }
        } 

        // name plus any optional units pending
        $param_models = $models;
        for ($i = 0; $i < count($optional_models_key_value); ++$i) {
            $param_models .= ", " . $optional_models_key_value[$i][1] . " " . $optional_models_key_value[$i][0];
        }

        

        $param_points = $points;
        for ($i = 0; $i < count($optional_models); ++$i) {
            $param_points .= $optional_models[$i][3];
        } 
        /* You really shouldn't use eval here like this because it's not error resilient.
        But since I can expect optional units to always have a +x value where `x` is 
        an integer, it works well enough. for expressions like `30+10`. Which is about
        as complex as I can expect eval to work reliably. Anything outside of that beware. */
        $param_points = eval("return $param_points;");

        if ($stmt->execute()) {
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
