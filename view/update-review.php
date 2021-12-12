<?php
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
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
            <h1>Edit Post</h1>
            <p>
                Please edit your post.
            </p>
            <?php
            if (isset($message)) {
                echo $message;
            } ?>
            <form action="/reviews/index.php" method="POST" <?php if (!$_SESSION['loggedin']) {
                                                                echo "hidden";
                                                            } ?>>
                <label>Name as it appears</label>
                <br>
                <input name="clientname" id="clientname" type="text" <?php echo 'value="' . substr($review['clientFirstname'], 0, 1) . ". " . $review['clientLastname'] . '"'; ?> readonly>
                <br>
                <br>
                <label>Review posted on</label>
                <br>
                <input name="date" id="date" type="text" <?php echo 'value="' . $review['reviewDate'] . '"'; ?> readonly>
                <br>
                <br>
                <label>Review</label>
                <br>
                <textarea id="review" name="editReview" rows="4" cols="50" required><?php echo $review['reviewText'];  ?></textarea>
                <br>
                <input type="submit" name="submit" id="regbtn" value="Update Review">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="editReview">
                <input type="hidden" name="review" <?php echo 'value="' . $reviewId . '"' ?>>
            </form>
        </main>
        <hr>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>
<?php unset($_SESSION['message']); ?>