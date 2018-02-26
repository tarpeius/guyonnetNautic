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
                        $allClient = afficherToutClient();
                        foreach ($allClient as $client){
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
    </div>
</div>
</div>
</div>
<script>
     function tarace(that) {
         id_client = (that.id);
         $.post('index.php?c=accueil&a=listeClients', {variable: id_client});
         console.log(id_client);
     }
</script>
<!-- Modal -->
