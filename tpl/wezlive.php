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
            <section id="projecthead">
                <div class="projectshadow"></div>
                <div class="projectheadimg"  <?php
                $image = 'style = "background-image: url(../images/categorie/performances/'; //rndm background catégori
                $image.= rand(1, 60) . '.jpg)">'; //rndm numero d'image
                echo $image;
                ?></div>
                <a href="#"><div id="navhidebtn"><i class="icon icon-w-burger"></i></div></a>
                <div id="searchbar"><input id="tags" type="text" placeholder="Recherche"><a href="#"><i class="icon icon-w-search"></i></a></div>
                <nav id="navtop">
                    <ul>
                        <a href="#"><li>La boutique</li></a>
                        <a href="#" class="prehome"><li>Le concept</li></a>
                        <a href="#"><li class="button">WEZ'LIVE</li></a>
                        <a href="#"><li class="buttonred">Devenez VIP</li></a>
                    </ul>
                </nav>
                <div class="title"><h2>WEZ'Live</h2></div>

            </section>
            <!-- page content -->
            <a href="#"><div id="navhidebtn"><i class="icon-menu"></i></div></a>
            <div id="searchbar"><input id="tags" type="text" placeholder="Recherche"><a href="#"><i class="icon icon-w-search"></i></a></div>
            <nav id="navtop">
                <ul>
                    <a href="#" class="prehome"><li>Le concept</li></a>
                    <a href="wezlive.php"><li class="button">WEZ'LIVE</li></a>
                    <a href="#"><li class="buttonred">Devenez VIP</li></a>
                </ul>
            </nav>
            <img src="../images/nav/wezlive.png">

            <div id="rightcolumn" class="hidden-xs col-sm-3 col-md-2 col-lg-2">
                <img id="soutiens" src="../images/soutiens.png">

                <div id="partenaire" class="wrapper" >
                    <a href="#"><img src="../images/partenaires.png"></a>
                </div>
                <div id="topartiste" class="wrapper" >
                    <h3>artistes similaires</h3>
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        $artiste = '<div class = "artiste">
                            <a href = "profil.php">
                            <div class = "picture"><img ></div>
                            <div class = "info">
                            <span class = "firstname"></span><span class = "lastname"></span>
                            <div>
                            <i class = "icon icon-w-visuel"></i><span class = "upload">' . rand(1, 105) . '</span>
                            </div>
                            </div>
                            </a>
                            </div>';
                        echo $artiste;
                    }
                    ?>

                </div>
                <div id="topcrea" class="wrapper" >
                    <h3>vous les aimez</h3>
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        $artiste = '<div class = "artiste">
                            <a href = "profil.php">
                            <div class = "picture"><img ></div>
                            <div class = "info">
                            <span class = "firstname"></span><span class = "lastname"></span>
                            <div>
                            <i class = "icon icon-w-view"></i><span class = "upload">' . rand(1, 105) . '</span>
                            </div>
                            </div>
                            </a>
                            </div>';
                        echo $artiste;
                    }
                    ?>

                </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </section>
    </body>
</html>
