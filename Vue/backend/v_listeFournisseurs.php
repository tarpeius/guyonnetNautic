<!--                Titre page -->
        <div class="col-md-9">
            <div class="content-box-large">
                <div class="panel-heading">
                        <div class="panel-title">Marques</div>

        <!--        Bouton créer Marque -->
                    <div class="panel-options">
                        <a href="index.php?c=listeFournisseurs&a=nouveau"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer Marque</button></a>
                    </div>
                </div>
            </div>
<!--                Contenu page -->
        <!--            Tableau liste Marque(Id, logo, nom, nb produit, affichée, actions -->
            <div class="content-box-large">
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
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
                            $allMarque = afficherToutesMarques();
                            foreach ($allMarque as $marque){
                        ?>
                        <tr class="odd gradeX">
                            <td>
                                <?php
                                echo $marque['id_marque'];
                                ?>
                            </td>
                            <td>
                                <img class="imageLogo" src="Util/img/<?php echo $marque['logo_marque']?>">
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
                                <button type="button" id="<?php echo $marque['id_marque'];?>" onclick="mafonction()" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span></button>
                                <a href="index.php?c=listeFournisseurs&a=modifier&idMarque=<?php echo $marque['id_marque'] ;?>&nomMarque=<?php echo $marque['nom_marque'] ;?>&logoMarque=<?php echo $marque['logo_marque']?>"></a>
                                <a href="index.php?c=listeFournisseurs&a=supprimer&idMarque=<?php echo $marque['id_marque'] ;?>"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<h2>Modal Example</h2>

<!-- Modal -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <script>
//                    function getId(monId) {
//                        alert(monId);
//                    }
                    function mafonction() {
                        var x = document.getElementById("myBtn");

                    }
                </script>
                <?php
                    $uneMarque = afficherToutesMarques();
                    var_dump($uneMarque);
                    var_dump($_GET);
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
