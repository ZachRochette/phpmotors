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
    <title><?php if (isset($clientInfo['clientFirstname']) && isset($clientInfo['clientLastname'])) {
                echo "Update $clientInfo[clientFirstname] $clientInfo[clientLastname]";
            } elseif (isset($clientFirstname) && isset($clientLastname)) {
                echo "Update $clientFirstname $clientLastname";
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
            <h1><?php if (isset($clientInfo['clientFirstname']) && isset($clientInfo['clientLastname'])) {
                    echo "Update $clientInfo[clientFirstname] $clientInfo[clientLastname]";
                } elseif (isset($clientFirstname) && isset($clientLastname)) {
                    echo "Update $clientFirstname $clientLastname";
                } ?></h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <h1 style="text-align: center;">Update your account or change your password.</h1>
            <form method="post" action="/phpmotors/accounts/index.php" class="register">
                <h1>Update Account</h1>
                <label for="clientFirstname">First Name:</label>
                <input name="clientFirstname" id="clientFirstname" type="text" placeholder="First Name" <?php if (isset($clientFirstname)) {
                                                                                                            echo $clientFirstname;
                                                                                                        } elseif (isset($clientInfo['clientFirstname'])) {
                                                                                                            echo $invInfo['clientFirstname'];
                                                                                                        } ?> required>
                <label id="b" for="clientLastname">Last Name:</label>
                <input name="clientLastname" id="lname" type="text" placeholder="Last Name" <?php if (isset($clientLastname)) {
                                                                                                echo $clientLastname;
                                                                                            } elseif (isset($clientInfo['clientLastname'])) {
                                                                                                echo $invInfo['clientLastname'];
                                                                                            } ?> required>
                <label id="c" for="clientEmail">Email:</label>
                <input name="clientEmail" id="email" type="email" placeholder="Email Address" <?php if (isset($clientEmail)) {
                                                                                                    echo $clientEmail;
                                                                                                } elseif (isset($clientInfo['clientEmail'])) {
                                                                                                    echo $invInfo['clientEmail'];
                                                                                                } ?> required>
                <input type="submit" name="submit" id="regbtn" value="Update Now">
                <input type="hidden" name="action" value="updateAccount">
                <input type="hidden" name="invId" value="<?php if (isset($clientInfo['clientId'])) {
                                                                echo $clientInfo['clientId'];
                                                            } elseif (isset($clientId)) {
                                                                echo $clientId;
                                                            } ?>">
            </form>

            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form method="post" action="/phpmotors/accounts/index.php" class="register">
                <h1>Change Password</h1>
                <p>Entering a new password will change your curent one.</p>
                <label for="clientPassword">Password:</label>
                <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                <input type="submit" name="submit" id="regbtn" value="Update Now">
                <input type="hidden" name="action" value="updatePassword">
                <input type="hidden" name="clientId" value="<?php if (isset($clientInfo['clientId'])) {
                                                                echo $clientInfo['clientId'];
                                                            } elseif (isset($clientId)) {
                                                                echo $clientId;
                                                            } ?>">
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>