<div id="top-header">
    <img src="/phpmotors/images/site/logo.png" alt="PHP Motors logo" id="logo">
    <?php if ($_SESSION['loggedin']) {
        echo "<a href='/phpmotors/accounts/index.php?action=" . urlencode('admin') . "' title='Admin Page' id='acc'>Welcome ", $_SESSION['clientData']['clientFirstname'], ". $logout</a>";
    } else {
        echo "<a href='/phpmotors/accounts?action=login' title='Login or Register with PHP Motors' id='acc'>My Account</a>";
    } ?>
    <!-- <a href="/phpmotors/accounts?action=login" title="Login or Register with PHP Motors" id="acc">My Account</a> -->
</div>