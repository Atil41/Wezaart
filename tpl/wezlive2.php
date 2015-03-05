<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count'] ++;
}
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
        <section id="content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding navhide notransition"><!--//all 12 col-->
            <img src="../images/nav/wezlive.png">
            <?php include_once 'footer.php'; ?>
        </section>
    </body>
</html>
