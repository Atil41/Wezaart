<?php
//if (isset($_GET['logged']) || !empty($_GET['logged'])) {
//    $user = $_GET['logged'];
//    $pass = $_GET['logged'];
//}

if (isset($_POST['email']) || isset($_POST['password'])) {
    setcookie("cookiemail", $_POST['email'], time() + 60 * 60 * 24 * 100, "/");
    setcookie("cookiepass", $_POST['password'], time() + 60 * 60 * 24 * 100, "/");
}
if (isset($_GET['logout'])) {
    unset($_COOKIE['cookiemail']);
    unset($_COOKIE['cookiepass']);
    setcookie('cookiemail', null, -1, '/');
    setcookie('cookiepass', null, -1, '/');
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include_once 'head.php'; ?>
    <body>
        <?php include_once 'header.php'; ?>
        <section id="content" class="col-sm-6 col-md-12 nopadding navhide notransition">
            <?php include_once 'home.php'; ?>
            <?php include_once 'footer.php'; ?>
        </section>
    </body>
</html>
