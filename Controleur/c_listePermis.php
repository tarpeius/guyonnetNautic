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
        case "supprimer":
            $permisManag = new PermisManager();
            $types = $permisManag->afficherTypePermis();
            $listePermis = $permisManag->afficherToutPermis();
            $idPermis = $_GET['id'];
            $coursPermis = $permisManag->afficherCoursPermis($idPermis);
            $permis = new Permis($idPermis);

            foreach ($coursPermis as $coursPermi) {
                $permisManag->supprimerAssociationPermis($coursPermi['id_coursPermis'],$permis);
                $permisManag->supprimerCoursPermis($coursPermi['id_coursPermis']);
            }

            $permisManag->supprimerPermis($permis);
            $validation = "Le permis a bien été supprimé";
            include('Vue/backend/v_listePermis.php');
            break;
        case "modifier":{
            $permisManag = new PermisManager();
            $types = $permisManag->afficherTypePermis();
            $listePermis = $permisManag->afficherToutPermis();
            $idPermis = $_POST['idPermis'];
            $type = $_POST['typePermis'];
            $mois = $_POST['moisPermis'];
            $annee = $_POST['anneePermis'];
            $dateExamen = $_POST['dateExamen'];
            $lieuExamen = $_POST['lieuExamen'];
            $arrayPermis = array (
                'id_permis' => $idPermis,
                'mois_permis' => $mois,
                'annee_permis' => $annee,
                'date_examen_permis' => $dateExamen,
                'lieu_examen_permis' => $lieuExamen,
                'id_typePermis' => $type,
            );

            $permis = new Permis($arrayPermis);

            if (!empty($_POST['cours1'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours1'],
                    'horaires_coursPermis' => $_POST['cours1'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours2'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours2'],
                    'horaires_coursPermis' => $_POST['cours2'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours3'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours3'],
                    'horaires_coursPermis' => $_POST['cours3'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours4'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours4'],
                    'horaires_coursPermis' => $_POST['cours4'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours5'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours5'],
                    'horaires_coursPermis' => $_POST['cours5'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours6'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours6'],
                    'horaires_coursPermis' => $_POST['cours6'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours7'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours7'],
                    'horaires_coursPermis' => $_POST['cours7'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            if (!empty($_POST['cours8'])) {
                $arrayCours = array(
                    'id_coursPermis' => $_POST['idCours8'],
                    'horaires_coursPermis' => $_POST['cours8'],
                );
                $newCours = new Cours_permis($arrayCours);
                $permisManag->modifierPermis($permis);
                $permisManag->modifierCoursPermis($newCours);
            }
            $validation = "Le permis a bien été modifié";
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

            $arrayPermis = array (
                'mois_permis' => $mois,
                'annee_permis' => $annee,
                'date_examen_permis' => $dateExamen,
                'lieu_examen_permis' => $lieuExamen,
                'id_typePermis' => $type,
            );

            $newPermis = new Permis($arrayPermis);
            var_dump($newPermis);
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
            include('Vue/backend/v_pagePermis.php');
            $validation = "Permis ajouté";
            break;
        }
        case "default":{
            include ('Vue/backend/v_listePermis.php');
            break;
        }
    }
}