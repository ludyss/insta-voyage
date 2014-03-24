<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="well">


                <h2>Nouveau séjours</h2>
                <form action="/admin/sejours/ajouter" method="POST" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="trip-name">Nom</label>
                        <input id="trip-name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="trip-price">Qualité</label>
                        <input id="trip-quality" class="form-control" type="number" min="1" max="5" value="3" name="quality">
                    </div>
                    <div class="form-group">
                        <label for="trip-desc">Description</label>
                        <textarea id="trip-desc" class="form-control" rows="8" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>