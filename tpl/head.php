<?php /* Code à insérer dans le haut de la page */

if(isset($_POST['remember'])){  
  setcookie("cookiemail", $_POST['login'], time()+60*60*24*100, "/");  
  setcookie("cookiepass", $_POST['password'], time()+60*60*24*100, "/");  
} else {
  setcookie("cookiemail","" , NULL, "/");  
  setcookie("cookiepass","" , NULL, "/");  
}
?>
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

    <link rel="stylesheet" type="text/css" href="../css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../css/intro.css"/>
    <link rel="stylesheet" type="text/css" href="../css/superslides.css"/>
    <script src="../jsintro/jquery.superslides.min.js"></script>
    <script src="../jsintro/onepage-scroll.js"></script>
    <script src="../jsintro/main.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
    <!--FONTELLO-->
    <!--[if lt IE 9]>
    <script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <link rel="stylesheet" href="../css/magnific-popup.css">
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
    <script src="../js/jquery.magnific-popup.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!--/Slider-->
</head>