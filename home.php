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
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; ?>
        </nav>
        <main>
            <h1>Welcome to PHP Motors!</h1>
            <p>DMC Delorean</p>
            <p>3 Cup holders</p>
            <p>Superman doors</p>
            <p>Fuzzy dice!</p>
            <input class="button" alt="Own Today Button" type="image" src="/phpmotors/images/site/own_today.png" />
            <img src="/phpmotors/images/delorean.jpg" alt="Delorean image" id="delorean_image">
            <h2 id="upgrades">Delorean Upgrades</h2>
            <div class="upgrades">
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor image">
                <p>Flux Capacitor</p>
                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals image">
                <p>Flame Decals</p>
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers image">
                <p>Bumper Stickers</p>
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps image">
                <p>Hub Caps</p>
            </div>
            <h2 id="reviews">DMC Delorean Reviews</h2>
            <div>
                <ul>
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!" (5/5)</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80;s livin and I love it!" (5/5)</li>
                </ul>
            </div>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>