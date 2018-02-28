<!--                Contenu page -->
        <!--                Tableau liste commande (Id, reference, client, total, paiement, statut, date, actions) -->
        <div class="col-md-9">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Commandes</div>
                </div>
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Total</th>
                            <th>Paiement</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <?php
                            $allCommande= afficherToutesCommande();
                            var_dump($allCommande);
                                foreach ($allCommande as $uneCommande) {
                                    ?>
                                    <td> <?php echo $uneCommande['id_commande'] ?></td>
                                    <td> <?php echo $uneCommande['id_client'] ?></td>
                                    <td> <?php echo $uneCommande['valeur_commande'] ?></td>
                                    <td> <?php echo $uneCommande['type_mdpaiement'] ?></td>
                                    <td> <?php echo $uneCommande['date_commande'] ?></td>
                            <td>
                                <a href="index.php?c=listeCommande&a=supprimer&id=<?php echo $uneCommande['id_commande'] ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>