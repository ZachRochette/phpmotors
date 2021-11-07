<?php
if (!$_SESSION['loggedin']) {
    // This test is now "If Session loggedin value is NOT true"
    header("location: ../index.php");
}
?>
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
            echo $_SESSION['clientData']['clientFirstname'], " ", $_SESSION['clientData']['clientLastname'],
            "</h1>
            <ul>
            <li> First name: ", $_SESSION['clientData']['clientFirstname'], " </li>
            <li> Last name: ", $_SESSION['clientData']['clientLastname'], " </li>
            <li> Email address: ", $_SESSION['clientData']['clientEmail'], " </li>
            </ul>";
            if ($_SESSION['clientData']['clientLevel'] > 1) {
                echo "<p><a href='/phpmotors/vehicles/index.php?action=" . urlencode('vehicles') . "'title='Vehicle Management Page'>Vehicle Management Page</a></p>";
            } ?>

        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>