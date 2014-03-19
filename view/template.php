<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
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
                    <li class=""><a href="#sejours">Séjours</a></li>
                    <li class=""><a href="#hotels">Hôtels</a></li>
                    <li class=""><a href="#croisieres">Croisières</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <aside id="sidebar">
            <menu class="nav nav-stacked nav-pills" role="navigation">
                <li><a href="#"><i class="fa fa-info-circle"></i> Information</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Connexion</a></li>
                <li><a href="#"><i class="fa fa-question-circle"></i> Aide</a></li>
                <li><a href="#"><i class="fa fa-home"> </i> Contact</a></li>
            </menu>
        </aside>

        <div id="lang-bar">
            <menu class="nav nav-pills nav-justified">
                <li><a href="#">English</a></li>
                <li><a href="#">Français</a></li>
            </menu>
        </div>

        <section id="accueil" class="screen">

            <video preload="auto" autoplay="autoplay" loop="loop" muted="muted" class=" animated fadeInDown">
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
                        <h3>Hawaï Break<span class="price"><small>à partir de </small>689€</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius.</p>
                        <div><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-link" role="button">Voir le programme</a></div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/02.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Tahiti Sunset<span class="price"><small>à partir de </small>1029€</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-link" role="button">Voir le programme</a></div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/03.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Canarie Tour<span class="price"><small>à partir de </small>873€</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-link" role="button">Voir le programme</a></div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/05.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Hawaï Break</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-link" role="button">Voir le programme</a></div>
                    </div>
                </div>

                <div class="thumbnail">
                    <img src="assets/img/04.jpg" alt="">
                    <div class="caption">
                        <h3 class="title-header">Hawaï Break</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius</p>
                        <div><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-link" role="button">Voir le programme...</a></div>
                    </div>
                </div>
                <div class="thumbnail">
                    MORE
                </div>
            </div>
        </section>

        <section id="hotels">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Mon Titre</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem elit, ultricies sed ullamcorper eget, hendrerit eget nisl. Ut nisi lectus, blandit vitae augue eu, mattis varius tortor. Curabitur quis faucibus magna. Ut laoreet nunc urna, et placerat felis mattis a. Etiam lobortis ante adipiscing, ornare velit iaculis, fringilla felis. Curabitur sit amet nisl non erat ultricies tempor a ac quam. Aliquam fermentum pulvinar tortor quis tristique. Nunc vel diam ullamcorper, sagittis enim a, vulputate risus. Phasellus aliquam nunc a consequat ullamcorper. Suspendisse potenti. Nam in sapien in purus malesuada tincidunt id et dolor. Mauris justo nibh, ornare vel venenatis eu, faucibus ut nulla.</p>
                        <p>Duis blandit diam leo, quis elementum est tincidunt semper. Nam at tincidunt arcu. Mauris fermentum lorem vel cursus dapibus. Curabitur mollis rhoncus vestibulum. Donec vel venenatis libero. Nunc et nibh lorem. Mauris aliquam massa dui, at bibendum mi dignissim vitae. Ut facilisis risus sit amet ligula ultricies egestas. In quis magna sapien. Curabitur porttitor velit justo, at dignissim purus pulvinar sed. Etiam ut nibh ipsum. Praesent at diam vel enim ornare ornare ut non sem.</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="croisieres">



        </section>

        <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
