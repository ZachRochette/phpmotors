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
            <form class="register">
                <h2>Log In</h2>
                <input name="clientFirstname" id="clientFirstname" type="text" placeholder="First Name" require>
                <input name="clientLastname" id="clientLastname" type="text" placeholder="Last Name" require>
                <input name="clientEmail" id="clientEmail" type="text" placeholder="Email Address" require>
                <input name="clientPassword" id="clientPassword" type="password" placeholder="Password" require>
                <button>Create Account</button>
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>