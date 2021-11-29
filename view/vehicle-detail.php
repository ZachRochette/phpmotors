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
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>