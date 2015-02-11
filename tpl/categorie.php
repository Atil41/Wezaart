<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Wezaart</title>
        <link rel="stylesheet" href="../css/screen.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="../js/jquery-1.9.1.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.mixitup.min.js"></script>
        <script src="../js/custom.js"></script>


        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
        <!--FONTELLO-->
        <!--[if lt IE 9]>
        <script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        <link rel="stylesheet" href="../css/sliderskin.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/fontello/fontello.css">
        <link rel="stylesheet" href="../css/fontello/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello/fontello-ie7.css"><![endif]-->
        <!--/FONTELLO-->
        <!--Slider-->
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="../css/owl.carousel.css">

        <!-- Default Theme -->
        <link rel="stylesheet" href="../css/owl.theme.css">
        <link rel="stylesheet" href="../css/owl.transitions.css">

        <!-- Include js plugin -->
        <script src="../js/owl.carousel.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <!--/Slider-->
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section id="content" class="col-sm-6 col-md-12 nopadding navhide notransition">
            <section id="profilhead">

                <h1>
                    <?php
                    if (isset($_GET['type']) and ! empty($_GET['type'])) {
                        echo $_GET['type'];
                    } else {
                        $myLine = rand(1, 115);
                        $file = new SplFileObject('../data/nom.txt');
                        //this is zero based so need to subtract 1
                        $file->seek($myLine - 1);
                        echo $file->current();
                    }
                    ?>
                </h1>
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
                    <a href="#"><li>Le concept</li></a>
                    <a href="#"><li class="button">WEZ'LIVE</li></a>
                    <a href="#"><li class="buttonred">Premium</li></a>
                </ul>
            </nav>
            <div id="wezuploadedwrap" class="col-md-12">

                <div id="Container" class="wrapper" >
                    <?php
                    for ($i = 1; $i <= 20; $i++) {
                        $randomW = rand(170, 220);
                        $randomH = rand(170, 220);
                        $myLine = rand(1, 105);
                        $file = new SplFileObject('../data/titre.txt');
                        //this is zero based so need to subtract 1
                        $file->seek($myLine - 1);
                        echo '<div class = "wezuploaded mix category-' . rand(1, 3) . '" data-popularity = "' . rand(1, 100) . '" data-nom = "' . rand(1, 100) . '" data-date = "' . rand(1, 100) . '" data-date = "' . rand(1, 100) . '"><a class = "name" href = "#" style = "background-image: url(http://lorempixel.com/' . $randomW . '/' . $randomH . '/)"><div class = "titre"><span>' . $file->current() . '</span></div></a></div>';
                    }
                    ?>
                </div>
            </div>


            <?php include_once 'footer.php'; ?>
        </section>
    </body>
</html>