
<section id="slider">

    <div  id="owl-slide" class="owl-carousel owl-theme">
        <div class="item">
            <img  src="../images/home/01.jpg" />
        </div>
        <div  class="item">
            <img  src="../images/home/02.jpg" />
        </div>
        <div  class="item">
            <img src="../images/home/03.jpg" />
        </div>
        <div  class="item">
            <img src="../images/home/04.jpg" />
        </div>
    </div>

</section>
<!-- page content -->
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
<div id="topartiste" class="col-md-12">
    <div class="title" >
        <h2>Ces artistes sont sortis de l'ombre</h2>
    </div>
    <div id="owl-artistes" class="wrapper" >
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $myLine = $i;
            $file = new SplFileObject('../data/bio.txt');
            //this is zero based so need to subtract 1
            $file->seek($myLine - 1);
            $artiste = '<div class="artiste">
            <a href="#"><img></a>
            <a class="name" href="#"><span class="firstname"></span><span class="lastname"></span></a>
            <span>' . $file->current() . '</span>
        <div class = "artistebtn">
        <a href = "#"><div class = "button"><i class = "icon icon-w-like"></i></div></a>
        <a href = "#"><div class = "button"><div><i class = "icon icon-w-more"></i></div></div></a>
        <a href = "#"><div class = "button"><i class = "icon icon-w-share"></i></div></a>
        </div>
        </div>';
            echo $artiste;
        }
        ?>

    </div>
</div>
<div class="col-md-12 presentation">
    <div id="sectiongauche">
        <div class="textgauche">
            <div class="title">
                <span class="h2">
                    La section<br/>
                    <strong>PERFORMANCE</strong>
                </span>
                <a href="#"><div class="decouvrir">DÉCOUVRIR</div></a>
            </div>

            <div class="textemusicale">
                <p>Découvrez des artistes hors du commun qui font de leur corps leur principal outil de travail. Spectacles de rue, Danses, Théâtre, Cirque, ou Body painting. </p>
                <p>Ici, les artistes ont regroupés des oeuvres exceptionnelles pleines de mouvement et d’émotion!</p>

            </div>
        </div>
        <div class = "imagemusique">
            <div class = "cercleinfos">
                <i class = "icon icon-w-info"></i>
            </div>
            <div class = "textinfos">
                <img src="../images/img-cat-perfo-hover.png">
            </div>
        </div>
        <div class = "clear"></div>
    </div>
    <div id = "sectiondroite">
        <div class = "textdroite">
            <div class = "title">
                <span class = "h2">
                    La section<br/>
                    <strong>Arts Plastiques</strong>
                </span>

                <a href = "#"><div class = "decouvrir">DÉCOUVRIR</div></a>
            </div>

            <div class = "textevideo">
                <p>Des oeuvres façonnées par des arts ancestraux. Peinture, sculpture ou tout autre art manuel, visité et revisité par des artistes étonnants et fascinant!</p>
                <p>Ici, venez découvrir des oeuvres hautes en couleurs et en formes!</p>

            </div>
        </div>

        <div class="imagevideo">
            <div class="cercleinfos">
                <i class="icon icon-w-info"></i>
            </div>

            <div class="textinfos">
                <img src="../images/img-cat-video-hover.png">
            </div>
        </div>

        <div class="clear"></div>
    </div>
    <div id="sectiongauche">
        <div class="textgauche">
            <div class="title">
                <span class="h2">
                    La section<br/>
                    <strong>Arts Numériques</strong>
                </span>
                <a href="#"><div class="decouvrir">DÉCOUVRIR</div></a>
            </div>
            <div class="textedesign">
                <p>Ce n’est pas l’appareil qui fait l’oeuvre. Photographie, digital painting, modelage numérique, les artistes font de cette section un recueil d’étonnement et de découverte!</p>
                <p>Ici, les artistes ont dompté la machine et en font un univers merveilleux!</p>
            </div>
        </div>
        <div class = "imagedesign">
            <div class = "cercleinfos">
                <i class = "icon icon-w-info"></i>
            </div>
            <div class = "textinfos">
                <img src="../images/img-cat-design-hover.png">
            </div>
        </div>
        <div class = "clear"></div>
    </div>
    <div id = "sectiondroite">
        <div class = "textdroite">
            <div class = "title">
                <span class = "h2">
                    La section<br/>
                    <strong>Sons</strong>
                </span>

                <a href = "#"><div class = "decouvrir">DÉCOUVRIR</div></a>
            </div>
            <div class = "textehappening">
                <p>Faîtes de vos oreilles un récepteur de magie! Les artistes ont fait de cette section un véritable havre de délice auditif. Musique, chants, bruitages, instrumentaux!</p>
                <p>Ici, venez découvrir des sons que vous n’entendrez nulle part ailleurs!</p>
            </div>
        </div>

        <div class="imagehappening">
            <div class="cercleinfos">
                <i class="icon icon-w-info"></i>
            </div>

            <div class="textinfos">
                <img src="../images/img-cat-happening-hover.png">
            </div>
        </div>

        <div class="clear"></div>
    </div>
    <div id="sectiongauche">
        <div class="textgauche">
            <div class="title">
                <span class="h2">
                    La section<br/>
                    <strong>Récits</strong>
                </span>
                <a href="#"><div class="decouvrir">DÉCOUVRIR</div></a>
            </div>
            <div class="textelettres">
                <p>Entrez dans des histoires extraordinaires, contés de manières diverses et parfois surprenantes! Du cinéma, de littérature et même de la bande dessinée!</p>
                <p>Ici, laissez-vous porter par des récits d’artistes rêveurs, engagés ou philosophes!</p>
            </div>
        </div>


        <div class = "imagelettres">
            <div class = "cercleinfos">
                <i class = "icon icon-w-info"></i>
            </div>

            <div class = "textinfos">
                <img src="../images/img-cat-lettres-hover.png">
            </div>
        </div>
        <div class = "clear"></div>
    </div>
</div>
