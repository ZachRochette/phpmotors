<?php
// Build the classifications option list
$classifList = '<select name="classificationId" id="classificationId">';
$classifList .= "<option>Choose a Car Classification</option>";
foreach ($classifications as $classification) {
    $classifList .= "<option value='$classification[classificationId]'";
    if (isset($classificationId)) {
        if ($classification['classificationId'] === $classificationId) {
            $classifList .= ' selected ';
        }
    } elseif (isset($invInfo['classificationId'])) {
        if ($classification['classificationId'] === $invInfo['classificationId']) {
            $classifList .= ' selected ';
        }
    }
    $classifList .= ">$classification[classificationName]</option>";
}
$classifList .= '</select>';
?>
<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if (isset($invInfo['invMake']) && isset($invInfo['invModel'])) {
                echo "Modify $invInfo[invMake] $invInfo[invModel]";
            } elseif (isset($invMake) && isset($invModel)) {
                echo "Modify $invMake $invModel";
            } ?> | PHP Motors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
</head>

<body>
    <div id="wrapper">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php //require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php';
            echo $navList; ?>
        </nav>
        <main>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <h1><?php if (isset($invInfo['invMake']) && isset($invInfo['invModel'])) {
                    echo "Modify $invInfo[invMake] $invInfo[invModel]";
                } elseif (isset($invMake) && isset($invModel)) {
                    echo "Modify$invMake $invModel";
                } ?></h1>
            <form method="post" action="/phpmotors/vehicles/index.php" class="login">
                <h2>Car Classification</h2>
                <label for="invMake">Make:</label>
                <input type="text" name="invMake" id="invMake" required <?php if (isset($invMake)) {
                                                                            echo "value='$invMake'";
                                                                        } elseif (isset($invInfo['invMake'])) {
                                                                            echo "value='$invInfo[invMake]'";
                                                                        } ?> required>

                <label for="invModel">Model:</label>
                <input type="text" name="invModel" id="invModel" required <?php if (isset($invModel)) {
                                                                                echo "value='$invModel'";
                                                                            } elseif (isset($invInfo['invModel'])) {
                                                                                echo "value='$invInfo[invModel]'";
                                                                            } ?> required>

                <label for="invDescription">Description:</label>
                <input name="invDescription" id="invDescription" type="text" <?php if (isset($invDescription)) {
                                                                                    echo "value='$invDescription'";
                                                                                } elseif (isset($invInfo['invDescription'])) {
                                                                                    echo "value='$invDescription[invDescription]'";
                                                                                } ?> required>

                <label for="invImage">Image:</label>
                <input name="invImage" id="invImage" type="text" placeholder="images/no-image.png" <?php if (isset($invImage)) {
                                                                                                        echo "value='$invImage'";
                                                                                                    } elseif (isset($invInfo['invImage'])) {
                                                                                                        echo "value='$invImage[invImage]'";
                                                                                                    } ?> required>

                <label for="invThumbnail">Thumbnail:</label>
                <input name="invThumbnail" id="invThumbnail" type="text" placeholder="images/no-image.png" <?php if (isset($invThumbnail)) {
                                                                                                                echo "value='$invThumbnail'";
                                                                                                            } elseif (isset($invInfo['invThumbnail'])) {
                                                                                                                echo "value='$invThumbnail[invThumbnail]'";
                                                                                                            }  ?> required>

                <label for="invPrice">Price:</label>
                <input name="invPrice" id="invPrice" type="number" <?php if (isset($invPrice)) {
                                                                        echo "value='$invPrice'";
                                                                    } elseif (isset($invInfo['invPrice'])) {
                                                                        echo "value='$invPrice[invPrice]'";
                                                                    }  ?> required>

                <label for="invStock">Stock:</label>
                <input name="invStock" id="invStock" type="number" <?php if (isset($invStock)) {
                                                                        echo "value='$invStock'";
                                                                    } elseif (isset($invInfo['invStock'])) {
                                                                        echo "value='$invStock[invStock]'";
                                                                    }  ?> required>

                <label for="invColor">Color:</label>
                <input name="invColor" id="invColor" type="text" <?php if (isset($invColor)) {
                                                                        echo "value='$invColor'";
                                                                    } elseif (isset($invInfo['invColor'])) {
                                                                        echo "value='$invColor[invColor]'";
                                                                    }  ?> required>

                <label>Type:</label>
                <?php
                echo $classifList; ?>
                <!-- <select name="classificationId" id="classificationId">
                    <option value="1">Classic</option>
                    <option value="2">Sports</option>
                    <option value="3">SUV</option>
                    <option value="4">Trucks</option>
                    <option value="5">Used</option>
                </select> -->

                <input type="submit" name="submit" id="regbtn" value="Update Vehicle">
                <input type=" hidden" name="action" value="updateVehicle">
                <a class="register_btn" href="/phpmotors/view/vehicle-man.php">Return to Vehicle Managment</a>
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>