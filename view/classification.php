<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $classificationName; ?> vehicles | PHP Motors, Inc.</title>
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
            <h1><?php echo $classificationName; ?> vehicles</h1>
            <?php if (isset($message)) {
                echo $message;
            }
            ?>
            <?php if (isset($vehicleDisplay)) {
                echo $vehicleDisplay;
            } ?>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>