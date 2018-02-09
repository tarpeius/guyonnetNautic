<!--        Titre page-->
            <div class="col-md-9">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Page produit</div>
                            <label>Statut : </label>
                            <input type="radio" name="active" value="male"> Activé
                            <input type="radio" name="active" value="female"> Désactivé
                        <div class="panel-options">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-eye-open"></i> Aperçu</button>
                            <button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Enregistrer</button>
                            <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Supprimer</button>
                        </div>
                    </div>
                </div>
                <div class="content-box-large">
<!--        Sous-titre -->
                    <div class="panel-body">
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#tab1" data-toggle="tab">Information</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Attributs</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Association</a></li>
                                            <li><a href="#tab4" data-toggle="tab">Photo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<!--        Contenu page -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <form class="form-horizontal" role="form">
        <!--        Nom produit-->
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Titre produit</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
        <!--        Prix HT produit-->
                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="appendprepend">Prix vente HT</label>
                                            <div class="col-sm-2">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendprepend" type="text">
                                                </div>
                                            </div>
                                        </div>
        <!--        Tva produit -->
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-2">
                                                <div>
                                                    <label class="col-sm-1 control-label">Tva</label>
                                                    <div class="bfh-selectbox" data-name="selectbox3" data-value="12" data-filter="false">
                                                        <div data-value="1">20%</div>
                                                        <div data-value="2">5.5%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        <!--        Prix TTC public-->
                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="appendprepend">Prix vente TTC</label>
                                            <div class="col-sm-2">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendprepend" type="text">
                                                </div>
                                            </div>
                                        </div>
        <!--        Résumé produit-->
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Résumé</label>
                                            <div class="col-sm-10">
                                                <div class="content-box-large">
                                                    <div class="panel-body">
                                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        <!--        Description produit text area-->
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                <div class="content-box-large">
                                                    <div class="panel-body">
                                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
<!--        2eme page sous-titre -->
                                    <div class="tab-pane active" id="tab2">
                                        <form class="form-horizontal" role="form">
        <!--        Quantité -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Quantité</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Couleur -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Couleur</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Poids -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Poids (kg)</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Motorisation -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Motorisation (cv)</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Longueur -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Longueur (m)</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Largeur -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Largeur (m)</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
        <!--        Hauteur -->
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="appendprepend">Hauteur (m)</label>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <input class="form-control" id="appendprepend" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


<!--        3eme page sous-titre -->
                                    <div class="tab-pane" id="tab3">
        <!--        Choix catégorie -->
                                        <div class="panel-body">
                                            <legend>Catégories associées</legend>
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label class="col-sm-offset-2 col-sm-1"></label>
                                                    <div class="col-sm-10">
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
        <!--        Marque -->
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="col-sm-offset-2 col-sm-1">Marque</label>
                                                        <div class="bfh-selectbox" data-name="selectbox3" data-filter="false">
                                                            <div data-value="1">Yamaha</div>
                                                            <div data-value="2">Zodiac</div>
                                                            <div data-value="3">Pacific Craft</div>
                                                            <div data-value="4">Seadoo</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
<!--        4eme page sous-titre -->
                                <div class="tab-pane" id="tab4">
                                    <fieldset>
                                        <legend>Unstyled Checkbox</legend>
        <!--        Photo -->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Photo</label>
                                            <div class="col-md-10">
                                                <input type="file" class="btn btn-default" id="exampleInputFile1">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <ul class="pager wizard">
                                    <li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                    <li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">

            <div class="copy text-center">
                Copyright 2014 <a href='#'>Website</a>
            </div>

        </div>
    </footer>
