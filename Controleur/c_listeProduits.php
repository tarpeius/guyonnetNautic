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
        if(!empty($_POST)) {
            var_dump($_FILES);
            $nom = $_POST['nomArticle'];
            $reference = intval($_POST['referenceArticle']);
            $resume = $_POST['resumeArticle'];
            $descr = $_POST['descriptionArticle'];
            $qte = intval($_POST['quantiteArticle']);
            $poids = floatval($_POST['poidsArticle']);
            $motor = intval($_POST['motorisationArticle']);
            $dimension = $_POST['longueurArticle'] . "/" . $_POST['largeurArticle'] . "/" . $_POST['hauteurArticle'];
            $tva = $_POST['tvaArticle'];
            $prix = $_POST['prixHTArticle'] * $tva;
            $categorie = $_POST['categorieArticle'];
            $marque = $_POST['marqueArticle'];

            if ($nom != '') {
                uploadImg($_FILES['photoArticle']);
                nouveauArticle($reference,$nom,$prix,$resume,$descr,$qte,$poids,$motor,$dimension,$_FILES['photoArticle']['name'],$marque,$tva);
                nouveauCategoriser($categorie,$reference);
                $validation = "L'article a bien été ajouté";
                var_dump($validation);

            } else {
                $erreur = "Le nom de l'article ne peux être vide";
            }
        }
        include('Vue/backend/v_pageProduit.php');
        break;
    case "supprimer":
        var_dump($_GET);
        if (!empty($_GET['reference']) && !empty($_GET['tva'])){
            $ref = $_GET['reference'];
            $idTva = $_GET['tva'];
            supprimerCategoriserMarque($ref);
            /*supprimerTvaArticle($idTva);*/
            supprimerArticle($ref);
            $validation = "L'article a bien été supprimé";
            var_dump($validation);
        }else{
            $erreur = "erreur de la suppression de l'article";
            var_dump($erreur);
        }
        include ('Vue/backend/v_listeProduits.php');
        break;
    case "modifier":
        var_dump($_GET);
        if (!empty($_POST)){
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
            if (!empty($nom) && isset($_POST['submit'])){
                modifierNomMarque($reference,$nom);
                $validation = "Le nom de l'article a bien été modifié";
                var_dump($validation);
            }elseif (!empty($_POST['logoMarque']) && isset($_POST['submit'])){
                modifierLogoMarque($reference,$photo);
                $validation = "Le logo de l'article a bien été modifié";
                var_dump($validation);
            }elseif (!empty($_POST['nomMarque']) && !empty($_POST['logoMarque']) && isset($_POST['submit'])) {
                modifierMarque($reference,$nom,$photo);
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