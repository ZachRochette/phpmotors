<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Motors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen">
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="top-header">
                <img src="images/site/logo.png" alt="PHP Motors logo" id="logo">
                <a href="/accounts?action=login-page" title="Login or Register with PHP Motors" id="acc">My Account</a>
            </div>
        </header>
        <nav>
            <ul>
                <li> <a href="/phpmotors/" title="PHP Motors home page">Home</a></li>
                <li> <a href="#" title="classic car page">Classic</a></li>
                <li> <a href="#" title="sports cars">Sports</a></li>
                <li> <a href="#" title="sports utility vehicles">SUV</a></li>
                <li> <a href="#" title="trucks">Trucks</a></li>
                <li> <a href="#" title="used cars">Used</a></li>
            </ul>
        </nav>
        <main>
            <h1>Content Title Here</h1>
        </main>
        <hr>
        <footer>
            <p>&copy; PHP Motors, All rights reserved.</p>
            <p>Images are belieaaved to be "Fair Use". Notify the author if not and they will be removed.</p>
            <p>Last Updated: <?php echo date('j F, Y', getlastmod()); ?></p>
        </footer>
    </div>
</body>

</html>