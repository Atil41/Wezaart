<header id="head" class="col-xs-6 col-md-2">
    <div id="sidebar">
        <div id="logo"><a href="../index.php"><img src="../images/logo wezaart blanc.png" alt="logo"/></a></div>
        <div id="nav">
            <ul>
                <li><a href="categorie.php?type=performances"><i class="icon-music"></i>Performances</a>
                    <ul>
                        <li><a href="categorie.php?type=performances&subtype=danse">Danse</a></li>
                        <li><a href="categorie.php?type=performances&subtype=théâtre">Théâtre</a></li>
                        <li><a href="categorie.php?type=performances&subtype=expression_libre">Expression libre</a></li>
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
        <div id="profil" class="noFocus">
            <div id="login" class="noFocus">
                <ul>
                    <a href="#test-form" class="popup-with-form noFocus"><li class="button noFocus">Se connecter</li></a>
                    <a href="#"><li class="button">S'inscrire</li></a>
                </ul>
            </div>
        </div>
		
<form id="test-form" class="white-popup-block mfp-hide">
	<h1>CONNEXION</h1>
	<fieldset style="border:0;">
		<p>CONNEXION FACEBOOK <br/>CONNEXION TWITTER</p>
		<ol>
			<li>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="Adresse Email" required="" style="background-color:transparent">
			</li>
			<li>
				<label for="password">Mot de passe</label>
				<input id="password" name="password" type="password" placeholder="Mot de passe" required="" style="background-color:transparent">
			</li>
		</ol>
		<input name="remember" type="checkbox" <?php if(isset($_COOKIE['cookiemail']) && ($_COOKIE['cookiemail']!="")) {echo "checked";}  ?> />
		<label>Se souvenir de moi</label>
	</fieldset>
</form>

        <div id="barres">
            <div id="jaune"></div>
            <div id="rouge"></div>
            <div id="violet"></div>
            <div id="bleu"></div>
        </div>
    </div>

</header>