<div class="content-box-large">
    <!--        Contenu page -->
    <div class="tab-content">
        <div class="panel-body">
            <form method="POST" action="index.php?c=listeProduits&a=ajout" class="form-horizontal" enctype="multipart/form-data">
                <legend>Description Article</legend>
                <!--        Reference Article-->
                <div class="form-group">
                    <label for="referenceArticle" class="col-sm-2 control-label">Reference Article</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="referenceArticle">
                    </div>
                </div>
                <!--        Nom Article-->
                <div class="form-group">
                    <label for="nomArticle" class="col-sm-2 control-label">Titre Article</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nomArticle">
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
                            <label for="tva1" class="col-sm-1 control-label"></label>
                            <select id="tva1" name="tvaArticle">
                                <?php
                                $allTva = afficherTva();
                                foreach ($allTva as $tva) {
                                    ?>
                                    <option value="<?php echo $tva['id_tva']?>">
                                        <?php
                                        echo $tva['type_tva'];
                                        ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
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
                            <input class="form-control" name="motorisationArticle" type="number">
                        </div>
                    </div>
                </div>
                <!--        Longueur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Longueur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="longueurArticle" type="number" step="0.1">
                        </div>
                    </div>
                </div>
                <!--        Largeur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Largeur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="largeurArticle" type="number" step="0.1">
                        </div>
                    </div>
                </div>
                <!--        Hauteur -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="appendprepend">Hauteur (m)</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control" name="hauteurArticle" type="number" step="0.1">
                        </div>
                    </div>
                </div>

                <!--        Choix catégorie -->

                <legend>Catégories associées</legend>
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="col-sm-offset-2 col-sm-1"></label>
                        <select  name="categorieArticle">
                            <?php
                            $categorie = afficherCategorie();
                            foreach ($categorie as $categ) {
                                ?>
                                <option data-icon="glyphicon-chevron-right" value="<?php echo $categ['id_categorie']?>"> <?php echo $categ['nom_categorie']?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!--        Marque -->
                <legend>Marque associée</legend>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="marque" class="col-sm-offset-2 col-sm-1"></label>
                        <select name="marqueArticle" id="marqueArticle">
                            <?php
                            $marque = afficherToutesMarques();
                            foreach ($marque as $marq) {
                                ?>
                                <option value="<?php echo $marq['id_marque']?>"> <?php echo $marq['nom_marque']?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <legend>Ajout photos</legend>
                <!--        Photo -->
                <div class="form-group">
                    <label for="photoArticle" class="col-md-2 control-label">Photo</label>
                    <div class="col-md-10">
                        <input type="file" class="btn btn-default" name="photoArticle">
                        <input type="submit" class="btn btn-success" value="Enregistrer">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>