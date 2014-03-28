<section id="section-reserve-img">
    <div id="cover-img">
        <img src="/uploads/<?php echo $trip['filename']; ?>" alt="">
    </div>
</section>
<section id="section-reserve-desc">
    <div class="choose-formula">
        <h1 class="title-header">
            <div class="pull-right"><small class="text-right">à partir de 1489€</small></div>
            <small>Réservation pour : </small>
            <br /><?php echo $trip['name']; ?>
        </h1>
        <div class="quality-right">
            <?php for ($i = 0; $i < $trip['quality']; $i++): ?>
                <i class="fa fa-star fa-4x"></i>
            <?php endfor; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Choisissez le type souhaité </h3>
            </div>
            <?php foreach ($formulas_list as $formules) : ?>
                <div class="col-md-3 text-center choose-formula-box">
                <?php 
                switch ($formules['formula_type']) {
                    case 'famille':
                        echo '<span class="fa-stack fa-lg fa-4x"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x"></i></span>';
                        break;
                    case 'couple':
                        echo '<span class="fa-stack fa-lg fa-4x"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-heart fa-stack-1x"></i></span>';
                        break;
                    case 'solo':
                        echo '<span class="fa-stack fa-lg fa-4x"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-male fa-stack-1x"></i></span>';
                        break;
                    case 'groupe':
                        echo '<span class="fa-stack fa-lg fa-4x"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-group fa-stack-1x"></i></span>';
                        break;
                    default:
                        echo '<span class="fa-stack fa-lg fa-4x"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span>';
                        break;
                }
                ?>
                    <p>
                        <input type="radio" name="formulType" value="<?php echo $formules['id_formula'];?>"/> <?php echo ucfirst($formules['formula_type']);?>
                        <span class="price pull-right"><?php echo$formules['formula_price'];?>€</span>
                    </p>
                </div>
            <?php endforeach; ?>
            <!--div class="col-md-3 text-center choose-formula-box">
                <span class="fa-stack fa-lg fa-4x">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-smile-o fa-stack-1x"></i>
                </span>
                <p>
                    <input type="radio" name="formulType" value="famille"/> Famille
                    <span class="price pull-right">1805€</span>
                </p>
            </div>
            <div class="col-md-3 text-center choose-formula-box">
                <span class="fa-stack fa-lg fa-4x">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x"></i>
                </span>
                <p>
                    <input type="radio" name="formulType" value="couple"/> Couple
                    <span class="price pull-right">1768€</span>
                </p>
            </div>
            <div class="col-md-3 text-center choose-formula-box">
                <span class="fa-stack fa-lg fa-4x">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-male fa-stack-1x"></i>
                </span>
                <p>
                    <input type="radio" name="formulType" value="solo"/> Solo
                    <span class="price psull-right">1649€</span>
                </p>
            </div>
            <div class="col-md-3 text-center choose-formula-box">
                <span class="fa-stack fa-lg fa-4x">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-group fa-stack-1x"></i>
                </span>
                <p>
                    <input type="radio" name="formulType" value="groupe"/> Groupe
                    <span class="price pull-right">1649€</span>
                </p>
            </div>
        </div-->
        <div class="col-md-12">
            <button type="button" class="btn btn-link pull-right" id="nextstep">Suivant <i class="fa fa-chevron-circle-right"></i></button>
        </div>
    </div>
</section>
<section class="inverse form-horizontal" id="section-reserve-formules">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title-header"><small id="formulechoosen">&nbsp; </small><br />
                Informations personnelles
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Pour une réserver, veuillez fournir les informations nécessaire.</p>
        </div>
    </div>
    <form class="form-horizontal" role="form" id="reservationForm" method="post">
        <input type="hidden" name="typeFormule" id="typeFormule" />
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nom">Nom </label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="emailReserv" placeholder="email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="0123456789">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="pays">Pays </label>
                    <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville">
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numrue">Numéro</label>
                            <input type="text" class="form-control" name="num_rue" id="num_rue" placeholder="01">
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-9">
                        <div class="form-group">
                            <label for="rue">Rue</label>
                            <input type="text" class="form-control" name="nom_rue" id="rue" placeholder="Nom de rue">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="code_postal">Code Postal</label>
                    <input type="text" class="form-control" name="code_postal" id="code_postal" placeholder="">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-link inverse pull-left" id="backstep"> <i class="fa fa-chevron-circle-left"></i> Précédent</button>
            <button type="submit" class="btn btn-default pull-right">Réserver !</button>
        </div>
    </form>
</section>
<section id="section-reserve-recap">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title-header"><small id="formulechoosen">&nbsp; </small><br />
                Récapitulatif
            </h1>
        </div>
    </div>
</section>