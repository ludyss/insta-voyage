<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left"><?php echo $trip['name']; ?></h2>
                <a class="btn btn-warning pull-right" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/modifier">Modifier</a>
                <a class="btn btn-danger pull-right" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/supprimer">Supprimer</a>
            </div>
            <p><?php echo $trip['description']; ?></p>
            
            <div class="page-header clearfix">
                <h2>Etapes</h2>
            </div>
            <div class="well">
                <form action="/admin/etapes/ajouter" method="POST" accept-charset="UTF-8">
                    <input type="hidden" name="id_trip">
                    <div class="form-group">
                        <label for="trip-step-city">Ville</label>
                        <input id="trip-step-city" class="form-control" type="text" name="city" required="required">
                    </div>
                    <div class="form-group">
                        <label for="trip-step-hotel-name">Nom de l'hotel</label>
                        <input id="trip-step-hotel-name" class="form-control" type="text" name="hotel_name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="trip-step-hotel-quality">Qualité de l'hotel</label>
                        <input id="trip-step-hotel-quality" class="form-control" type="number" min="1" max="5" value="3" name="hotel_quality" required="required">
                    </div>
                    <div class="form-group">
                        <label for="trip-step-begin-date">Date de debut</label>
                        <input id="trip-step-begin-date" class="form-control" type="datetime" name="begin_date">
                    </div>
                    <div class="form-group">
                        <label for="trip-step-end-date">Date de fin</label>
                        <input id="trip-step-end-date" class="form-control" type="datetime" name="end_date">
                    </div>
                    <div class="form-group">
                        <label for="trip-step-desc">Description</label>
                        <textarea id="trip-step-desc" class="form-control" rows="8" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>