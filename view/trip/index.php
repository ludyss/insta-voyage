<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Tout les séjours</h2>
                <a class="btn btn-primary pull-right" href="/admin/sejours/nouveau">Ajouter un séjour</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trips as $trip): ?>
                            <tr>
                                <td>
                                    <a href="/admin/sejours/<?php echo $trip['id_trip']; ?>"><?php echo $trip['name']; ?></a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/sejours/<?php echo $trip['id_trip']; ?>"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/modifier"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="/admin/sejours/<?php echo $trip['id_trip']; ?>/supprimer"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>