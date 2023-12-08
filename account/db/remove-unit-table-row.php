<?php
session_start();
require_once '../../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

/* Updates and stores the pfp in the database */
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "DELETE FROM unit_table WHERE UnitTableID = ?";

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("i", $param_id);

        $param_id = $_REQUEST['rowindex'];

        if($stmt->execute()) {
            echo "id: " . $param_id;
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        $stmt->close();
    }
}

?>
 