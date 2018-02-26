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
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
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
                $allArticle = afficherArticleCategorie();
                foreach ($allArticle as $article) {
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
                            <a href="index.php?c=listeProduits&a=supprimer&reference=<?php echo $article['reference']?>&tva=<?php echo $article['id_tva']?>"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    <?php
                    var_dump($article);
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

