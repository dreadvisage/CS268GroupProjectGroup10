<?php
require_once 'constants.php';

require_once PATH_IS_LOGGED_IN;
require_once PATH_GET_USER_PFP;

function getDirsUp($num_dirs_up) {
    $dirs_up = "";
    for ($i = 0; $i < $num_dirs_up; ++$i) {
        $dirs_up .= "../";
    }
    return $dirs_up;
}

function echoNavbar($num_dirs_up) {
    echo '<script src="' . getDirsUp($num_dirs_up) . 'js/navbar-dropdown-manager.js"></script>';
    echo '<script src="' . getDirsUp($num_dirs_up) . 'js/live-search.js"></script>';
    echo '<script src="' . getDirsUp($num_dirs_up) . 'js/navbar-init.js"></script>';
    echo '<header>';
    echo '<nav id="navbar">
    <div class="inner1">
        <a id="warhammer-logo-link" href="' . getDirsUp($num_dirs_up) . 'index.php"><img class="warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
        <div class="alt-dropdown">
            <button id="three-line-menu-btn"><img class="three-line-icon" src="' . getDirsUp($num_dirs_up) . 'images/three-line-icon.png" alt="Menu Button"></button>
            <div id="three-line-dropdown" class="alt-dropdown-content">
                <a href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a>
                <a href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                <a href="' . getDirsUp($num_dirs_up) . 'about.php">About</a>
                <a href="' . getDirsUp($num_dirs_up) . 'indexes.php">Indexes</a>
                <a href="' . getDirsUp($num_dirs_up) . 'faq.php">FAQ</a>';
                if (isLoggedIn()) {
                    echo '<a href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>';
                }
            echo '</div>
        </div>
    </div>
    <div class="inner2">
        <ul id="link-list">
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                    <div id="factions-dropdown" class="dropdown-content">
                        <!--Add resize listener to window and calculate the initial layout-->
                        <script>window.addEventListener("resize", function(){windowResizeMonitor("factions-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("factions-dropdown", ' . $num_dirs_up . ');</script>
                    </div>
                </div>
            </li>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'indexes.php">Indexes</a></li>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'about.php">About</a></li>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'faq.php">FAQ</a></li>';
            if (isLoggedIn()) {
                echo 
                '<li>
                    <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>
                        <div id="points-dropdown" class="dropdown-content">
                            <!--Add resize listener to window and calculate the initial layout-->
                            <script>window.addEventListener("resize", function(){windowResizeMonitor("points-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("points-dropdown", ' . $num_dirs_up . ');</script>
                        </div>
                    </div>
                </li>';
            }
            
        echo '</ul>
        <a id="alt-warhammer-logo-link" href="' . getDirsUp($num_dirs_up) . 'index.php"><img class="alt-warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div class="inner3">
        <div id="search-suggestions-dropdown">
            <input id="search-bar" type="text" placeholder="Search...">
                <div id="search-suggestions" class="search-dropdown-content"></div>
        </div>
    </div>
    <div class="inner4">
        <button id="alt-search-btn"><img class="alt-search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon"></button>
    </div>
    <div class="inner5">';
        if (isLoggedIn()) {
            echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . 
            getDirsUp($num_dirs_up) .
            getUserPfp() . 
            '" alt="Account Logo"></a>';
        } else {
            echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . getDirsUp($num_dirs_up) . 'images/account-logo-skull.svg" alt="Account Logo"></a>';
        }
    echo '</div>
    </nav>';
    echo '</header>';
    echo '<script>initNavbarTools('. $num_dirs_up .')</script>';

}

