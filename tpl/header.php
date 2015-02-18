<header id="head" class="col-xs-6 col-md-2">
    <div id="sidebar">
        <div id="logo"><a href="../index.php"><img src="../images/logo wezaart blanc-new.png" alt="logo"/></a></div>
        <div id="nav">
            <ul>
                <li><a href="categorie.php?type=performances"><i class="icon-music"></i>Performances</a>
                    <ul>
                        <li><a href="categorie.php?type=performances&subtype=danse">Danse</a></li>
                        <li><a href="categorie.php?type=performances&subtype=Art_Vivant">Art Vivant</a></li>
                        <li><a href="categorie.php?type=performances&subtype=expression">Expression</a></li>
                        <li><a href="categorie.php?type=performances">...</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=arts_plastiques"><i class="icon-video"></i>Arts Plastiques</a>
                    <ul>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=peinture">Peinture</a></li>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=sculpture">Sculpture</a></li>
                        <li><a href="categorie.php?type=arts_plastiques&subtype=illustration">Illustration</a></li>
                        <li><a href="categorie.php?type=arts_plastiques">...</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=arts_numériques"><i class="icon-picture"></i>Arts numériques</a>
                    <ul>
                        <li><a href="categorie.php?type=arts_numériques&subtype=photographie">Photographie</a></li>
                        <li><a href="categorie.php?type=arts_numériques&subtype=2D_numérique">2D Numérique</a></li>
                        <li><a href="categorie.php?type=arts_numériques&subtype=3D_numérique">3D Numérique</a></li>
                        <li><a href="categorie.php?type=arts_numériques">...</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=sons"><i class="icon-github"></i>Sons</a>
                    <ul>
                        <li><a href="categorie.php?type=sons&subtype=musique">Musique</a></li>
                        <li><a href="categorie.php?type=sons&subtype=instrumental">Instrumental</a></li>
                        <li><a href="categorie.php?type=sons&subtype=voix">Voix</a></li>
                        <li><a href="categorie.php?type=sons">...</a></li>
                    </ul>
                </li>
                <li><a href="categorie.php?type=récits"><i class="icon-feather"></i>Récits</a>
                    <ul>
                        <li><a href="categorie.php?type=récits&subtype=cinéma">Cinéma</a></li>
                        <li><a href="categorie.php?type=récits&subtype=littérature">Littérature</a></li>
                        <li><a href="categorie.php?type=récits&subtype=bande_dessinée">Bande Dessinée</a></li>
                        <li><a href="categorie.php?type=récits">...</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php if (((!isset($_COOKIE['cookiemail'])) && (!isset($_COOKIE['cookiepass']))) && ((empty($_POST['cookiemail'])) && (empty($_POST['cookiepass'])))): ?>
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
						
                        <ol>
                            <li>
                                <input id="email" name="email" type="email" placeholder="Adresse Email" required="">
                            </li>
                            <li>
                                <input id="password" name="password" type="password" placeholder="Mot de passe" required="" >
                        </ol>
						
						<div id="souvenir">
							<div id="souvleft"">
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
        else :
            if ((isset($_COOKIE['cookiemail'])) && (isset($_COOKIE['cookiepass']))) {
                echo $_COOKIE['cookiemail'] . " " . $_COOKIE['cookiepass'];
            }
            if ((isset($_POST['cookiemail'])) && (isset($_POST['cookiepass']))) {
                echo $_POST['cookiemail'] . " " . $_POST['cookiepass'];
            }
            ?>
            <a href="<?php
            echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            if (!isset($_GET) || empty($_GET)) {
                echo "?";
            } else {
                echo '&';
            }
            echo 'logout';
            ?>"><button>logout</button></a>
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
