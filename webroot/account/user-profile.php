<?php
$session_start_path = $_SERVER['DOCUMENT_ROOT'];
$session_start_path .= "/project/../utils/session-start.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

$get_user_pfp_path = $_SERVER['DOCUMENT_ROOT'];
$get_user_pfp_path .= "/project/../utils/get-user-pfp.php";
    

require_once $session_start_path;
require_once $is_logged_in_path;
require_once $get_user_pfp_path;
 
// Check if the user is logged in, if not then redirect him to login page
if(isNotLoggedIn()){
    header("location: login.php");
    exit;
}

function get_pfp() {
    return "../" . getUserPfp(); 
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
        $param_pfp_path = $_POST["pfpChoice"];

        if($stmt->execute()) {
            header("location: user-profile.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        $stmt->close();
    }
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="user-profile.css">
    <link rel="stylesheet" href="modal.css">
</head>
<body>
    

    <?php require '../../utils/one-up-navbar.php'; ?>
    <div class="left-panel">
        <div class="profile-picture-content">
            <div id="pfp-frame-id" class="profile-picture-frame">
                <img class="profile-picture" src="<?php echo get_pfp(); ?>">
                <img class="file-upload-icon" src="../images/file-upload.png">
            </div> <!--
                1.) Have option to change image https://stackoverflow.com/questions/348363/what-is-the-best-place-for-storing-uploaded-images-sql-database-or-disk-file-sy
                2.) You'll have to store images on the filesystem (outside of the webroot), and put paths to those images for each user in the MySQL database. 
                3.) Keep the user images out of Github. They should remain on the "server" which in this case it just our machines. 
                4.) In project directory file structure should be something like /account-data/ and then inside that /default (for default images to pick from) and /<username> for each user in the database. Store the images in the /<username> directory.
            -->
        </div>
        <p class="profile-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
        <hr>
        <div class="left-panel-padding"></div>
        <div class="account-control">
            <p class="section_header">Account Control</p>
            <hr>
            <div class="account-control-btns">
                <a class="btn-option btn-pad" href="reset-password.php">Reset Password</a>
                <a class="btn-option" href="logout.php">Logout</a> <!--Put a popup to confirm logout-->
            </div>
        </div>

        
        <div id="myModal" class="modal">
        <div id="modal-content-id" class="modal-content">
        <div class="wrapper-table">
            <span class="close">&times;</span>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <?php require_once "../../utils/load-default-pfps.php"; ?>
            </form>
        </div>

        <script src="modal.js"></script>
      </div>
    </div>


    </div>
</body>
</html>