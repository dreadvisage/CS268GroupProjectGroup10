<?php
session_start();
$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

$get_user_pfp_path = $_SERVER['DOCUMENT_ROOT'];
$get_user_pfp_path .= "/project/../utils/get-user-pfp.php";
    
require_once $is_logged_in_path;
require_once $get_user_pfp_path;
 
// Check if the user is logged in, if not then redirect him to login page
if(isNotLoggedIn()){
    header("location: ../login.php");
    exit;
}

/* The 'DOCUMENT_ROOT' for XAMPP is .../XAMPP/htdocs . But we need to follow the symlink we created. 
So we add on /project . Then wherever the 'project' folder is, we go up one directory. And then we are
able to access the required folder from our project root. We do this because not every file that 
includes/requires this php file, has the same amount of directories to navigate. So instead, we just 
use PHP's built-in tools to navigate from the 'DOCUMENT_ROOT' instead which is always a uniform distance.*/
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

require_once $config_path;

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
 