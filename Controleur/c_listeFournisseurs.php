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
        var_dump($_REQUEST);
        if(!empty($_POST)){
            if ($_POST['nomMarque'] != ''){
                $nom = $_POST['nomMarque'];
                var_dump($_FILES);
                uploadImg($_FILES['logoMarque']);
                nouvelleMarque($bdd,$nom,$_FILES['logoMarque']['name']);
                $validation = "L'article a bien été ajouté";
                var_dump($validation);
            }else{
                $erreur = "Le nom de l'article ne peut être vide";
            }
        }else{
            $erreur = "Le nom de l'article ne peux être vide";
        }
        include('Vue/backend/v_pageFournisseur.php');
        break;
    case "supprimer":
        var_dump($_GET);
        if (!empty($_GET)){
            $id = $_GET['idMarque'];
            $ref = afficherRefSuppMarque($id);
            var_dump($ref);
            for ($i=0;$i<count($ref);$i++) {
                supprimerCategoriserMarqueOuArticle($ref[$i]['reference']);
            }
            supprimerArticleMarque($id);
            supprimerMarque($id);
            $validation = "L'article a bien été supprimé";
            var_dump($validation);
        }else{
            $erreur = "erreur de la suppression de l'article";
            var_dump($erreur);
        }
        include ('Vue/backend/v_listeFournisseurs.php');
        break;
    case "modifier":
        var_dump($_POST);
        var_dump($_FILES);
        if (!empty($_POST)){
            $id = $_POST['idMarque'];
            $nom = $_POST['nomMarque'];
            if (!empty($nom) && !empty($_FILES)){
                uploadImg($_FILES['logoMarque']);
                modifierMarque($id,$nom,$_FILES['logoMarque']['name']);
                $validation = "L'article a bien été modifié";
                var_dump($validation);
            }else{
                $erreur = "veuillez renseigner les champs";
                var_dump($erreur);
            }
        }

        include ('Vue/backend/v_listeFournisseurs.php');
        break;
    default:
        include("Vue/backend/v_accueil.php");
        break;
}

?>