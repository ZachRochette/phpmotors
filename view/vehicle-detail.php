<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $vehicleInfo['invMake'], " ", $vehicleInfo['invModel']; ?> | PHP Motors, Inc.</title>
    <link rel="stylesheet" title="CSS" media="screen" href="../css/style.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php
            echo $navList; ?>
        </nav>
        <main>
            <h1><?php echo $vehicleInfo['invMake'], " ", $vehicleInfo['invModel']; ?></h1>
            <?php if (isset($message)) {
                echo $message;
            }
            ?>
            <div class="vehicleInfo">
                <?php if (isset($vehicleDetails)) {
                    echo $vehicleDetails;
                }
                if (isset($additionalImages)) {
                    echo $images;
                } ?>
            </div>
            <h3>Customer Review</h3>
            <?php
            if (!$_SESSION['loggedin']) {
                echo '<p>You can <a href = "/accounts/index.php?action=login">login</a> to create a review.</p>';
            }
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            ?>
            <form action="/reviews/index.php" method="POST" <?php if (!$_SESSION['loggedin']) {
                                                                echo "hidden";
                                                            } ?>>
                <label>Add your own review</label>
                <br>
                <textarea id="review" name="newReview" rows="4" cols="50" <?php if (isset($clientFirstname)) {
                                                                                echo "value='$clientFirstname'";
                                                                            }  ?> required></textarea>
                <br>
                <input type="submit" name="submit" id="regbtn" value="Add Review">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="addReview">
                <input type="hidden" name="userId" <?php echo 'value="' . $_SESSION['clientData']['clientId'] . '"' ?>>
                <input type="hidden" name="carId" <?php echo 'value="' . $vehicleId . '"' ?>>
            </form>
            <?php
            // Put the reviews on the page.
            if (isset($reviewHTML)) {
                echo $reviewHTML;
            }
            ?>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>