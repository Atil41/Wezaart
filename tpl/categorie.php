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
        <section id="content" class="col-sm-6 col-md-12 nopadding navhide notransition">
            <section id="profilhead">

                <div class="title">
                    <?php
                    if (isset($_GET['type']) and ! empty($_GET['type'])) {
                        echo '<h1>' . str_replace('_', ' ', $_GET['type']) . '</h1>';
                        if (isset($_GET['subtype']) and ! empty($_GET['subtype'])) {
                            echo '<h2>' . str_replace('_', ' ', $_GET['subtype']) . '</h2>';
                        }
                    } else {
                        $myLine = rand(1, 115);
                        $file = new SplFileObject('../data/nom.txt');
                        //this is zero based so need to subtract 1
                        $file->seek($myLine - 1);
                        echo '<h1>' . $file->current() . '</h1>';
                    }
                    ?>

                </div>

                <div id="filter">
                    <p>Trier par :</p>
                    <button class="sort" data-sort="popularity:asc">Popularité</button>
                    <button class="sort" data-sort="nom:asc">Nom</button>
                    <button class="sort" data-sort="date:asc">Date</button>
                </div>
            </section>
            <!-- page content -->
            <a href="#"><div id="navhidebtn"><i class="icon-menu"></i></div></a>
            <div id="searchbar"><input type="text" placeholder="Recherche"><a href="#"><i class="icon-search"></i></a></div>
            <nav id="navtop">
                <ul>
                    <a href="#" class="prehome"><li>Le concept</li></a>
                    <a href="#"><li class="button">WEZ'LIVE</li></a>
                    <a href="#"><li class="buttonred">Devenez VIP</li></a>
                </ul>
            </nav>
            <div id="wezuploadedwrap" class="col-md-12">

                <div id="Container" class="wrapper" >
                    <?php
                    for ($i = 1; $i <= 20; $i++) {
                        $myLine = rand(1, 105);
                        $file = new SplFileObject('../data/titre.txt');
                        //this is zero based so need to subtract 1
                        $file->seek($myLine - 1);
                        if (isset($_GET['type']) || !empty($_GET['type'])) {
                            echo '<div class = "wezuploaded mix category-' . rand(1, 3) . '" data-popularity = "' . rand(1, 100) . '" data-nom = "' . rand(1, 100) . '" data-date = "' . rand(1, 100) . '"><a class = "name" href = "#titre' . $file->current() . '" style = "background-image: url(../images/categorie/' . $_GET['type'] . '/lorempixel-' . $i . '.jpg)"><div class = "titre"><span>' . $file->current() . '</span></div></a></div>';
                        } else {
                            $randomW = rand(170, 220);
                            $randomH = rand(170, 220);
                            echo '<div class = "wezuploaded mix category-' . rand(1, 3) . '" data-popularity = "' . rand(1, 100) . '" data-nom = "' . rand(1, 100) . '" data-date = "' . rand(1, 100) . '"><a class = "name" href = "#titre' . $file->current() . '" style = "background-image: url(http://lorempixel.com/' . $randomW . '/' . $randomH . '/)"><div class = "titre"><span>' . $file->current() . '</span></div></a></div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <?php include_once 'prehome.php' ?>

            <?php include_once 'footer.php'; ?>
        </section>
    </body>
</html>