<?php

// Setup File:

# Database Connection Here...

// Change "fallrdac_test" to "fallrdac_pages" for Deployment:
$dbc = mysqli_connect('localhost', 'fallrdac_ian', 'Rebel4k_ha', 'fallrdac_test') OR die('Could Not Connect Because: '.mysqli_connect_error());

// Local Development DB Connection
//$dbc = mysqli_connect('localhost', 'root', 'root', 'fallrdac_pages') OR die('Could Not Connect Because: '.mysqli_connect_error());

// Site Title
$site_title = 'Fallow Media - Creative Publishers';

?>
