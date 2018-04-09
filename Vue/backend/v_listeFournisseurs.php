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
<div
<!--                Titre page -->
<div class="col-md-9">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Marques</div>
            <label></label>
            <!--        Bouton créer Marque -->
            <div class="panel-options">
                <a href="index.php?c=listeFournisseurs&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer Marque</button></a>
            </div>
        </div>
    </div>
    <!--                Contenu page -->
    <!--            Tableau liste Marque(Id, logo, nom, nb produit, affichée, actions -->
    <div class="content-box-large">
        <div class="row">
            <!-- pagination -->
            <div class="col-xs-12 col-sm-12 col-md-2  pull-right">
                <div class="input-group">
                    <select class="form-control" id="selectNbLigneFournisseur" name="selectNbLigneFournisseur">
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
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="p">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Nom</th>
                    <th>Nombre de produits</th>
                    <th>Affichée</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pageMarque as $marque) {
                    ?>
                    <tr class="odd gradeX">
                        <td>
                            <?php
                            echo $marque['id_marque'];
                            ?>
                        </td>
                        <td>
                            <img class="imageLogo" src="Util/img/<?php echo $marque['logo_marque'] ?>">
                        </td>
                        <td>
                            <?php
                            echo $marque['nom_marque'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $marque['qte_prod_marque'];
                            ?>
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-ok"></span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-<?php echo $marque['id_marque']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                            <a href="index.php?c=listeFournisseurs&a=modifier&idMarque=<?php echo $marque['id_marque']; ?>&nomMarque=<?php echo $marque['nom_marque']; ?>&logoMarque=<?php echo $marque['logo_marque'] ?>"></a>

                            <a href="index.php?c=listeFournisseurs&a=supprimer&selectNbLigne=<?php echo $max?>&idMarque=<?php echo $marque['id_marque']; ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>

                        </td>
                    </tr>

                    <div id="myModal-<?php echo $marque['id_marque']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;
                                    </button>
                                    <h4 class="modal-title">Modifier Marque</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="index.php?c=listeFournisseurs&a=modifier" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nomMarque">Nom</label>
                                            <input class="form-control" type="hidden" name="idMarque" value="<?php echo $marque['id_marque']?>">
                                            <input class="form-control" type="text" name="nomMarque" value="<?php echo $marque['nom_marque']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="imageLogo">Logo</label>
                                            <img class="imageLogo" src="Util/img/<?php echo $marque['logo_marque'] ?>">
                                        </div>
                                        <input type="file" class="btn btn-default" name="logoMarque">
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
                    <li><a class="pagination-previous <?php if($pageActuelle ==1){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeFournisseurs&page=<?php echo ($pageActuelle-1);?>&selectNbLigne=<?php echo $max;?>" >Page précédente</a></li>
                    <?php
                    for($i=1;$i<=$nbpage;$i++){
                        $current="";
                        $disabled = "";
                        if($pageActuelle==($i)){
                            $current="is-current";
                            $disabled = "btn disabled";
                        }?>
                        <li><a class="pagination-link <?php echo $current." ".$disabled;?>" href="index.php?c=accueil&a=listeFournisseurs&page=<?php echo ($i) ;?>&selectNbLigne=<?php echo $max;?>" ><?php echo($i); ?></a></li>
                        <?php
                    }
                    ?>
                    <li><a class="pagination-next <?php if($pageActuelle>=($nbpage)){echo "btn disabled";}?>" href="index.php?c=accueil&a=listeFournisseurs&page=<?php echo ($pageActuelle+1);?>&selectNbLigne=<?php echo $max;?>" >Page suivante</a></li>
                </ul>

            </div>
        </div>
        <!-- fin pagination -->
    </div>
</div>
</div>
</div>
