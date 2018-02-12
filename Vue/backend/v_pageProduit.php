<div class="content-box-large">
    <!--        Contenu page -->
    <div class="tab-content">
        <div class="panel-body">
            <form method="POST" action="index.php?c=listeProduits&a=ajout" class="form-horizontal">
                <legend>Description Article</legend>
        <!--        Reference Article-->
                <div class="form-group">
                    <label for="referenceArticle" class="col-sm-2 control-label">Reference Article</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="referenceArticle" required>
                    </div>
                </div>
        <!--        Nom Article-->
                <div class="form-group">
                    <label for="nomArticle" class="col-sm-2 control-label">Titre Article</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nomArticle" required>
                    </div>
                </div>
        <!--        Prix HT Article-->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Prix vente HT</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="prixHTArticle" type="text">
                        </div>
                    </div>
                </div>
        <!--        Tva Article -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                        <div>
                            <label for="tva" class="col-sm-1 control-label">Tva</label>
                            <select id="tva" name="tvaArticle">
                                <option>5.5</option>
                                <option>20</option>
                            </select>
                        </div>
                    </div>
                </div>
        <!--        Prix TTC public-->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Prix vente TTC</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="prixTTCArticle" type="text">
                        </div>
                    </div>
                </div>
        <!--        Résumé Article-->
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Résumé</label>
                    <div class="col-sm-10">
                        <div class="content-box-large">
                            <div class="panel-body">
                                <textarea class="form-control" rows="5" name="resumeArticle"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        <!--        Description Article -->
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <div class="content-box-large">
                            <div class="panel-body">
                                <textarea class="form-control" rows="5" name="descriptionArticle"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        <!--        Quantité -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Quantité</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="quantiteArticle" type="number">
                        </div>
                    </div>
                </div>
        <!--        Poids -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Poids (kg)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="poidsArticle" type="number">
                        </div>
                    </div>
                </div>
        <!--        Motorisation -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Motorisation (cv)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="motorisationArticle" type="text">
                        </div>
                    </div>
                </div>
        <!--        Longueur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Longueur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="longueurArticle" type="text">
                        </div>
                    </div>
                </div>
        <!--        Largeur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Largeur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="largeurArticle" type="text">
                        </div>
                    </div>
                </div>
        <!--        Hauteur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Hauteur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="hauteurArticle" type="text">
                        </div>
                    </div>
                </div>

        <!--        Choix catégorie -->

                <legend>Catégories associées</legend>
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="col-sm-offset-2 col-sm-1"></label>
                        <select  name="categorieArticle">
                            <option data-icon="glyphicon-chevron-right">Bateau</option>
                            <option>Semi-Rigide</option>
                            <option>Pneumatique</option>

                            <option data-divider="true"></option>

                            <option data-icon="glyphicon-chevron-right">Jet-ski</option>
                            <option>Location</option>

                            <option data-divider="true"></option>

                            <option data-icon="glyphicon-chevron-right">Permis-bateau</option>
                            <option>Cotier</option>
                            <option>Fluvial</option>
                            <option>Hauturier</option>
                        </select>
                    </div>
                </div>
        <!--        Marque -->
                <legend>Marque associée</legend>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="marque" class="col-sm-offset-2 col-sm-1"></label>
                        <select name="marqueArticle" id="marque">
                            <option>Yamaha</option>
                            <option>Zodiac</option>
                            <option>Sea-doo</option>
                        </select>
                    </div>
                </div>
                    <legend>Ajout photos</legend>
        <!--        Photo -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Photo</label>
                        <div class="col-md-10">
                            <input type="file" class="btn btn-default" id="exampleInputFile1">
                        </div>
                    </div>
                <input type="submit" class="btn btn-success" value="Enregistrer">
            </form>
        </div>

    </div>
</div>