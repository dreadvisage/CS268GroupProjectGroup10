<?php 
require_once 'constants.php';

require_once PATH_CONFIG;

function getUserPfp() {
    global $mysqli;

    $query = "SELECT pfp_path FROM users WHERE username = '" . $_SESSION['username'] . "'";
    $results = $mysqli->query($query);
    $user_pfp_row = mysqli_fetch_array($results);
    $pfp_path = $user_pfp_row['pfp_path'];

    return $pfp_path;
}
?>