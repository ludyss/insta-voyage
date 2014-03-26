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
                <form action="/admin/formules/ajouter" method="POST" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="formula-type">Type de formule</label>
                        <select id="formula-type" name="type" class="form-control"> 
                            <option value="famille" <?php if($formule['formula_type'] == "famille"):?> selected="selected" <?php endif; ?>>Famille</option>
                            <option value="couple" <?php if($formule['formula_type'] == "couple"):?> selected="selected" <?php endif; ?>>Couple</option>
                            <option value="groupe" <?php if($formule['formula_type'] == "groupe"):?> selected="selected" <?php endif; ?>>Groupe</option>
                            <option value="solo" <?php if($formule['formula_type'] == "solo"):?> selected="selected" <?php endif; ?>>Solo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formula-place">Nombre de place</label>
                        <input id="formula-place" class="form-control" type="number" min="1" max="5" value="<?php echo $formule['nb_place_formula']; ?>" name="place" required="required">
                    </div>
                    <input id="formula-id" class="form-control" type="hidden" value="<?php echo $formule['id_formula']; ?>" name="id" >
                    <div class="form-group">
                        <label for="formula-price">Prix</label>
                        <input id="formula-price" class="form-control" type="number" min="1" max="5" value="<?php echo $formule['formula_price']; ?>" name="price" required="required">
                    </div>
                    <div class="form-group">
                        <label for="formula-trip">Voyage associé</label>
                        <select id="formula-trip" name="trip" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>