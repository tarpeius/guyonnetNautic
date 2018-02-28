<!--        Contenu page -->
<div class="col-md-10">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Clients</div>
        </div>
        <!--        Tableau liste client -->
        <div class="panel-body">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse e-mail</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Inscription</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX">
                    <?php
                       // $pagePays = afficherToutClient();
                        foreach ($pageClient as $client){
                            ?>

                            <tr>
                                <td> <?php echo $client['id_client']; ?></td>
                                <td> <?php echo $client['nom_client']; ?></td>
                                <td> <?php echo $client['prenom_client']; ?></td>
                                <td> <?php echo $client['email_client']; ?></td>
                                <td> <?php echo $client['date_naissance']; ?></td>
                                <td> <?php echo $client['adresse_client']; ?></td>
                                <td> <?php echo $client['cp_client']; ?></td>
                                <td> <?php echo $client['date_inscription']; ?></td>
                                <td><button id="<?php echo $client['id_client'];?>" onclick="tarace(this);" class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $client['id_client'];?>" ><i class="glyphicon glyphicon-pencil"></i></button> <a href="index.php?c=listeClient&a=supprimer&id=<?php echo $client['id_client'];?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                            </tr>

                <div id="myModal-<?php echo $client['id_client'];?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="index.php?c=listeClient&a=ajout">
                                    <div class="form-group">
                                        <label for="nomClient">Nom</label>
                                        <input class="form-control" type="text" name="nomClient" value="<?php echo $client['nom_client']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenomClient">Prenom</label>
                                        <input class="form-control" type="text" name="prenomClient" value="<?php echo $client['prenom_client']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateNaissance">Date de Naissance</label>
                                        <input class="form-control" type="text" name="dateNaissance" value="<?php echo $client['date_naissance']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailClient">Email</label>
                                        <input class="form-control" type="text" name="emailClient" value="<?php echo $client['email_client']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="adresseClient">Adresse</label>
                                        <input class="form-control" type="text" name="adresseClient" value="<?php echo $client['adresse_client']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="cpClient">Code Postal</label>
                                        <input class="form-control" type="text" name="cpClient" value="<?php echo $client['cp_client']; ?>">
                                    </div>
                                    <input class="form-control" type="hidden" name="dateInscri" value="<?php echo $client['date_inscription']; ?>">
                                    <input class="form-control" type="hidden" name="mdp" value="<?php echo $client['mdp_client']; ?>">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo $client['id_client']; ?>">
                                    <input type="submit" class="btn btn-default" value="Modifier">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
            <div class ="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-10 pull-right"><div class="input-group">
                        <select class="form-control" id="selectNbLigneClient" name="selectNbLigne">
                            <option <?php if ($max == 10){echo "selected";}?>>10</option>
                            <option <?php if ($max == 20){echo "selected";}?>>20</option>
                            <option <?php if ($max == 50){echo "selected";}?>>50</option>
                            <option <?php if ($max == 100){echo "selected";}?>>100</option>
                            <option <?php if ($max == 'Tout'){echo "selected";}?>>Tout</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-11">
                <ul class="pagination">
                    <li><a class="pagination-previous <?php if($pageActuelle==1){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeClients&page=<?php echo ($pageActuelle-1);?>&selectNbLigne=<?php echo $max;?>" >Page précédente</a></li>
                    <?php
                    for($i=1;$i<=$nbpage;$i++){
                        $current="";
                        $disabled = "";
                        if($pageActuelle==($i)){
                            $current="is-current";
                            $disabled = "btn disabled";
                        }?>
                        <li><a class="pagination-link <?php echo $current." ".$disabled;?>" href="index.php?c=accueil&a=listeClients&page=<?php echo ($i) ;?>&selectNbLigne=<?php echo $max;?>" ><?php echo($i); ?></a></li>
                        <?php
                    }
                    ?>
                    <li><a class="pagination-next <?php if($pageActuelle>=($nbpage)){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeClients&page=<?php echo ($pageActuelle+1);?>&selectNbLigne=<?php echo $max;?>" >Page suivante</a></li>
                </ul>

            </div>
        </div>
        <!-- fin pagination -->
    </div>
</div>
</div>
</div>
