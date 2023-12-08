<?php
session_start();
require_once '../../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;

if (isNotLoggedIn()) {
    header('location: ' . PATH_LOGIN);
    exit;
}

$query = 'DELETE FROM unit_table WHERE UserID="' . $_SESSION["UserID"] . '"';
if ($stmt = $mysqli->prepare($query)) {
    if ($stmt->execute()) {
        $stmt->close();
        // Redirect to login page
        header("location: ../user-profile.php");
        exit;
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    $stmt->close();
}

?>