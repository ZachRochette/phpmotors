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
                <label id="a" for="clientFirstname">First Name:</label>
                <input name="clientFirstname" id="fname" type="text" placeholder="First Name">
                <label id="b" for="clientLastname">Last Name:</label>
                <input name="clientLastname" id="lname" type="text" placeholder="Last Name">
                <label id="c" for="clientEmail">Email:</label>
                <input name="clientEmail" id="email" type="email" placeholder="Email Address">
                <label id="d" for="clientPassword">Password:</label>
                <input name="clientPassword" id="password" type="password" placeholder="Password">
                <input type="submit" name="submit" id="regbtn" value="Register">
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