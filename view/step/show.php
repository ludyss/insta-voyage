<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left"><?php echo $step['hotel_name']; ?></h2>
                <a class="btn btn-primary pull-right" href="/admin/sejours/<?php echo $step['id_trip']; ?>">Retour au séjour</a>
                <a class="btn btn-warning pull-right" href="/admin/etapes/<?php echo $step['id_trip_step']; ?>/modifier">Modifier</a>
                <a class="btn btn-danger pull-right" href="/admin/etapes/<?php echo $step['id_trip_step']; ?>/supprimer">Supprimer</a>
            </div>
            <div class="clearfix">
                <img  class="img-thumbnail pull-left" src="/uploads/<?php echo $step['filename']; ?>" alt="" width="200">
                <p><?php echo $step['description']; ?></p>
            </div>
            
            <div class="page-header">
                <h2>Photos</h2>
                <?php foreach ($pictures as $picture): ?>
                    <img class="img-thumbnail" src="/uploads/<?php echo $picture['filename']; ?>" alt="" width="200">
                <?php endforeach; ?>
            </div>

            <form action="/admin/photos/ajouter" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_trip_step" value="<?php echo $step['id_trip_step']; ?>">
                <input type="file" name="files[]" multiple="multiple" accept="image/*"/>
                <input type="submit"/>
            </form>

        </div>
    </div>
</div>