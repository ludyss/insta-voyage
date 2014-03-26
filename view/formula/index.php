<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Tout les formules</h2>
                <a class="btn btn-primary pull-right" href="/admin/formules/nouveau">Ajouter une formule</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Nombre de places</th>
                            <th>Prix</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($formules as $formule): ?>
                            <tr>
                                <td>
                                    <a href="/admin/formules/<?php echo $formule['id_formula']; ?>"><?php echo $formule['formula_type']; ?></a>
                                </td>
                                <td>
                                    <?php echo $formule['nb_place_formula']; ?>
                                </td>
                                <td>
                                    <?php echo $formule['formula_price']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="/admin/formules/<?php echo $formule['id_formula']; ?>/modifier"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="/admin/formules/<?php echo $formule['id_formula']; ?>/supprimer"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>