<header id="head" class="col-xs-4 col-sm-3 col-md-2 col-lg-2 ">
    <div id="sidebar">
        <div id="logo"><a href="../index.php"><img src="../images/logo wezaart blanc-new.png" alt="logo"/></a></div>
        <div id="nav">
            <ul>
                <li><a href="categorie.php?type=performances"><i class="icon icon-w-happening"></i>Performances</a>
                    <ul>
                        <li><a href="categorie.php?type=performances&subtype=danse">Danse</a></li>
                        <li><a href="categorie.php?type=performances&subtype=Art_Vivant">Art Vivant</a></li>
                        <li><a href="categorie.php?type=performances&subtype=expression">Expression</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=arts_plastiques"><i class="icon icon-w-concept"></i>Arts Plastiques</a>
                    <ul>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=image">Image</a></li>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=volume">Volume</a></li>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=hybride">Hybride</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=arts_numériques"><i class="icon icon-w-design"></i>Arts numériques</a>
                    <ul>
                        <li><a href="categorie.php?type=arts_numériques&subtype=photographie">Photographie</a></li>
                        <li><a href="categorie.php?type=arts_numériques&subtype=2D_numérique">2D Numérique</a></li>
                        <li><a href="categorie.php?type=arts_numériques&subtype=3D_numérique">3D Numérique</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=sons"><i class="icon icon-picto-sound"></i>Sons</a>
                    <ul>
                        <li><a href="categorie.php?type=sons&subtype=musique">Musique</a></li>
                        <li><a href="categorie.php?type=sons&subtype=instrumental">Instrumental</a></li>
                        <li><a href="categorie.php?type=sons&subtype=voix">Voix</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=récits"><i class="icon icon-w-write"></i>Récits</a>
                    <ul>
                        <li><a href="categorie.php?type=récits&subtype=cinéma">Cinéma</a></li>
                        <li><a href="categorie.php?type=récits&subtype=littérature">Littérature</a></li>
                        <li><a href="categorie.php?type=récits&subtype=hybride">Hybride</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php if (((isset($_COOKIE['cookiemail'])) && (isset($_COOKIE['cookiepass']))) || ((!empty($_POST['email'])) && (!empty($_POST['password'])))): ?>

            <div class="userconnect">
                <a href="profil.php?firstname=Élisa&lastname=Breton&picture=../images/artiste1.png"><img src="../images/artiste1.png" /></a><br/>
                <a class="name" href="profil.php?firstname=Élisa&lastname=Breton&picture=../images/artiste1.png"><span>Élisa <span>Breton</span></span></a>

                <!--                <div class="userbtn">
                                    <a href="#"><div class="userbutton"><i class="icon-heart-filled"></i></div></a>
                                    <a href="#"><div class="userbutton2"><div><i class="icon-plus"></i></div></div></a>
                                    <a href="#"><div class="userbutton"><i class="icon-share"></i></div></a>
                                </div>-->
                <div class="artistebtn">
                    <a href="#"><div class="button"><i class="icon icon-picto-star"></i></div></a>
                    <a href="#"><div class="button"><div><i class="icon icon-picto-w"></i></div></div></a>
                    <a href="<?php
                    echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    if (!isset($_GET) || empty($_GET)) {
                        echo "?";
                    } else {
                        echo '&';
                    }
                    echo 'logout';
                    ?>"><div class="button"><i class="icon icon-w-settings"></i></div></a>
                </div>
                <div class="moneys">
                    <a href="#"><div class="euros"><div class="iconesmoneys"> GAINS </div><div class="chiffres">3,70€</div></div></a><p></p>
                    <a href="#"><div class="euros"><div class="iconesmoneys"> DONS </div><div class="chiffres">1,20€</div></div></a>
                </div>
                <div class="clear"></div>
            </div>


            <?php
        else :
            ?>
            <div id="profil" class="noFocus">
                <div id="login" class="noFocus">
                    <ul>
                        <a href="#test-form" class="popup-with-form noFocus"><li class="button noFocus">Se connecter</li></a>
                        <a href="#"><li class="button">S'inscrire</li></a>
                    </ul>
                </div>
            </div>
            <form id="test-form" class="white-popup-block mfp-hide" action="<?php "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" method="post">
                <div id="identification">
                    <h1>CONNEXION</h1>

                    <fieldset style="border:0; margin: 0;">
                        <p>
                        <div id="logintwitter"><a id="logotwitter">Se connecter avec Twitter</a></div><br/>
                        <div id="loginfacebook"><a id="logofacebook">Se connecter avec Facebook</a></div>
                        </p>
                        <p><center>OU</center></p>
                        <ol>
                            <li>
                                <input id="email" name="email" type="email" placeholder="Adresse Email" style="background-color:transparent" required="">
                            </li>
                            <li>
                                <input id="password" name="password" type="password" placeholder="Mot de passe" style="background-color:transparent" required="" >
                        </ol>

                        <div id="souvenir">
                            <div id="souvleft">
                                <input name="remember" id="coche1" type="checkbox" <?php
                                if (isset($_COOKIE['cookiemail']) && ($_COOKIE['cookiemail'] != "")) {
                                    echo "checked";
                                }
                                ?> />
                                <label for="coche1">Se souvenir de moi</label>
                            </div>

                            Mot de passe oublié ?

                            <div class="clear"></div>
                        </div>

                        <input type="Submit" value="S'identifier" class="buttonlogin" name="envoie" />
                    </fieldset>
            </form>

        <?php
        endif;


        //echo $_POST['cookiemail'];
        //echo $_COOKIE['cookiemail'];
        ?>

    </div>
    <div id="barres">
        <div id="rose"></div>
        <div id="orange"></div>
        <div id="jaune"></div>
        <div id="vert"></div>
    </div>
</div>
<div id="barres">
    <div id="rose"></div>
    <div id="orange"></div>
    <div id="jaune"></div>
    <div id="vert"></div>
</div>
</div>

</header>
