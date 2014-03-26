<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Modifier : <?php echo $step['hotel_name']; ?></h2>
                <a class="btn btn-primary pull-right" href="/admin/sejours/<?php echo $step['id_trip']; ?>">Annuler</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <div class="row">
                    <form action="/admin/etapes/sauvegarder" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="id_trip_step" value="<?php echo $step['id_trip_step']; ?>">
                        <input type="hidden" name="id_trip" value="<?php echo $step['id_trip']; ?>">
                        <div class="form-group col-md-2">
                            <label for="trip-step-city">Ville</label>
                            <input id="trip-step-city" class="form-control" type="text" name="city" value="<?php echo $step['city']; ?>" required="required">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="trip-step-hotel-name">Nom de l'hotel</label>
                            <input id="trip-step-hotel-name" class="form-control" type="text" name="hotel_name" value="<?php echo $step['hotel_name']; ?>" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-hotel-quality">Qualité de l'hotel</label>
                            <input id="trip-step-hotel-quality" class="form-control" type="number" min="1" max="5" value="<?php echo $step['hotel_quality']; ?>" name="hotel_quality" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-begin-date">Date de debut</label>
                            <input id="trip-step-begin-date" class="form-control datepicker" type="date" value="<?php echo $step['begin_date']->format('d/m/Y'); ?>" name="begin_date" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-cover">Couverture</label>
                            <select id="trip-step-cover" class="form-control" value="<?php echo $step['cover']; ?>" name="cover">
                                <?php foreach ($pictures as $picture):?>
                                <option value="<?php echo $picture['id_picture'];?>"><?php echo $picture['filename'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="trip-step-end-date">Date de fin</label>
                            <input id="trip-step-end-date" class="form-control datepicker" type="date" name="end_date" value="<?php echo $step['end_date']->format('d/m/Y'); ?>" required="required">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="trip-step-desc">Description</label>
                            <textarea id="trip-step-desc" class="form-control" rows="8" name="description"><?php echo $step['description']; ?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary" type="submit">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Photos</h2>
                <?php foreach ($pictures as $picture): ?>
                    <img src="/uploads/<?php echo $picture['filename']; ?>" alt="" width="200">
                    <a class="btn btn-danger" href="/admin/photos/<?php echo $picture['id_picture']; ?>/supprimer"><i class="fa fa-trash-o"></i></a>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
