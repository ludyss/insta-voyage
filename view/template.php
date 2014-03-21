<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />        
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Voyages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navbar-collapse">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-default navbar-fixed-top animated slideInDown" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collaspe">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand toggle-sidebar" href="#"><img src="assets/img/logo/logo_64.png" alt="">Cross<span>Island</span></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="#accueil"><i class="fa fa-home"></i></a></li>
                    <li class=""><a href="#sejours">Circuit</a></li>
                    <li class=""><a href="#hotels">Hôtels</a></li>
                    <li class=""><a href="#croisieres">Croisières</a></li>
                    <li class=""><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <aside id="sidebar">
            <menu class="nav nav-stacked nav-pills" role="navigation">
                <li><a href="#"><i class="fa fa-info-circle"></i> Information</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Connexion</a></li>
                <li><a href="#"><i class="fa fa-question-circle"></i> Aide</a></li>
            </menu>
        </aside>

        <div id="lang-bar">
            <menu class="nav nav-pills nav-justified">
                <li><a href="#">English</a></li>
                <li><a href="#">Français</a></li>
            </menu>
        </div>
        <div id="nav-arrow">
            <h1>
                <i class="fa fa-chevron-right  fa-2x"></i>
            </h1>
        </div>

        <section id="accueil" class="screen">

            <video preload="auto" autoplay="autoplay" loop="loop" muted="muted">
                <source src="assets/video/intro.mp4" type="video/mp4"> 
            </video>

            <div class="container">
                <form class="form-inline" action="#" accept-charset="utf-8" method="post" role="search">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 animated slideInDown">
                            <h2>Trouvez votre séjour idéal</h2>
                            <div class="well">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="destination" placeholder="Hawaï, Maldives, Madagascar...">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <select class="form-control" id="adultes">
                                            <option>1 adulte</option>
                                            <option>2 adultes</option>
                                            <option>3 adultes et +</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <select class="form-control" id="enfants">
                                            <option>sans enfant</option>
                                            <option>1 enfant</option>
                                            <option>2 enfants</option>
                                            <option>3 enfants et +</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <button type="button" class="btn btn-block btn-primary" id="find">Trouver</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </form>
            </div><!-- /.container -->

        </section>

        <section id="sejours">
            <div class="thumbnail-container">
                <div class="thumbnail">
                    <img src="assets/img/01.jpg" alt="">
                    <div class="caption">
                        <h3>Hawaï Break
                            <span class="quality">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius.</p>
                        <div class="clearfix">
                            <a href="#" class="btn btn-primary" role="button">Reserver</a>
                            <a href="#" class="btn btn-link" role="button">Voir le programme</a>
                            <span class="price"><small>à partir de </small>1489€</span>
                        </div>
                        <div class="formula">
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-smile-o fa-stack-1x"></i>
                                    </span>
                                    Famille
                                    <span class="price pull-right">1805€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-heart fa-stack-1x"></i>
                                    </span>
                                    Couple
                                    <span class="price pull-right">1768€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x"></i>
                                        <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                    Solo
                                    <span class="price psull-right">1649€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x"></i>
                                    </span>
                                    Groupe
                                    <span class="price pull-right">1649€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/02.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Tahiti Sunset
                            <span class="quality">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div>
                            <a href="#" class="btn btn-primary" role="button">Reserver</a>
                            <a href="#" class="btn btn-link" role="button">Voir le programme</a>
                            <span class="price"><small>à partir de </small>1649€</span>
                        </div>
                        <div class="formula">
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-smile-o fa-stack-1x"></i>
                                    </span>
                                    Famille
                                    <span class="price pull-right">1805€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-heart fa-stack-1x"></i>
                                    </span>
                                    Couple
                                    <span class="price pull-right">1768€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x"></i>
                                        <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                    Solo
                                    <span class="price psull-right">1649€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x"></i>
                                    </span>
                                    Groupe
                                    <span class="price pull-right">1649€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/03.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Canaries Tour
                            <span class="quality">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div>
                            <a href="#" class="btn btn-primary" role="button">Reserver</a>
                            <a href="#" class="btn btn-link" role="button">Voir le programme</a>
                            <span class="price"><small>à partir de </small>749€</span>
                        </div>
                        <div class="formula">
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-smile-o fa-stack-1x"></i>
                                    </span>
                                    Famille
                                    <span class="price pull-right">1805€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-heart fa-stack-1x"></i>
                                    </span>
                                    Couple
                                    <span class="price pull-right">1768€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x"></i>
                                        <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                    Solo
                                    <span class="price psull-right">1649€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x"></i>
                                    </span>
                                    Groupe
                                    <span class="price pull-right">1649€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/05.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Maldives
                            <span class="quality">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div>
                            <a href="#" class="btn btn-primary" role="button">Reserver</a>
                            <a href="#" class="btn btn-link" role="button">Voir le programme</a>
                            <span class="price"><small>à partir de </small>917€</span>
                        </div>
                        <div class="formula">
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-smile-o fa-stack-1x"></i>
                                    </span>
                                    Famille
                                    <span class="price pull-right">1805€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-heart fa-stack-1x"></i>
                                    </span>
                                    Couple
                                    <span class="price pull-right">1768€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x"></i>
                                        <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                    Solo
                                    <span class="price psull-right">1649€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x"></i>
                                    </span>
                                    Groupe
                                    <span class="price pull-right">1649€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/04.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Guadeloupe
                            <span class="quality">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div>
                            <a href="#" class="btn btn-primary" role="button">Reserver</a>
                            <a href="#" class="btn btn-link" role="button">Voir le programme</a>
                            <span class="price"><small>à partir de </small>839€</span>
                        </div>
                        <div class="formula">
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-smile-o fa-stack-1x"></i>
                                    </span>
                                    Famille
                                    <span class="price pull-right">1805€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-heart fa-stack-1x"></i>
                                    </span>
                                    Couple
                                    <span class="price pull-right">1768€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x"></i>
                                        <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                    Solo
                                    <span class="price psull-right">1649€</span>
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x"></i>
                                    </span>
                                    Groupe
                                    <span class="price pull-right">1649€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hotels" class="inverse">
            <div class="row">
                <div class="col-md-12">
                    <h1>À propos de Cross Island</h1>
                    <p>
                        Cross Island® est un site de voyage au parmis tant d'autre, il permet aux 
                        voyageurs de réserver et d'obtenir le voyage de leur rêve. Cross Island 
                        offre des Séjours fiables et propose une grande variété de choix de voyages.
                    </p>
                    <p>
                        Cross Island comprend également Cross Island for Business, 
                        une division dédiée aux entreprises de l’industrie du tourisme permettant 
                        aux professionnels d’accéder aux offres spéciales pour entreprise et PME.
                    </p>
                    <h2>Nos Partenaires :</h2>
                    <address>www.airfarewatchdog.com, www.bookingbuddy.com, www.cruisecritic.com, 
                        www.everytrail.com, www.familyvacationcritic.com, www.flipkey.com, 
                        www.gateguru.com, www.holidaylettings.co.uk, www.holidaywatchdog.com, 
                        www.independenttraveler.com, www.jetsetter.com, www.niumba.com,  
                        www.onetime.com, www.oyster.com, www.seatguru.com, www.smartertravel.com, 
                        www.tingo.com, www.travelpod.com, www.virtualtourist.com, www.whereivebeen.com et 
                        www.kuxun.cn. 
                    </address>
                </div>
            </div>

        </section>

        <section id="croisieres">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
        </section>

        <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>