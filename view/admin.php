<?php
if ($_SESSION['clientData']['clientLevel'] < 1) {
    header('location: /phpmotors/');
    exit;
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
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
            if (isset($message)) {
                echo $message;
            }
            ?>
            <?php
            echo '<h1>' . "You are logged in as ", $_SESSION['clientData']['clientFirstname'], " ", $_SESSION['clientData']['clientLastname'] . '</h1>',
            "<ul>
            <li> First name: ", $_SESSION['clientData']['clientFirstname'], " </li>
            <li> Last name: ", $_SESSION['clientData']['clientLastname'], " </li>
            <li> Email address: ", $_SESSION['clientData']['clientEmail'], " </li>
            </ul>";
            if ($_SESSION['clientData']['clientLevel'] > 1) {
                echo '<h2>' . "Use this Vehicle Managment link to administer inventory" . '</h2>';
            }
            if ($_SESSION['clientData']['clientLevel'] > 1) {
                echo "<p><a href='/phpmotors/vehicles/index.php?action=" . urlencode('vehicles') . "'title='Vehicle Management Page'>Vehicle Management Page</a></p>";
            } ?>
            <h2>Use this page to Update your profile</h2>
            <a href="/phpmotors/accounts?action=updateAccount" title="Update Account Information">Update Account Information</a>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
    <script src="../js/client.js"></script>
</body>

</html>
<?php unset($_SESSION['message']); ?>