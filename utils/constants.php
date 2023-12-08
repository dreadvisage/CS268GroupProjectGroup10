<?php
/* The benefit of having this constants file is that it allows the programmer to change name of the root folder with ease.
Instead of updating every single file and checking if everything is correct, you just have to update the PROJECT_WORKSPACE 
constant right here. The only caveat is that for each php file, you MUST include/require this file `constants.php`. This is 
best done by referring up N number of directories until you can navigate to this file. e.g. `require '../../utils/constants.php'`
where the php file that is doing the requiring, needs to navigate up two directories to the project root, to then specify
this `utils/constants.php` file. 

NOTE: If you create a soft link inside of XAMPP/htdocs, you MUST ensure the name of the soft link is the name of the 
PROJECT_WORKSPACE constant. Only in this case, does the name of this project's folder not matter and instead, the soft
link name matters. 
*/
define('PROJECT_WORKSPACE', 'CS268GroupProjectGroup10');

define('PATH_SECRETS', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/secrets/secrets.php');
define('PATH_CONFIG', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/config.php');
define('PATH_CONSTANTS', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/constants.php');
define('PATH_GET_USER_PFP', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/get-user-pfp.php');
define('PATH_IS_LOGGED_IN', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/is-logged-in.php');
define('PATH_LOAD_DEFAULT_PFPS', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/load-default-pfps.php');
define('PATH_NAVBAR', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/utils/navbar.php');
define('PATH_LOGIN', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_WORKSPACE . '/account/login.php');

?>