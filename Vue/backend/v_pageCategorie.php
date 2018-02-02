<?php var_dump($_REQUEST);?>
<!--                Titre page -->
        <div class="col-md-9">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Page catégorie</div>
                            <label>Statut </label>
                            <input type="radio" name="active" value="male"> <span class="glyphicon glyphicon-ok"></span>
                            <input type="radio" name="active" value="female"> <span class="glyphicon glyphicon-remove"></span>
                    </div>
                </div>
<!--                Contenu page -->
                <div class="content-box-large">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="index.php?c=listeCategorie&a=ajout">
            <!--                 Nom categorie  -->
                            <div class="form-group">
                                <label for="nomCateg" class="col-sm-2 control-label">Nom</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nomCateg">
                                </div>
                            </div>
            <!--                 Categorie parente  -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Catégorie parente</label>
                                <div class="col-sm-5">
                                    <select class="selectpicker">
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
            <!--                 Description categorie  -->
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-7">
                                    <textarea name="description" rows="5" cols="100"></textarea>
                                </div>
                            </div>
                            <div class="panel-options">
                                <input type="submit" class="btn btn-success" value="Enregistrer">
                                <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Supprimer</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>