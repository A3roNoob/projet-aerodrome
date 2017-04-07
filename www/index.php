<?php include 'inc/header.php'; ?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="15000" data-pause="hover">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="images/carousel1.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Vivez une experience extraordinaire</h1>
                    <p>Prenez place à bord d'un paramoteur et envolez-vous pour un voyage dont vous vous souviendrez</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Reservez votre vol</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="images/carousel2.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Réveillez l'aventurier en vous</h1>
                    <p>Quoi de mieux que de voler par un beau soleil. Vérifiez dès maintenant si les conditions météo permettent de voler</p>
                    <p><a class="btn btn-lg btn-primary" href="#actuelle" role="button">Voir la météo</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="images/carousel3.JPG">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Dominez les airs</h1>
                    <p>Défiez les cieux et découvrez-vous une nouvelle passion. N'attendez plus !</p>
                    <p><a class="btn btn-lg btn-primary" href="#about" role="button">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <div class="row featurette wow fadeInLeft" data-wow-duration="1.5s" id="actuelle">
        <div class="col-md-7">
            <h2 class="featurette-heading">Météo actuelle</h2>
            <?php include 'inc/actuelle.php'; ?>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette wow fadeInLeft" data-wow-duration="1.5s" id="historique">
        <div class="col-md-7">
            <h2 class="featurette-heading">Historique météo</h2>
            <p>En cours de contruction</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette wow fadeInLeft" data-wow-duration="1.5s" id="previsons">
        <div class="col-md-7">
            <h2 class="featurette-heading">Météo à venir</h2>
            <?php include 'inc/previsions.php'; ?>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette wow fadeInLeft" data-wow-duration="1.5s" id="about">
        <div class="col-md-7">
            <h2 class="featurette-heading">A propos</h2>
            <p>En cours de construction</p>
        </div>
        <div class="col-md-5">
            <?php include 'inc/map.php'; ?>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Retour en haut</a></p>
    </footer>

</div><!-- /.container -->


<?php include 'inc/footer.php'; ?>
