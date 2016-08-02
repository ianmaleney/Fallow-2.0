<?php

// Setup File:

# Database Connection Here...

// Uncomment This for Production:
//$dbc = mysqli_connect('localhost', 'fallrdac_ian', 'Rebel4k_ha', 'fallrdac_pages') OR die('Could Not Connect Because: '.mysqli_connect_error());

// Local Development DB Connection
$dbc = mysqli_connect('localhost', 'root', 'root', 'fallrdac_pages') OR die('Could Not Connect Because: '.mysqli_connect_error());

// Site Title
$site_title = 'Fallow Media - Creative Publishers';

# Functions:

if(isset($_GET['page'])) {

    $pageid = $_GET['page']; //Set $pageid to equal the value given in the URL

} else {

    $pageid = 1; // Set $pageid eqaul to 1 or the homepage
}

?>
