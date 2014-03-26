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
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navbar-collapse">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="assets/img/logo/logo_64.png" alt="">Cross<span>Island</span></a>
            </div>
        </nav>
        
        <div class="container">
            <form class="form-horizontal" role="form" method="post" action="reponse">
                <div class="form-group">
                  <label for="lieu" class="col-sm-2 control-label">Lieu</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="lieu" placeholder="Indiquer le lieu" name="lieu">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ville" class="col-sm-2 control-label">Ville</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="ville" placeholder="Indiquer une ville" name="ville">
                  </div>
                </div>
                <div class="form-group">
                  <label for="hotel" class="col-sm-2 control-label">Hôtel</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="hotel" placeholder="Indiquer un hôtel" name="hotel">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ville" class="col-sm-2 control-label">Ville</label>
                  <div class="col-sm-2">
                      <select name="note" class="form-control" id="note">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="depart" class="col-sm-2 control-label">Date de départ</label>
                  <div class="col-sm-2">
                      <input type="date" class="form-control" name="datedepart">
                  </div>
                </div>
                <div class="form-group">
                  <label for="retour" class="col-sm-2 control-label">Date de retour</label>
                  <div class="col-sm-2">
                      <input type="date" class="form-control" name="dateretour">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enregistrer !</button>
                  </div>
                </div>
              </form>

        </div>
    </body>
</html>
