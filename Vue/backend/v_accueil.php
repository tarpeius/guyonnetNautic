
<!--        Contenu page -->
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Dernieres Marques</div>
                        </div>
                        <div class="panel-body">
                            <?php
                            foreach ($dernieresMarques as $uneMarque){
                                echo "Marque n° ".$uneMarque['id_marque']." Nom : ".$uneMarque['nom_marque']." ";
                                echo "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">Dernieres commandes</div>
                            </div>
                            <div class="content-box-large box-with-header">
                                <?php
                                foreach ($dernieresCommande as $uneCommande){
                                    echo "Commande n° ".$uneCommande['id_commande']." passer le ".$uneCommande['date_commande']." d'une valeur de ".$uneCommande['valeur_commande']." ";
                                    echo "<br>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">Dernier clients</div>
                            </div>
                            <div class="content-box-large box-with-header">
                                <?php
                                    foreach ($derniersClients as $unClient){
                                        echo "Client n° ".$unClient['id_client']." Nom : ".$unClient['nom_client']." Prenom : ".$unClient['prenom_client']." ";
                                        echo "<br>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">Creation Rapide</div>
                    </div>
                    <div class="content-box-large box-with-header">

                        <a href="index.php?c=listeProduits&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer Produit</button></a>
                        <a href="index.php?c=listeFournisseurs&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer Marque</button></a>
                        <a href="index.php?c=listeCategorie&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer Catégorie</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>