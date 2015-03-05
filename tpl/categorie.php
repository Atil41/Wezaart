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
            <section id="categoriehead">
                <div class="categorieshadow"></div>
                <div class="categorieheadimg"  <?php
                if (isset($_GET['type']) || !empty($_GET['type'])) {
                    $image = 'style = "background-image: url(../images/categorie/' . $_GET['type'] . '/'; //rndm background catégorie
                    if (isset($_GET['subtype']) || !empty($_GET['subtype'])) {
                        $image.= str_replace(' ', '_', $_GET['subtype']) . '/'; //sous catégorie?
                        $image.= rand(1, 20) . '.jpg)">'; //rndm numero d'image
                        echo $image;
                    } else {
                        $image.= rand(1, 60) . '.jpg)">'; //rndm numero d'image
                        echo $image;
                    }
                } else {
                    $randomW = rand(800, 1200);
                    $randomH = rand(200, 300);
                    echo 'style = "background-image: url("http://lorempixel.com/' . $randomW . '/' . $randomH . '/");';
                }
                ?></div>
                <a href="#"><div id="navhidebtn"><i class="icon icon-w-burger"></i></div></a>
                <div id="searchbar"><input id="tags" type="text" placeholder="Recherche"><a href="#"><i class="icon icon-w-search"></i></a></div>
                <nav id="navtop">
                    <ul>
                        <a href="#"><li>La boutique</li></a>
                        <a href="#" class="prehome"><li>Le concept</li></a>
                        <a href="wezlive.php"><li class="button">WEZ'LIVE</li></a>
                        <a href="#"><li class="buttonred">Devenez VIP</li></a>
                    </ul>
                </nav>
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
                    <button class="sort" data-sort="date:desc">Date</button>
                    <button class="sort" data-sort="popularity:desc">Popularité</button>
                    <button class="sort" data-sort="nom:asc">Nom</button>
                </div>
            </section>
            <!-- page content -->
            <a href="#"><div id="navhidebtn"><i class="icon-menu"></i></div></a>
            <div id="searchbar"><input id="tags" type="text" placeholder="Recherche"><a href="#"><i class="icon icon-w-searchs"></i></a></div>
            <nav id="navtop">
                <ul>
                    <a href="#" class="prehome"><li>Le concept</li></a>
                    <a href="#"><li class="button">WEZ'LIVE</li></a>
                    <a href="#"><li class="buttonred">Devenez VIP</li></a>
                </ul>
            </nav>
            <div id="wezuploadedwrap" class="col-xs-12 col-sm-9 col-md-10 col-lg-10">

                <div id="Container" class="wrapper" >
                    <?php
                    for ($i = 1; $i <= 20; $i++) {
                        $randomW = rand(200, 300);
                        $randomH = rand(200, 300);
                        $myLine = rand(1, 105);
                        $file = new SplFileObject('../data/titre.txt');
                        //this is zero based so need to subtract 1
                        $file->seek($myLine - 1);
                        if (isset($_GET['type']) || !empty($_GET['type'])) {
                            $datapopularity = rand(1, 100);
                            $datadate = rand(1, 100);
                            $image = '<div class="wezuploaded mix col-xs-12 col-sm-6 col-md-3 col-lg-3" category="' . rand(1, 3) . '"'; //rndm categorie
                            $image.='data-popularity = "' . $datapopularity . '"'; //rndm popularity
                            $image.='data-nom = "' . rand(1, 100) . '"'; //rndm nom
                            $image.='data-date = "' . $datadate . '">'; //rndm date
                            $image.='<a class = "name" href="project.php?type=' . str_replace(' ', '_', $_GET['type']); //recupere categorie projet url
                            if (isset($_GET['subtype']) || !empty($_GET['subtype'])) {
                                $image.= '&subtype=' . str_replace(' ', '_', $_GET['subtype']); //recupere sous-categorie projet url
                            }
                            $image.= '&picture=../images/categorie/' . $_GET['type'] . '/'; //recupere categorie de image projet dans url
                            if (isset($_GET['subtype']) || !empty($_GET['subtype'])) {
                                $image.= str_replace(' ', '_', $_GET['subtype']) . '/'; //sous catégorie?
                                $image.= $i . '.jpg'; // numero d'image i
                            } else {
                                $rdmimage = rand(1, 60);
                                $image.= $rdmimage . '.jpg'; // numero d'image i
                            }
                            $image.= '&title=' . str_replace(' ', '_', $file->current()); //recupere titre projet url
                            $image.='" style = "background-image: url(../images/categorie/' . $_GET['type'] . '/'; // catégorie?
                            if (isset($_GET['subtype']) || !empty($_GET['subtype'])) {
                                $image.= str_replace(' ', '_', $_GET['subtype']) . '/'; //sous catégorie?
                                $image.= $i . '.jpg)">'; // numero d'image i
                                $image.='<div class = "titre"><span>' . $file->current() . '<br>' . $datapopularity . ' </span></div></a></div>'; //rndm titre </span><span>
                                echo $image;
                            } else {
                                $image.= $rdmimage . '.jpg)">'; //rndm numero d'image
                                $image.='<div class = "titre"><span>' . $file->current() . '<br>' . $datapopularity . '</span></div></a></div>'; //rndm titre
                                echo $image;
                            }
                        } else {
                            echo '<div class = "wezuploaded mix col-xs-12 col-sm-6 col-md-3 col-lg-3" category = "' . rand(1, 3) . '" data-popularity = "' . rand(1, 100) . '" data-nom = "' . rand(1, 100) . '" data-date = "' . rand(1, 100) . '"><a class = "name" href = "#titre' . $file->current() . '" style = "background-image: url(http://lorempixel.com/' . $randomW . '/' . $randomH . '/)"><div class = "titre"><span>' . $file->current() . '</span></div></a></div>';
                        }
                    }
                    ?>
                </div>
            </div>
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
