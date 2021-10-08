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
            <form class="login">
                <h2>Log In</h2>
                <label id="input" for="clientEmail">Email:</label>
                <input name="clientEmail" id="clientEmail" type="text" placeholder="Username" required>
                <label id="input" for="clientPassword">Password:</label>
                <input name="clientPassword" id="clientPassword" type="password" placeholder="Password" required>
                <button>Login</button>
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