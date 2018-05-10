<?php
//require_once __DIR__.'/../Modele/Classe/autoload.php';
include 'Modele/Classe/Cours_permis.php';
include 'Modele/Classe/Permis.php';
include 'Modele/Classe/PermisManager.php';

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}


if (isset($action)){
    switch ($action){
        case "afficher":{
            include('Vue/backend/v_listePermis.php');
            break;
        }
        case "nouveau":
            $type = new PermisManager();
            $types = $type->afficherTypePermis();
            include('Vue/backend/v_pagePermis.php');
            break;
        case "supprimer":{
            include('Vue/backend/v_listePermis.php');
            break;
        }
        case "modifier":{
            include("Vue/backend/v_listePermis.php");
            break;
        }
        case "ajout":{
            var_dump($_POST);
            $permisManag = new PermisManager();
            $type = $_POST['typePermis'];
            $mois = $_POST['moisPermis'];
            $annee = $_POST['anneePermis'];
            $cours1 = $_POST['cours1'];
            $cours2 = $_POST['cours2'];
            $cours3 = $_POST['cours3'];
            $cours4 = $_POST['cours4'];
            $cours5 = $_POST['cours5'];
            $cours6 = $_POST['cours6'];
            $cours7 = $_POST['cours7'];
            $cours8 = $_POST['cours8'];
            $dateExamen = $_POST['dateExamenPermis'];
            $lieuExamen = $_POST['lieuExamenPermis'];

            $newPermis = new Permis($mois,$annee,$dateExamen,$lieuExamen,$type);
            $permisManag->nouveauPermis($newPermis);

            if (!empty($cours1)) {
                $newCours = new Cours_permis($cours1);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours2)) {
                $newCours = new Cours_permis($cours2);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours3)) {
                $newCours = new Cours_permis($cours3);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours4)) {
                $newCours = new Cours_permis($cours4);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours5)) {
                $newCours = new Cours_permis($cours5);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours6)) {
                $newCours = new Cours_permis($cours6);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours7)) {
                $newCours = new Cours_permis($cours7);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }
            if (!empty($cours8)) {
                $newCours = new Cours_permis($cours8);
                $permisManag->nouveauCoursPermis($newCours);
                $permisManag->nouvelleAssociationPermis($newCours,$newPermis);
            }

            include("Vue/backend/v_listePermis.php");
            break;
        }
        case "default":{
            include ('Vue/backend/v_listePermis.php');
            break;
        }
    }
}