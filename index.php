<?php
// This is the main controller 

// Create or access a Session
session_start();

// Get the database connection file
require_once 'library/connections.php';
// Get the PHP Motors model for use as needed
require_once 'model/main-model.php';
// Get the functions library
require_once 'library/functions.php';

// Check if the firstname cookie exists, get its value
if (isset($_COOKIE['firstname'])) {
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}
// Get the array of classifications
$classifications = getClassifications();
//build navigation
$navList = Navigation($classifications);

$logout = "<a href='/phpmotors/index.php?action=" . urlencode('logout') . "'title='Logout Here' id='acc'>Logout</a>";
// // Build a navigation bar using the $classifications array
// $navList = '<ul>';
// $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
// foreach ($classifications as $classification) {
//     $navList .= "<li><a href='/phpmotors/index.php?action=" . urlencode($classification['classificationName']) . "' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
// }
// $navList .= '</ul>';

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
    case 'template':
        include 'view/template.php';
        break;
    case 'logout':
        $_SESSION['loggedin'] = FALSE;
        session_unset();
        session_destroy();
        include 'view/home.php';
        break;
    default:
        include 'view/home.php';
        break;
}
