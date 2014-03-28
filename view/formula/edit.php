<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Formule de type <?php echo $formule['formula_type']; ?></h2>
                <a class="btn btn-warning pull-right" href="/admin/formules">Annuler</a>
                <a class="btn btn-danger pull-right" href="/admin/formules/<?php echo $formule['id_formula']; ?>/supprimer">Supprimer</a>
            </div>

            <div class="page-header clearfix">
                <h2>Formule</h2>
            </div>
            <div class="well">
                <div class="row">
                    <form action="/admin/formules/sauvegarder" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="id_formula" value="<?php echo $formule['id_formula']; ?>">
                        <input type="hidden" name="id_trip" value="<?php echo $formule['id_trip']; ?>">
                        <div class="form-group col-md-4">
                            <label for="formula-type">Type de formule</label>
                            <select id="formula-type" name="type" class="form-control">
                                <option value="famille">Famille</option>
                                <option value="couple">Couple</option>
                                <option value="groupe">Groupe</option>
                                <option value="solo">Solo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="formula-nb-adult">Nombre d'adulte</label>
                            <input id="formula-nb-adult" class="form-control" type="number" min="1" name="nb_adult" value="<?php echo $formule['nb_adult']; ?>" required="required">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="formula-nb-child">Nombre d'enfant</label>
                            <input id="formula-nb-child" class="form-control" type="number" min="0" name="nb_child" value="<?php echo $formule['nb_child']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="formula-price">Prix</label>
                            <input id="formula-price" class="form-control" type="number" min="1" max="5" placeholder="saisissez un prix" name="price" required="required" value="<?php echo $formule['formula_price']; ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary" type="submit">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>