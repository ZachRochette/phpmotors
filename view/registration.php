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
            <form method="post" action="/phpmotors/accounts/index.php" class="register">
                <h2>Log In</h2>
                <label for="clientFirstname">First Name:</label>
                <input name="clientFirstname" id="clientFirstname" type="text" placeholder="First Name" <?php if (isset($clientFirstname)) {
                                                                                                            echo "value='$clientFirstname'";
                                                                                                        }  ?> required>
                <label id="b" for="clientLastname">Last Name:</label>
                <input name="clientLastname" id="lname" type="text" placeholder="Last Name" <?php if (isset($clientLastname)) {
                                                                                                echo "value='$clientLastname'";
                                                                                            }  ?>required>
                <label id="c" for="clientEmail">Email:</label>
                <input name="clientEmail" id="email" type="email" placeholder="Email Address" <?php if (isset($clientEmail)) {
                                                                                                    echo "value='$clientEmail'";
                                                                                                }  ?>required>
                <label for="clientPassword">Password:</label>
                <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                <input type="submit" name="submit" id="regbtn" value="Register Now">
                <input type="hidden" name="action" value="register">
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>