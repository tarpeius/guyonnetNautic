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
                    $i =0;
                    $categParent = recupCategorie();
                    $sansParent = afficherCategorieSansParent();
                    $res = count($categParent);
                    for ($i; $i<$res;$i++){
                        $allCateg = recupSousCategorieParCategorie($categParent[$i]['id_categorie']);
                        ?>
                        <i class="glyphicon glyphicon-chevron-right"></i>  <?php echo $categParent[$i]['nom_categorie'];

                        foreach ($allCateg as $categorie){
                            $nomsousCateg = recupNomParId($categorie['id_categorie_1']);
                            ?>
                            <ul>
                                <li> <?php echo $nomsousCateg->nom_categorie?></li>
                            </ul>
                        <?php }
                    }
                    foreach ($sansParent as $unSansParent){ ?>

                            <i class="glyphicon glyphicon-chevron-right"></i>  <?php echo $unSansParent['nom_categorie']."<br>";

                   }
                     ?>
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

                                <select class="selectpicker" id="selectCateg">
                                    <option value ='0'>Categories</option>
                                    <?php
                                        $i =0;
                                        $categParent = recupCategorie();
                                        $res = count($categParent);
                                    for ($i; $i<$res;$i++){
                                        $allCateg = recupSousCategorieParCategorie($categParent[$i]['id_categorie']);
                                    ?>
                                        <option value="<?php echo $categParent[$i]['id_categorie']?>">  <?php echo ">".$categParent[$i]['nom_categorie']?></option>
                                        <?php
                                            foreach ($allCateg as $categorie){
                                            $nomsousCateg = recupNomParId($categorie['id_categorie_1']);
                                        ?>
                                        <option value="<?php echo $categorie['id_categorie_1']; ?>"> <?php echo $nomsousCateg->nom_categorie; ?>
                                    <?php   }


                                    }
                                         foreach ($sansParent as $unSansParent){ ?>
                                            <option value="<?php echo $unSansParent['id_categorie']?>"><?php echo ">".$unSansParent['nom_categorie'];?></option>

                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                <!--        Catégorie choisie -->
                        <div class="form-group" >
                            <label for="modifCategorie" class="col-sm-2 control-label">Modifier</label>
                            <div class="col-sm-6">
                                <input type="text" id="modifCategorie" class="form-control" name="modifCategorie" placeholder="Categorie choisie">
                                <input type="hidden" id="idCategHidden" name="idCateg">
                            </div>
                        </div>
                <!--        Bouton validation -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" name="modifCateg" value="Modifier">
                                <input type="submit" class="btn btn-danger" name="modifCateg" value="Supprimer">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <form method="POST" action="index.php?c=listeCategorie&a=modifierParent" >
        <div class="col-md-5  col-md-offset-6">
            <div class="content-box-large ">
                <!--        Liste categorie -->
                <div class="panel-heading">
                    <div class="panel-title">Modifier Catégorie Parente</div>
                </div>

                <div class="panel-body ">
                    <div class="form-group" >
                        <div class="col-md-5">
                         <label  class="col-md-12 control-label">Destination </label>
                            <select class="selectpicker" name="destination">
                                <?php
                                $aModif = afficherToutesCategories();
                                    foreach ($aModif as $cat){
                                        ?>
                                        <option value="<?php echo $cat['id_categorie'];?>" ><?php echo $cat['nom_categorie']?> </option>";
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-5">
                           <label  class="col-md-12 control-label">A déplacer</label>
                            <select class="selectpicker" name="aDeplacer">
                                <?php
                                $catCible = afficherToutesCategories();
                                foreach ($catCible as $cat){
                                ?>
                                    <option value="<?php echo $cat['id_categorie'];?>"><?php echo $cat['nom_categorie']?> </option>";
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" name="modifParent" value="Modifier">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>