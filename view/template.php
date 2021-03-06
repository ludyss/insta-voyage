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
        <title>CrossIsland</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navbar-collapse">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include './view/includes/navbar.php'; ?>
        <?php include './view/includes/aside.php'; ?>
        <?php include './view/includes/langbar.php'; ?>

        <div id="nav-arrow">
            <i class="fa fa-chevron-right  fa-5x"></i>
        </div>
        <div class="ajax-container">
            <?php include $view; ?>
        </div>

        <script src="/assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
