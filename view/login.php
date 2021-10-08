<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Motors</title>
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
            <form class="login-form" action="javascript:void(0);">
                <h1>Login</h1>
                <div class="form-input-material">
                    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
                    <label for="username">Username</label>
                </div>
                <div class="form-input-material">
                    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary btn-ghost">Login</button>
            </form>
            <!-- <form class="login" action="/login-page.php">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value="John"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value="Doe"><br><br>
                <input type="submit" value="Submit">
            </form> -->
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>