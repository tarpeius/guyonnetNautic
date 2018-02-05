<?php

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}
switch($action)
{
    case "afficher": { // a changer selon besoin
        include('Vue/backend/v_listeProduits.php');
        break;
    }
    case "nouveau":{
        include('Vue/backend/v_pageProduit.php');
        break;
    }
    case "ajout": // a changer selon besoin
        var_dump($_REQUEST);
        if(!empty($_POST['nomArticle']) && !empty($_POST['referenceArticle'])){
            $nom = $_POST['nomArticle'];
            $reference = $_POST['referenceArticle'];
            $prix = $_POST['prixTTCArticle'];
            $resume = $_POST['resumeArticle'];
            $descr = $_POST['descriptionArticle'];
            $qte = $_POST['quantiteArticle'];
            $poids = $_POST['poidsArticle'];
            $motor = $_POST['motorisationArticle'];
            $dimension = $_POST['longueurArticle'];
            $photo = $_POST['photoArticle'];

            if ($nom != ''){
                nouveauArticle($bdd,$reference,$nom,$prix,$resume,$descr,$qte,$poids,$motor,$dimension,$photo);
                $validation = "L'article a bien été ajouté";
                var_dump($validation);
            }else{
                $erreur = "Le nom de l'article ne peut être vide";
            }
        }else{
            $erreur = "Le nom de l'article ne peux être vide";
        }
        include('Vue/backend/v_pageProduit.php');
        break;
    default:
        include("Vue/backend/v_accueil.php");
        break;
}

?>