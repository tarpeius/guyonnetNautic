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
                            <a href="index.php?c=listeProduits&a=supprimer&reference=<?php echo $article['reference']?>&tva=<?php echo $article['id_tva'];?>"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
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
