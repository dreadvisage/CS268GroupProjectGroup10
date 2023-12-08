<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;
require_once PATH_NAVBAR;

// Check if the user is logged in, otherwise redirect to login page
if (isNotLoggedIn()) {
    header('location: login.php');
    exit;
}

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Password must have at least 6 characters.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before updating the database
    if (empty($new_password_err) && empty($confirm_password_err)) {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE UserID = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_user_id);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_user_id = $_SESSION["UserID"];

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                $mysqli->close();
                header("location: login.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <?php
    echoNavbar(1);
    ?>

    <main>
        <div class="form-wrapper">
            <div class="form-group">
                <div class="form-group">
                    <h2 class="title">Reset Password</h2>
                    <p class="instruct">Please fill out a new password.</p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-input <?php echo (!empty($new_password_err)) ? 'invalid-input' : ''; ?>" value="<?php echo $new_password ?>">
                        <p class="invalid-feedback"><?php echo $new_password_err; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-input <?php echo (!empty($confirm_password_err)) ? 'invalid-input' : ''; ?>" value="<?php echo $confirm_password; ?>">
                        <p class="invalid-feedback"><?php echo $confirm_password_err; ?></p>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-primary" value="Submit"> <!--Put a popup to confirm password reset-->
                        <a href="user-profile.php" class="btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>