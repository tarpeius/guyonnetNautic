<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 19:19
 */
?>
<div class="content-box-large">
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
            <legend>Description Permis</legend>
            <!--        Nom input -->
            <div class="form-group">
                <label for="nomPermis" class="col-md-3 control-label">Permis</label>
                <div class="col-sm-2">
                    <select name="nomPermis" class="form-control form-control-sm">
                        <option>Cotier</option>
                        <option>Fluvial</option>
                        <option>Hauturier</option>
                    </select>
                </div>
            </div>
            <!--         input -->
            <div class="form-group">
                <label for="moisPermis" class="col-md-3 control-label">Période</label>
                <div class="col-md-2">
                    <input name="moisPermis" class="form-control form-control-sm" type="text" placeholder="ex: Avril, Automne...">
                </div>
                <label for="moisPermis" class="col-md-1 control-label">Année</label>
                <div class="col-md-2">
                    <input name="moisPermis" class="form-control form-control-sm" type="text" placeholder="ex: 1987, 2077...">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours1">Horaires cours 1</label>
                <div class="col-md-5">
                    <input name="cours1" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours2">Horaires cours 2</label>
                <div class="col-md-5">
                    <input name="cours2" type="text" class="form-control" placeholder="ex: Mardi 3 Avril 19h00 à 20h30">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours4">Horaires cours 4</label>
                <div class="col-md-5">
                    <input name="cours4" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours5">Horaires cours 5</label>
                <div class="col-md-5">
                    <input name="cours5" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours6">Horaires cours 6</label>
                <div class="col-md-5">
                    <input name="cours6" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours7">Horaires cours 7</label>
                <div class="col-md-5">
                    <input name="cours7" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="cours8">Horaires cours 8</label>
                <div class="col-md-5">
                    <input name="cours8" type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="dateExamenPermis" class="col-md-3 control-label">Examen le</label>
                <div class="col-md-2">
                    <input name="dateExamenPermis" class="form-control form-control-sm" type="text" placeholder="ex: Mercredi 13 Avril">
                </div>
                <label for="lieuExamenPermis" class="col-md-1 control-label"> à </label>
                <div class="col-md-2">
                    <input name="lieuExamenPermis" class="form-control form-control-sm" type="text" placeholder="ville">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-7 col-sm-1">
                    <input type="submit" class="btn btn-success" value="Enregistrer">
                </div>
            </div>
        </form>
    </div>
</div>

