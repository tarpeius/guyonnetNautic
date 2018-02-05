<!--        Titre page -->
        <div class="col-md-9">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Catégories</div>
                    <label></label>
            <!--        Bouton ajout catégorie -->
                    <div class="panel-options">
                        <a href="index.php?c=listeCategorie&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Ajouter catégorie</button></a>
                    </div>
                </div>
            </div>
        </div>
    <!--        Contenu page GAUCHE -->
        <div class="col-md-4">
            <div class="content-box-large">
            <!--        Liste categorie -->
                <div class="panel-heading">
                    <div class="panel-title">Liste Catégories</div>
                </div>
                <div class="panel-body">
                    <?php
                    $allCateg = afficherCategorie();
                    foreach ($allCateg as $categorie){ ?>
                        <ul>
                            <li> <?php echo $categorie['nom_categorie']?></li>
                        </ul>
                        <?php } ?>
                </div>
            </div>
        </div>
    <!--        Contenu page DROITE -->
        <div class="col-md-5">
            <div class="content-box-large">
                <div class="panel-heading">
                <!--        Selection categorie -->
                    <div class="panel-title">Modification</div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" name="nomCategorie" method="POST" action="index.php?c=listeCategorie&a=update">
                        <div class="form-group">
                            <label for="nomCategorie" class="col-sm-2 control-label">Selectionner</label>
                            <div class="col-sm-10">
                                <select id="selectCateg" /*class="selectpicker"*/>
                                    <?php
                                    foreach ($allCateg as $categorie){ ?>

                                        <option> <?php echo $categorie['nom_categorie']; ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                <!--        Catégorie choisie -->
                    <div class="form-group" ">
                        <label for="modifCategorie" class="col-sm-2 control-label">Modifier</label>
                        <div class="col-sm-6">
                            <input type="text" id="modifCategorie" class="form-control" name="modifCategorie" placeholder="Categorie choisie">
                            <input type="hidden" id="idCategHidden" name="idCateg">
                        </div>
                    </div>
                <!--        Bouton validation -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Modifier">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
