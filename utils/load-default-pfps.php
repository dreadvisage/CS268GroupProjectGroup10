<?php
require_once 'constants.php';

require_once PATH_CONFIG;

$query = "SELECT * FROM default_pfps";
$results = $mysqli->query($query);

echo '<table class="image-table">';
echo '<input id="db-pfp-choice" type="hidden" name="pfpChoice" value="">';
echo '<tr>';
$i = 0;
while ($row_default_pfps = mysqli_fetch_array($results)) {
    if ($i % 3 == 0 && $i != 0) {
        echo '</tr>';
        
        echo '<tr>';
    }

    $p = $row_default_pfps['pfp_path'];
    /* Holy God is this ugly. I plan to clean this up, but I'll give the run down on what it does. It's an anonymous function that can run inline with HTML. Never do this
    unless you want to offend God. At the very end, "return true" is needed in order for PHP to work after it. PHP form submit request will not occur unless that is set to
    true. */
    $js = "(function() {document.getElementById('db-pfp-choice').value = '" . $p . "'; console.log('Done');})();return true;";

    echo '<td><input type="image" src="../' . $p . '" alt="' . $p . '" onclick="' . $js . '"></td>';
    
    $i++;
}
echo '</table>';


?>