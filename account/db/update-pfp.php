<?php
session_start();
require_once '../../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;
require_once PATH_GET_USER_PFP;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

/* Updates and stores the pfp in the database */
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "UPDATE users SET pfp_path = ? WHERE username = ?";

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("ss", $param_pfp_path, $param_username);

        $param_username = $_SESSION["username"];
        $param_pfp_path = $_REQUEST['path'];

        if($stmt->execute()) {
            // header("location: account/user-profile.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        $stmt->close();
    }
}

?>
 