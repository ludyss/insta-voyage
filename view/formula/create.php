<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Nouvelle formule</h2>
                <a class="btn btn-primary pull-right" href="/admin/formules">Annuler</a>
            </div>
            <div class="well">
                <form action="/admin/formules/ajouter" method="POST" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="formula-type">Type de formule</label>
                        <select id="formula-type" name="type" class="form-control">
                            <option value="famille">Famille</option>
                            <option value="couple">Couple</option>
                            <option value="groupe">Groupe</option>
                            <option value="solo">Solo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formula-place">Nombre de place</label>
                        <input id="formula-place" class="form-control" type="number" min="1" max="5" value="1" name="place" required="required">
                    </div>
                    <div class="form-group">
                        <label for="formula-price">Prix</label>
                        <input id="formula-price" class="form-control" type="number" min="1" max="5" placeholder="saisissez un prix" name="price" required="required">
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