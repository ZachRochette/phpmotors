<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login PHP Motors</title>
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
            <form method="post" action="/phpmotors/vehicles/index.php" class="login">
                <h2>Add Vehicle:</h2>
                <label for="classificationId"> ID:</label>
                <input name="classificationId" id="classification" type="number" required>
                <label for="invMake"> Make:</label>
                <input name="invMake" id="make" type="text" required>
                <label for="invModel"> Model:</label>
                <input name="invModel" id="model" type="text" required>
                <label for="invDescription"> Description:</label>
                <input name="invDescription" id="description" type="text" required>
                <label for="invImage"> Image:</label>
                <input name="invImage" id="image" type="text" required>
                <label for="invThumbnail"> Thumbnail:</label>
                <input name="invThumbnail" id="Thumbnail" type="text" required>
                <label for="invPrice">Price:</label>
                <input name="invPrice" id="price" type="number" required>
                <label for="invStock"> Inventory:</label>
                <input name="invStock" id="stock" type="number" required>
                <label for="invColor"> Color:</label>
                <input name="invColor" id="color" type="text" required>
                <input type="submit" name="submit" id="regbtn" value="Add Vehicle">
                <input type="hidden" name="action" value="add-vehicle">
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