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
    <title><?php if (isset($invInfo['invMake'])) {
                echo "Delete $invInfo[invMake] $invInfo[invModel]";
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
            <h1><?php if (isset($invInfo['invMake'])) {
                    echo "Delete $invInfo[invMake] $invInfo[invModel]";
                } ?></h1>
            <p>Confirm Vehicle Deletion. The delete is permanent.</p>
            <form method="post" action="/phpmotors/vehicles/index.php" class="login">
                <label for="invMake">Make:</label>
                <input type="text" readonly name="invMake" id="invMake" <?php
                                                                        if (isset($invInfo['invMake'])) {
                                                                            echo "value='$invInfo[invMake]'";
                                                                        } ?>>

                <label for="invModel">Model:</label>
                <input type="text" readonly name="invModel" id="invModel" <?php
                                                                            if (isset($invInfo['invModel'])) {
                                                                                echo "value='$invModel[invModel]'";
                                                                            } ?>>

                <label for="invDescription">Description:</label>
                <input name="invDescription" id="invDescription" type="text" <?php
                                                                                if (isset($invInfo['invDescription'])) {
                                                                                    echo "value='$invDescription[invDescription]'";
                                                                                } ?>>

                <input type="submit" name="submit" id="regbtn" value="Delete Vehicle">
                <input type=" hidden" name="action" value="deleteVehicle">
                <input type="hidden" name="invId" value="<?php if (isset($invInfo['invId'])) {
                                                                echo $invInfo['invId'];
                                                            } ?>">
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