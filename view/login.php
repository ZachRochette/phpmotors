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
            <form method="post" action="/phpmotors/accounts/index.php" class="login">
                <h2>Log In</h2>
                <label id="a" for="clientEmail">Email:</label>
                <input name="clientEmail" id="clientEmail" type="email" placeholder="Example@example.com" <?php if (isset($clientEmail)) {
                                                                                                                echo "value='$clientEmail'";
                                                                                                            }  ?> required>
                <label for="clientPassword">Password:</label>
                <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                <input type="password" name="clientPassword" id="clientPassword" placeholder="Password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                <button>Login</button>
                <input type="hidden" name="action" value="Login">
                <p>Not a member yet?</p>
                <a class="register_btn" href="/phpmotors/accounts?action=register">Create Account</a>
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>