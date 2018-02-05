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
            if(!empty($_POST['nomMarque'])){
                $nom = $_POST['nomMarque'];
                $logo = $_POST['logoMarque'];

                if ($nom != ''){
                    nouvelleMarque($bdd,$nom,$logo);
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
        default:
            include("Vue/backend/v_accueil.php");
            break;
    }

?>