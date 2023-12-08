# CS268GroupProjectGroup10
This project assumes you have a basic understanding on how to use XAMPP and PHPMyAdmin. In order to get this project working, you need to install XAMPP. If you don't know how to install XAMPP, find a guide on the internet for your operating system. Once, XAMPP is installed proceed to the next section.

## IMPORTANT
If you change this project's folder name at all (from CS268GroupProjectGroup10 to <insert_name_here>), you MUST update the PROJECT_WORKSPACE constant to the new folder name which is located at `utils/constants.php`

## Making the Website Accessible by XAMPP
You have two main options when helping XAMPP find this website. Moving the project folder to `<XAMPP_install_path>/XAMPP/htdocs/CS268GroupProjectGroup10` or by creating a soft link at `<XAMPP_install_path>/XAMPP/htdocs/super_cool_soft_link` and having this project folder be installed most anywhere on your system.
* Option 1, Moving this project folder to XAMPP: XAMPP needs to be able to find this project. By default, XAMPP searches in <XAMPP_install_path>/XAMPP/htdocs . Within htdocs, you'll need to place this project "CS268GroupProjectGroup10" so that the file structure looks like `<XAMPP_install_path>/XAMPP/htdocs/CS268GroupProjectGroup10`. Once that is done, you must navigate to the website by going to `localhost/CS268GroupProjectGroup10/`.
* Option 2, Soft link creation: I recommend that we instead create soft link to the htdocs directory. You can create a soft link that points to another location on your computer where you installed this project. This soft link can be named whatever you wish, and the name will be used to navigate to this website. The soft link file structure looks like `<XAMPP_install_path>/XAMPP/htdocs/super_cool_soft_link` and can used in a web browser. e.g. `localhost/super_cool_soft_link`. If you don't know how to create a soft link, use a guide for your specific operating system. Nevertheless, you must create a soft link from this project's root directory to the `htdocs` directory. Once that is done, you'll navigating to the website by going to `localhost/super_cool_soft_link`. 
    * Here in an example command for UNIX-based operating systems. `ln -s <this_project_path>/CS268GroupProjectGroup10 <XAMPP_install_path>/XAMPP/htdocs/<your_soft_link_name>`. By doing this, you can navigate to the website by using the soft link name. e.g. `localhost/<your_soft_link_name>`.

## PHPMyAdmin Account Creation (Optional)
By default, this project will log into PHPMyAdmin using the root account. If you would prefer to log into PHPMyAdmin using your own account, read further. Using PHPMyAdmin, create a user account. This user account should have a "host name" of "localhost". The username and password for this account can be whatever you wish. You'll need to remember your username and password for later when you place those values into a specific config file for the project (we'll do that later).  This account should
also have "all privileges" available to it. 

## Project "secrets.php" Creation (Conditional)
This step is only needed if you want to use your own user account for PHPMyAdmin. Otherwise, the default root account will be used. From the project root, you'll need to create a folder titled "secrets" and a file within that folder called "secrets.php". The folder structure from the project root should look like CS268GroupProjectGroup10/secrets/secrets.php . Within the secrets.php file, you'll need to copy/paste the contents below and set the PHP variables to be your personal information from earlier.
```
<?php
// The name of the server. Probably localhost.
$db_server = "localhost";
// The username for the server
$db_username = "CS268Tyler";
// The password for the server
$db_password = "12345";
// The specific database within that server to use
$db_name = "cs268group10database";
?>
```
Once the secrets.php file has been created and you placed your relevant data into it, proceed to the next section.

## PHPMyAdmin Database Creation
Ensure that within the XAMPP Control Panel, you start the processes "Apache" and "MySQL". You can test if these are running by using a web browser and navigating to "localhost". If you get an XAMPP-related welcome screen, you are good to go. It's time to create the database that this website will use. Inside the root directory, there is an initialization script for the database. To call this script, you need to navigate to the file in the web browser

* If you created a soft-link: `localhost/project/cs268groupproject10databasesetup.php`
* If you placed the folder in htdocs: `localhost/CS268GroupProjectGroup10/cs268groupproject10databasesetup.php`

Whatever you choose, if you set everything up correctly, you should get a screen that tells you all the database and tables were created successfully. Once that is done, the website is now full operational, you can navigate to the to the root directory and use the website.


