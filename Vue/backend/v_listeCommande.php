<!--                Contenu page -->
        <!--                Tableau liste commande (Id, reference, client, total, paiement, statut, date, actions) -->
        <div class="col-md-9">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Commandes</div>
                </div>
                <div class="row">
                    <!-- pagination -->
                    <div class="col-xs-12 col-sm-12 col-md-2  pull-right"><div class="input-group">
                            <select class="form-control" id="selectNbLigneCommande" name="">
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
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="">
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
                                foreach ($pageCommande as $uneCommande) {
                                    var_dump($uneCommande);
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
                <!-- pagination -->
                <div class ="row">
                    <div class="col-md-9">
                        <ul class="pagination">
                            <li><a class="pagination-previous <?php if($pageActuelle==1){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeCommande&page=<?php echo ($pageActuelle-1);?>&selectNbLigne=<?php echo $max;?>" >Page précédente</a></li>
                            <?php
                            for($i=1;$i<=$nbpage;$i++){
                                $current="";
                                $disabled = "";
                                if($pageActuelle==($i)){
                                    $current="is-current";
                                    $disabled = "btn disabled";
                                }?>
                                <li><a class="pagination-link <?php echo $current." ".$disabled;?>" href="index.php?c=accueil&a=listeCommande&page=<?php echo ($i) ;?>&selectNbLigne=<?php echo $max;?>" ><?php echo($i); ?></a></li>
                                <?php
                            }
                            ?>
                            <li><a class="pagination-next <?php if($pageActuelle>=($nbpage)){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeCommande&page=<?php echo ($pageActuelle+1);?>&selectNbLigne=<?php echo $max;?>" >Page suivante</a></li>
                        </ul>
                    </div>
                </div>
                <!-- fin pagination -->
            </div>
        </div>
    </div>
</div>