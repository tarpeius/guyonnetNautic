<?php

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}
switch($action)
{
    case "afficher": // a changer selon besoin
        include('Vue/backend/v_listeFournisseurs.php');
        break;
    case "nouveau":
        include ('Vue/backend/v_pageFournisseur.php');
        break;
    case "ajout": // a changer selon besoin
        if(!empty($_POST)){
            if ($_POST['nomMarque'] != ''){
                $nom = $_POST['nomMarque'];
                uploadImg($_FILES['logoMarque']);
                nouvelleMarque($bdd,$nom,$_FILES['logoMarque']['name']);
                $validation = "L'article a bien été ajouté";
            }else{
                $erreur = "Le nom de l'article ne peut être vide";
            }
        }else{
            $erreur = "Le nom de l'article ne peux être vide";
        }
        include('Vue/backend/v_pageFournisseur.php');
        break;
    case "supprimer":
        if (!empty($_GET)){
            $id = $_GET['idMarque'];
            $ref = afficherRefSuppMarque($id);
            for ($i=0;$i<count($ref);$i++) {
                supprimerCategoriserMarque($ref[$i]['reference']);
            }
            supprimerArticleMarque($id);
            supprimerMarque($id);
            $validation = "L'article a bien été supprimé";
        }else{
            $erreur = "erreur de la suppression de l'article";
        }
        // pagination
        $nbCount = 0;
        $nbpage= 0;
        // Pagination
        // Recuperation du nombre de pays par zone
        $nbCount = selectCountToutesMarques();
        // Verification si page existe
        if (isset($_GET['page'])){
            $pageActuelle=intval($_GET['page']);
            if ($pageActuelle>$nbCount[0]){
                $pageActuelle=$nbCount[0];
            }
        }else{
            $pageActuelle=1;
        }
        // Choix du nombre de ligne
        if (!empty($_GET['selectNbLigne'])){
            $max=$_GET['selectNbLigne'];
        }else{
            $max = 10;
        }
        if ($max == 'Tout'){
            $pageMarque = afficherToutesMarques();
        }else {
            $min = 0;
            $min = ($pageActuelle - 1) * $max;
            $nbpage = ceil(($nbCount[0]) / $max);
            // modif
            $pageMarque = afficherMarquesPage($min, $max);
        }
        include ('Vue/backend/v_listeFournisseurs.php');
        break;
    case "modifier":
        if (!empty($_POST)){
            $id = $_POST['idMarque'];
            $nom = $_POST['nomMarque'];
            if (!empty($nom) && !empty($_FILES)){
                uploadImg($_FILES['logoMarque']);
                modifierMarque($id,$nom,$_FILES['logoMarque']['name']);
                $validation = "L'article a bien été modifié";
            }else{
                $erreur = "veuillez renseigner les champs";
            }
        }
        // pagination
        $nbCount = 0;
        $nbpage= 0;
        // Pagination
        // Recuperation du nombre de pays par zone
        $nbCount = selectCountToutesMarques();
        // Verification si page existe
        if (isset($_GET['page'])){
            $pageActuelle=intval($_GET['page']);
            if ($pageActuelle>$nbCount[0]){
                $pageActuelle=$nbCount[0];
            }
        }else{
            $pageActuelle=1;
        }
        // Choix du nombre de ligne
        if (!empty($_GET['selectNbLigne'])){
            $max=$_GET['selectNbLigne'];
        }else{
            $max = 10;
        }
        if ($max == 'Tout'){
            $pageMarque = afficherToutesMarques();
        }else {
            $min = 0;
            $min = ($pageActuelle - 1) * $max;
            $nbpage = ceil(($nbCount[0]) / $max);
            // modif
            $pageMarque = afficherMarquesPage($min, $max);
        }
        include ('Vue/backend/v_listeFournisseurs.php');
        break;
    default:
        include("Vue/backend/v_accueil.php");
        break;
}

?>