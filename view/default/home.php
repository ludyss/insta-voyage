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
        <?php foreach ($trips as $trip): ?>
            <div class="thumbnail">
                <img src="/uploads/<?php echo $trip['filename']; ?>" alt="">
                <div class="caption">
                    <h3><?php echo $trip['name']; ?>
                        <span class="quality">
                            <?php for ($i = 0; $i < $trip['quality']; $i++): ?>
                            <i class="fa fa-star"></i>
                            <?php endfor;?>
                        </span>
                    </h3>
                    <p><?php echo nl2br($trip['description']); ?></p>
                    <div class="clearfix" id="trip-action">
                        <a href="/sejour/<?php echo $trip['id_trip']; ?>/reserver" class="btn btn-primary" role="button">Reserver</a>
                        <a href="/sejour/<?php echo $trip['id_trip']; ?>" class="btn btn-link" role="button">Voir le programme</a>
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
        <?php endforeach; ?>
    </div>
</section>

<section id="hotels" class="inverse">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</section>

<section id="croisieres">
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