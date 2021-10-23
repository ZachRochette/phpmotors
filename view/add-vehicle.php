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
                <h2>Car Classification</h2>
                <label for="invMake">Make:</label>
                <input name="invMake" id="invMake" type="text">

                <label for="invModel">Model:</label>
                <input name="invModel" id="invModel" type="text">

                <label for="invDescription">Description:</label>
                <input name="invDescription" id="invDescription" type="text">

                <label for="invImage">Image:</label>
                <input name="invImage" id="invImage" type="text">

                <label for="invThumbnail">Thumbnail:</label>
                <input name="invThumbnail" id="invThumbnail" type="text">

                <label for="invPrice">Price:</label>
                <input name="invPrice" id="invPrice" type="number">

                <label for="invStock">Stock:</label>
                <input name="invStock" id="invStock" type="number">

                <label for="invColor">Color:</label>
                <input name="invColor" id="invColor" type="text">

                <label for="classificationId">ID:</label>
                <select name="classificationId" id="classificationId">
                    <option value="1">Classic</option>
                    <option value="2">Sports</option>
                    <option value="3">SUV</option>
                    <option value="4">Trucks</option>
                    <option value="5">Used</option>
                </select>

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