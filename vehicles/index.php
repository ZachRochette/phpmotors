<?php
// Accounts Controller

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the Vehicles-model
require_once '../model/vehicles-model.php';
// Get the functions library
require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action=" . urlencode($classification['classificationName']) . "' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

$classifList = '<select name="classificationId">';
foreach ($classifications as $classification) {
    $classifList .= "<option value='$classification[classificationId]'";
    if (isset($classificationId)) {
        if ($classifiaction['classificationID'] === $classificationId) {
            $classifList .= ' selected ';
        }
    }

    $classifList .= ">$classification[classificationName]</option>";
}
$classifList .= '</select>';

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
    case 'add-classification':
        //filter and store data
        $classificationName = trim(filter_input(INPUT_POST, 'classificationName', FILTER_SANITIZE_EMAIL));
        // $clientEmail = checkEmail($clientEmail);
        // Check for missing data
        if (empty($classificationName)) {
            $message = '<p>Please provide a car type.</p>';
            include '../view/add-classification.php';
            exit;
        }

        // Send the data to the classification
        $classification_output = input_carclassification($classificationName);

        // Check and report the result
        if ($classification_output  === 1) {
            $message = "<p>Thanks for your submission</p>";
            include '../view/vehicle-man.php';
            exit;
        } else {
            $message = "<p>Sorry $clientFirstname, but the submission failed. Please try again.</p>";
            include '../view/add-classification.php';
            exit;
        }
        break;


    case 'add-vehicle':
        // Filter and store the data
        $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_STRING));
        $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_STRING));
        $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING));
        $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING));
        $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING));
        $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_STRING));
        $invStock = trim(filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_STRING));
        $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_STRING));
        $classificationId = trim(filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_STRING));

        // Check for missing data
        if (empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) {
            $message = '<p>Please fill in all fields.</p>';
            include '../view/add-vehicle.php';
            exit;
        }


        // Send the data to the inventory
        $inventory_output = input_inventory($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor,  $classificationId);

        // Check and report the result
        if ($inventory_output === 1) {
            $message = "<p>Thanks for your submission</p>";
            include '../view/add-vehicle.php';
            exit;
        } else {
            $message = "<p>Sorry $clientFirstname, but the submission failed. Please try again.</p>";
            include '../view/add-vehicle.php';
            exit;
        }

        break;

    default:
        include '../view/vehicle-man.php';
        break;
}
