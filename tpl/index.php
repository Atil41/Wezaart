<?php
if (isset($_GET['logged']) || !empty($_GET['logged'])) {
    $user = $_GET['logged'];
    $pass = $_GET['logged'];

    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

        /* Set cookie to last 1 year */
        setcookie('username', $_POST['username'], time() + 365 * 24 * 3600, null, null, false, true);
        setcookie('password', md5($_POST['password']), time() + 365 * 24 * 3600, null, null, false, true);

        header('Location: index.php');
    } else {
        echo 'Username/Password Invalid';
    }
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
