<?php
session_start();
require_once '../utils/constants.php';

require_once PATH_CONFIG;
require_once PATH_IS_LOGGED_IN;
require_once PATH_NAVBAR;

// Check if the user is already logged in, if yes then redirect them to the user profile page
if (isLoggedIn()) {
    header("location: user-profile.php");
    exit;
}


// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials. If any errors are set, do nothing.
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT UserID, username, password FROM users WHERE username = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if username exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables.
                    /* On a successful store_result, we declare three variables that we want to store row data inside. We 
                    want to "bind" the data in the row to these three variables. */
                    $stmt->bind_result($user_id, $username, $hashed_password);
                    /* After bind_result has been created the variables to store data in, we fetch the row data and store them in each variable. 
                    Basically, we get the row that matched the username, and we store the values of the row into these three variables.  */
                    if ($stmt->fetch()) {
                        /* From the database, we have the hashed password. We check that against the password the user
                        inputted in the password field. */
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["UserID"] = $user_id;
                            $_SESSION["username"] = $username;

                            // Redirect user to user profile page
                            header("location: user-profile.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <?php
    echoNavbar(1); echo __DIR__
    ?>

    <main>
        <div class="form-wrapper">
            <div class="form-group">
                <div class="form-group">
                    <h2 class="title">Login</h2>
                    <p class="instruct">Please fill in your credentials to login.</p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-input <?php echo (!empty($username_err) || !empty($login_err)) ? 'invalid-input' : ''; ?>" value="<?php echo $username ?>">
                        <p class="invalid-feedback"><?php echo $username_err; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-input <?php echo (!empty($password_err) || !empty($login_err)) ? 'invalid-input' : ''; ?>" value="<?php echo $password ?>">
                        <p class="invalid-feedback"><?php echo $password_err; ?></p>
                    </div>
                    <?php
                    if (!empty($login_err)) {
                        echo '<p style="font-size: 14px;" class="invalid-feedback">' . $login_err . '</p>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="submit" class="btn-primary" value="Login">
                    </div>

                </form>
                <p class="instruct">Don't have an account? <a href="register.php">Register now</a>.</p>
            </div>
        </div>
    </main>
</body>

</html>