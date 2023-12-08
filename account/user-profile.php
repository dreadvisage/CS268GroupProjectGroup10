<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_IS_LOGGED_IN;
require_once PATH_GET_USER_PFP;
require_once PATH_NAVBAR;

// Check if the user is logged in, if not then redirect him to login page
if (isNotLoggedIn()) {
    header('location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/user-profile.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/pfp-table-values.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/load-unit-table-data.js"></script>
    <script src="../js/user-profile.js"></script>
</head>

<body>

    <?php
    echoNavbar(1);
    ?>

    <main>
        <div class="left-panel">
            <div> <!-- Outer div needed for flexbox spacing -->
                <div class="profile-picture-content">
                    <div id="pfp-frame-id" class="profile-picture-frame">
                        <img class="profile-picture" src="../<?php echo getUserPfp(); ?>" alt="Profile Picture">
                        <img class="file-upload-icon" src="../images/file-upload.png" alt="File Upload Icon">
                    </div>
                </div>
                <p class="profile-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                <hr>
            </div>
            <div class="account-control">
                <p class="section-header">Account Control</p>
                <hr class="section-header-rule">
                <div class="account-control-btns">
                    <a class="btn-option btn-pad" href="reset-password.php">Reset Password</a>
                    <a class="btn-option" href="logout.php">Logout</a> <!--Put a popup to confirm logout-->
                </div>
            </div>
        </div>

        <div class="main-wrapper">
            <div id="model-pfp" class="modal">
                <div id="modal-pfp-content" class="modal-content">
                    <div class="wrapper-table">
                        <span class="close">&times;</span>
                        <table class="image-table"></table>
                        <script>loadPfpTableValues(3, 1);</script>
                    </div>
                    <script>registerModelListeners();</script>
                </div>
            </div>

            <div class="main-content">
                <a class="btn-option" href="db/clear-unit-table.php">Clear Table</a>
                <table id="unit-table" class="unit-table"></table>
                <script>loadUnitTableData(1);</script>

                <p id="total-points"></p>
            </div>

            <script>registerLeftPanelListener();</script>

        </div>
    </main>
</body>

</html>