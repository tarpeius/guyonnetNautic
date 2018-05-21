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
<!--        Contenu page -->
<div class="col-md-9">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Permis</div>
            <label></label>
            <!--        Bouton créer produit -->
            <div class="panel-options">
                <a href="index.php?c=listePermis&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Nouveau permis</button></a>
            </div>
        </div>
    </div>
    <div class="content-box-large">
<!--        <div class="panel-heading">-->
<!--            <div class ="row">-->
<!--                <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-10 pull-right"><div class="input-group">-->
<!--                        <select class="form-control" id="selectNbLigneClient" name="selectNbLigne">-->
<!--                            <option --><?php //if ($max == 10){echo "selected";}?><!--></option>
<!--                            <option --><?php //if ($max == 20){echo "selected";}?><!--></option>
<!--                            <option --><?php //if ($max == 50){echo "selected";}?><!--></option>
<!--                            <option --><?php //if ($max == 100){echo "selected";}?><!--></option>
<!--                            <option --><?php //if ($max == 'Tout'){echo "selected";}?><!--></option>
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!--        Tableau liste client -->
        <div class="panel-body">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Permis</th>
                    <th>Mois</th>
                    <th>Annee</th>
                    <th>Examen</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($listePermis)) {
                    foreach ($listePermis as $permis) {
                        ?>
                        <tr class="odd gradeX">
                        <tr>
                            <td>
                                <?php echo $permis['id_permis'] ?>
                            </td>
                            <td>
                                <?php echo $permis['nom_permis'] ?>
                            </td>
                            <td>
                                <?php echo $permis['mois_permis'] ?>
                            </td>
                            <td>
                                <?php echo $permis['annee_permis'] ?>
                            </td>
                            <td>
                                <?php echo $permis['date_examen_permis'] ?>
                            </td>
                            <td>
                                <button id="" class="btn btn-info" data-toggle="modal"
                                        data-target="#myModal-<?php echo $permis['id_permis']; ?>"><i
                                            class="glyphicon glyphicon-cog"></i></button>
                                <a href="index.php?c=listePermis&a=supprimer&id=<?php echo $permis['id_permis']; ?>">
                                    <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                </a></td>
                        </tr>
                        <div id="myModal-<?php echo $permis['id_permis']; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="index.php?c=listePermis&a=modifier">
                                            <div class="form-group">
                                                <label for="typePermis">Permis</label>
                                                <select name="typePermis" class="form-control form-control-sm">
                                                    <?php
                                                    foreach ($types as $typePermis) {
                                                        if ($typePermis['nom_permis'] == $permis['nom_permis']) {
                                                            echo "<option value='".$typePermis['id_typePermis']."' selected>
                                                           
                                                                    ".$typePermis['nom_permis']."
                                                            
                                                                  </option>";
                                                        } else {
                                                            echo "<option value='".$typePermis['id_typePermis']."'>
                                                           
                                                                    ".$typePermis['nom_permis']."
                                                            
                                                                  </option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="moisPermis">Mois</label>
                                                <input class="form-control" type="text" name="moisPermis"
                                                       value="<?php echo $permis['mois_permis'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="anneePermis">Année</label>
                                                <input class="form-control" type="text" name="anneePermis"
                                                       value="<?php echo $permis['annee_permis'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="dateExamen">Date examen</label>
                                                <input class="form-control" type="text" name="dateExamen"
                                                       value="<?php echo $permis['date_examen_permis'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="lieuExamen">Lieu examen</label>
                                                <input class="form-control" type="text" name="lieuExamen"
                                                       value="<?php echo $permis['lieu_examen_permis'] ?>">
                                            </div>
                                            <?php
                                            $cours = $permisManag->afficherCoursPermis($permis['id_permis']);
                                            foreach ($cours as $key => $test) {
                                                ?>
                                                <div class="form-group">
                                                    <label for="cours">Cours <?php echo $key + 1 ?></label>
                                                    <input class="form-control" type="hidden" name="idCours<?php echo $key + 1 ?>"
                                                           value="<?php echo $test['id_coursPermis']?>">
                                                    <input class="form-control" type="text" name="cours<?php echo $key + 1 ?>"
                                                           value="<?php echo $test['horaires_coursPermis'] ?>">
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <input type="hidden" name="idPermis"
                                                   value="<?php echo $permis['id_permis']; ?>">
                                            <input type="submit" class="btn btn-default" value="Modifier">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- pagination -->
<!--        <div class ="row">-->
<!--            <div class="col-md-11">-->
<!--                <ul class="pagination">-->
<!--                    <li><a class="pagination-previous --><?php //if($pageActuelle==1){echo "btn disabled";}?><!--" href="index.php?c=accueil&a=listeClients&page=--><?php //echo ($pageActuelle-1);?><!--&selectNbLigne=--><?php //echo $max;?><!--" >Page précédente</a></li>-->
<!--                    --><?php
//                    for($i=1;$i<=$nbpage;$i++){
//                        $current="";
//                        $disabled = "";
//                        if($pageActuelle==($i)){
//                            $current="is-current";
//                            $disabled = "btn disabled";
//                        }?>
<!--                        <li><a class="pagination-link --><?php //echo $current." ".$disabled;?><!--" href="index.php?c=accueil&a=listeClients&page=--><?php //echo ($i) ;?><!--&selectNbLigne=--><?php //echo $max;?><!--" >--><?php //echo($i); ?><!--</a></li>-->
<!--                        --><?php
//                    }
//                    ?>
<!--                    <li><a class="pagination-next --><?php //if($pageActuelle>=($nbpage)){echo "btn disabled";}?><!--" href="index.php?c=accueil&a=listeClients&page=--><?php //echo ($pageActuelle+1);?><!--&selectNbLigne=--><?php //echo $max;?><!--" >Page suivante</a></li>-->
<!--                </ul>-->
<!---->
<!--            </div>-->
<!--        </div>-->
        <!-- fin pagination -->
    </div>
</div>
</div>