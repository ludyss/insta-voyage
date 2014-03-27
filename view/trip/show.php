<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left"><?php echo $trip['name']; ?></h2>
                <a class="btn btn-warning pull-right" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/modifier">Modifier</a>
                <a class="btn btn-danger pull-right" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/supprimer">Supprimer</a>
            </div>
            <div class="clearfix">
                <img class="img-thumbnail pull-left" src="/uploads/<?php echo $trip['filename']; ?>" alt="" width="200">
                <p><?php echo $trip['description']; ?></p>
            </div>
            
            <div class="page-header">
                <h2>Etapes</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Hotel</th>
                            <th>Ville</th>
                            <th>Qualité</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($steps as $step): ?>
                            <tr>
                                <td><a href="/admin/etapes/<?php echo $step['id_trip_step']; ?>"><?php echo $step['hotel_name']; ?></a></td>
                                <td><?php echo $step['city']; ?></td>
                                <td><?php echo $step['hotel_quality']; ?></td>
                                <td><?php echo $step['begin_date']->format('d/m/Y'); ?></td>
                                <td><?php echo $step['end_date']->format('d/m/Y'); ?></td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/etapes/<?php echo $step['id_trip_step']; ?>"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning" href="/admin/etapes/<?php echo $step['id_trip_step']; ?>/modifier"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="/admin/etapes/<?php echo $step['id_trip_step']; ?>/supprimer"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="well">
                <div class="row">
                    <form action="/admin/etapes/ajouter" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="id_trip" value="<?php echo $trip['id_trip']; ?>">
                        <div class="form-group col-md-2">
                            <label for="trip-step-city">Ville</label>
                            <input id="trip-step-city" class="form-control" type="text" name="city" required="required">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="trip-step-hotel-name">Nom de l'hotel</label>
                            <input id="trip-step-hotel-name" class="form-control" type="text" name="hotel_name" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-hotel-quality">Qualité de l'hotel</label>
                            <input id="trip-step-hotel-quality" class="form-control" type="number" min="1" max="5" value="3" name="hotel_quality" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-begin-date">Date de debut</label>
                            <input id="trip-step-begin-date" class="form-control datepicker" type="datetime" name="begin_date">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-end-date">Date de fin</label>
                            <input id="trip-step-end-date" class="form-control datepicker" type="datetime" name="end_date">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="trip-step-desc">Description</label>
                            <textarea id="trip-step-desc" class="form-control" rows="8" name="description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary" type="submit">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>