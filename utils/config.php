<?php
/* The 'DOCUMENT_ROOT' for XAMPP is .../XAMPP/htdocs . But we need to follow the symlink we created. 
So we add on /project . Then wherever the 'project' folder is, we go up one directory. And then we are
able to access the required folder from our project root. We do this because not every file that 
includes/requires this php file, has the same amount of directories to navigate. So instead, we just 
use PHP's built-in tools to navigate from the 'DOCUMENT_ROOT' instead which is always a uniform distance.*/
$secrets_path = $_SERVER['DOCUMENT_ROOT'];
$secrets_path .= "/project/../secrets/secrets.php";

/* The @ operator here suppressing the warning that php will spit out if the path isn't found. 
Since we handle the case where the file isn't found, we can do this safely. */
@include_once $secrets_path;


/* If the file `secrets.php` is not defined. Then, try to log in as root to the 
default database of `cs268group10database`. Otherwise, use defined variables in 
`secrets.php`. */
if (!isset($db_server) && !isset($db_username) && !isset($db_password) && !isset($db_name)) {
    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_NAME', "cs268group10database");
} else {
    /* Database credentials. $db_ variables are kept separate
    so that this implementation is shown without showing 
    sensitive information */
    define('DB_SERVER', $db_server);
    define('DB_USERNAME', $db_username);
    define('DB_PASSWORD', $db_password);
    define('DB_NAME', $db_name);
}

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$mysqli) {
    die("Failed to connect to server. " . $mysqli->connect_error);
}

// If you reach here, you're connected!