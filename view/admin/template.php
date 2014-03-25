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
        <title>CrossIsland - Administration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" href="/assets/css/admin.css">
        <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collaspe">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="#">Cross<span>Island</span></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="/admin"><i class="fa fa-home"></i></a></li>
                        <li class=""><a href="/admin/sejours">Séjours</a></li>
                        <li class=""><a href="/admin/etapes">Etapes</a></li>
                        <li class=""><a href="/admin/clients">Clients</a></li>
                        <li class=""><a href="/admin/reservations">Reservation</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="/admin/deconnexion"><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <?php include $view; ?>

        <script src="/assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/assets/js/admin-plugins.js"></script>
        <script src="/assets/js/admin.js"></script>
    </body>
</html>
