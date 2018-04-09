<?php
// affichage des messages d'erreur ou de validation
if(!empty($erreur)){
    echo"<div class='alert alert-danger'>
                    <strong>".$erreur.".</strong>
                </div>";
}elseif (!empty($validation)){
    echo"<div class='alert alert-success'>
                    <strong>".$validation.".</strong>
                </div>";
}
?>
<!--        Titre page -->
<div class="col-md-9">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Catalogue produits</div>
            <label></label>
            <!--        Bouton créer produit -->
            <div class="panel-options">
                <a href="index.php?c=listeProduits&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer produit</button></a>
            </div>
        </div>
    </div>
    <!--        Contenu page  -->
    <!--        Tableau liste produits (Id, photo, nom, catégorie, prix HT, prix TTC, quantité, statut, actions -->
    <div class="content-box-large">
        <div class="row">
            <!-- pagination -->
            <div class="col-xs-12 col-sm-12 col-md-2  pull-right"><div class="input-group">
                    <select class="form-control" id="selectNbLigneProduit" name="selectNbLigneProduit">
                        <option <?php if ($max == 10){echo "selected";}?>>10</option>
                        <option <?php if ($max == 20){echo "selected";}?>>20</option>
                        <option <?php if ($max == 50){echo "selected";}?>>50</option>
                        <option <?php if ($max == 100){echo "selected";}?>>100</option>
                        <option <?php if ($max == 'Tout'){echo "selected";}?>>Tout</option>
                    </select>
                </div>
            </div>
            <!-- fin pagination -->
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Articles</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pageProduit as $article) {
                    ?>
                    <tr class="odd gradeX">
                        <td>
                            <?php
                            echo $article['reference'];
                            ?>
                        </td>
                        <td>
                            <img src="Util/img/<?php echo $article['photo_article']; ?>" width="150px" height="90px">
                        </td>
                        <td>
                            <?php
                            echo $article['nom_article'];
                            ?>
                        </td>
                        <td class="center">
                            <?php
                            echo $article['nom_categorie'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $article['qte_article'];
                            ?>
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-ok"></span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-<?php echo $article['reference']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                            <a href="index.php?c=listeProduits&a=supprimer&reference=<?php echo $article['reference']?>&tva=<?php echo $article['id_tva'];?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                        </td>
                    </tr>

                    <div id="myModal-<?php echo $article['reference']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <?php
                           // var_dump($article);
                            ?>
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                    </button>
                                    <h4 class="modal-title">Modifier Article</h4>
                                </div>
                                <div class="modal-body">

                                    <form method="POST" action="index.php?c=listeProduits&a=modifier" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nomArticle">Nom</label>
                                            <input class="form-control" type="hidden" name="refArticle" value="<?php echo $article['reference']?>">
                                            <input class="form-control" type="text" name="nomArticle" value="<?php echo $article['nom_article']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nomCategorie">Categorie</label>
                                            <select class="selectpicker" name="nomCategorie">
                                                <?php
                                                    foreach ($nomCategorie as $uneCategorie){
                                                ?>
                                                    <option <?php if($uneCategorie['id_categorie'] == $article['id_categorie']){echo "selected";}?> value="<?php echo $uneCategorie['id_categorie']?>"><?php echo $uneCategorie['nom_categorie']?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageArticle">Photo</label>
                                            <img class="imageArticle" src="Util/img/<?php echo $article['photo_article'] ?>" width="150px" height="90px">
                                            <input type="file" class="btn btn-default" name="photoArticle">
                                        </div>
                                        <div class="form-group">
                                            <label for="prixArticle">Prix</label>
                                            <input class="form-control" type="number" name="prixArticle" value="<?php echo $article['prix_article']; ?>" step="0.01">
                                        </div>
                                        <div class="form-group">
                                            <label for="resumeArticle">Resume</label>
                                            <textarea class="form-control" rows="5" name="resumeArticle"><?php echo $article['resume_article']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="descriptionArticle">Description</label>
                                            <textarea class="form-control" rows="5" name="descArticle"><?php echo $article['desc_article']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantiteArticle">Quantite</label>
                                            <input class="form-control" type="number" name="qteArticle" value="<?php echo $article['qte_article']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="poidsArticle">Poids</label>
                                            <input class="form-control" type="number" name="poidsArticle" value="<?php echo $article['poids_article']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="poidsArticle">Dimensions (L / l / H)</label>
                                            <input class="form-control" type="text" name="dimArticle" value="<?php echo $article['dimensions_article']; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="longueurArticle">Longueur</label>
                                            <input class="form-control" type="number" name="longueurArticle" step="0.01">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeurArticle">Largeur</label>
                                            <input class="form-control" type="number" name="largeurArticle" step="0.01">
                                        </div>
                                        <div class="form-group">
                                            <label for="hauteurArticle">Hauteur</label>
                                            <input class="form-control" type="number" name="hauteurArticle" step="0.01">
                                        </div>


                                        <input type="submit" class="btn btn-success" value="Modifier">
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- pagination -->
        <div class ="row">
            <div class="col-md-9">
                <ul class="pagination">
                    <li><a class="pagination-previous <?php if($pageActuelle==1){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeProduits&page=<?php echo ($pageActuelle-1);?>&selectNbLigne=<?php echo $max;?>" >Page précédente</a></li>
                    <?php
                    for($i=1;$i<=$nbpage;$i++){
                        $current="";
                        $disabled = "";
                        if($pageActuelle==($i)){
                            $current="is-current";
                            $disabled = "btn disabled";
                        }?>
                        <li><a class="pagination-link <?php echo $current." ".$disabled;?>" href="index.php?c=accueil&a=listeProduits&page=<?php echo ($i) ;?>&selectNbLigne=<?php echo $max;?>" ><?php echo($i); ?></a></li>
                        <?php
                    }
                    ?>
                    <li><a class="pagination-next <?php if($pageActuelle>=($nbpage)){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeProduits&page=<?php echo ($pageActuelle+1);?>&selectNbLigne=<?php echo $max;?>" >Page suivante</a></li>
                </ul>
            </div>
        </div>
        <!-- fin pagination -->
    </div>
</div>
</div>
</div>
