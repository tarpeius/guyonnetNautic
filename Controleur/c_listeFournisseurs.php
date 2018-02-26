<?php


    $action = "";
    if(!empty($_REQUEST['a'])){
        $action = $_REQUEST['a'];
    }
    switch($action)
    {
        case "afficher": // a changer selon besoin
            include('Vue/backend/v_pageFournisseur.php');
            break;
        case "ajout": // a changer selon besoin
            include('Vue/backend/v_pageFournisseur.php');
            break;
        case "supprimer":
            var_dump($_GET);
            if (!empty($_GET)){
                $id = $_GET['idMarque'];
                $ref = afficherRefSuppMarque($id);
                supprimerCategoriserMarque($ref);
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
            var_dump($_GET);
            if (!empty($_GET)){
                $id = $_GET['idMarque'];
                $nom = $_GET['nomMarque'];
                $logo = $_GET['logoMarque'];
                if (!empty($nom) && isset($_GET['submit'])){
                    modifierNomMarque($id,$nom);
                    $validation = "Le nom de l'article a bien été modifié";
                    var_dump($validation);
                }elseif (!empty($logo) && isset($_GET['submit'])){
                    modifierLogoMarque($id,$logo);
                    $validation = "Le logo de l'article a bien été modifié";
                    var_dump($validation);
                }elseif (!empty($nom) && !empty($logo) && isset($_GET['submit'])) {
                    modifierMarque($id,$nom,$logo);
                    $validation = "L'article a bien été modifié";
                    var_dump($validation);
                }else{
                    $erreur = "veuillez renseigner les champs";
                    var_dump($erreur);
                }
            }

            include ('Vue/backend/v_pageFournisseur.php');
            break;
        default:
            include("Vue/backend/v_accueil.php");
            break;
    }

?>