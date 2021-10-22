<?php
// Accounts Controller

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the Vehicles-model
require_once '../model/vehicles-model.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action=" . urlencode($classification['classificationName']) . "' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
    case 'add-classification':
        //filter and store data
        $classificationName = filter_input(INPUT_POST, 'classificationName');
        $classificationId = filter_input(INPUT_POST, 'classificationId');
        // Check for missing data
        if (empty($classificationName) || empty($classificationId)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/add-classification.php';
            exit;
        }

        // Send the data to the classification
        $input_carclassification = input_carclassification($classificationName, $classificationId);

        // Check and report the result
        if ($input_inventory === 1) {
            $message = "<p>Thanks for your submission</p>";
            include '../view/add-classification.php';
            exit;
        } else {
            $message = "<p>Sorry $clientFirstname, but the submission failed. Please try again.</p>";
            include '../view/add-classification.php';
            exit;
        }
        break;
    case 'add-vehicle':
        // Filter and store the data
        $invId = filter_input(INPUT_POST, 'invId');
        $invMake = filter_input(INPUT_POST, 'invMake');
        $invModel = filter_input(INPUT_POST, 'invModel');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invColor = filter_input(INPUT_POST, 'invColor');
        $classificationId = filter_input(INPUT_POST, 'classificationId');

        // Check for missing data
        if (empty($invId) || empty($invMake) || empty($invModel) || empty($invDescription) || ($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit;
        }


        // Send the data to the inventory
        $input_inventory = input_inventory($invId, $invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

        // Check and report the result
        if ($input_inventory === 1) {
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
        include '../view/home.php';
        break;
}
