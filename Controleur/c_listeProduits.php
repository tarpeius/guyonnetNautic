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

        if(isset($_POST)) {
            $reference = intval($_POST['referenceArticle']);
            $refOk = verifRefArticle($reference);
            $arrayPhoto[] = $_FILES['photoArticle'];
            $nbPhoto = count($arrayPhoto[0]['name']);
            $nom = $_POST['nomArticle'];
            $resume = $_POST['resumeArticle'];
            $descr = $_POST['descriptionArticle'];
            $qte = intval($_POST['quantiteArticle']);
            $poids = floatval($_POST['poidsArticle']);
            $motor = intval($_POST['motorisationArticle']);
            $longueur = $_POST['longueurArticle'];
            $largeur = $_POST['largeurArticle'];
            $hauteur = $_POST['hauteurArticle'];
            $dimension = $longueur . "/" . $largeur . "/" . $hauteur;
            $tva = $_POST['tvaArticle'];
            $prixHt = $_POST['prixHTArticle'];
            $prix = $prixHt * $tva;
            $categorie = $_POST['categorieArticle'];
            $marque = $_POST['marqueArticle'];
                if ($refOk == false){
                    if ($nom != '') {
                        uploadImg($_FILES['photoPrincipal']);
                        nouveauArticle($reference, $nom, $prix, $resume, $descr, $qte, $poids, $motor, $dimension, $_FILES['photoPrincipal']['name'], $marque, $tva);
                        nouveauCategoriser($categorie, $reference);
                        $keyExist = $arrayPhoto[0]['name'];
                        if (array_key_exists(1, $keyExist)) {
                            foreach ($arrayPhoto as $key => $value) {
                                for ($i = 0; $i <= count($nbPhoto); $i++) {
                                    $arrayFile = [
                                        'name' => $value['name'][$i],
                                        'type' => $value['type'][$i],
                                        'tmp_name' => $value['tmp_name'][$i],
                                        'error' => $value['error'][$i],
                                        'size' => $value['size'][$i]];
                                        $photoExist = verifPhoto($arrayFile);
                                    if($photoExist == false){
                                        uploadImg($arrayFile);
                                        nouvellePhoto($arrayFile, $reference);
                                    }
                                }
                            }
                        } else {
                            $photoExist = verifPhoto($arrayPhoto);
                            $arrayUnePhoto = [
                                'name' => $arrayPhoto[0]['name'][0],
                                'type' => $arrayPhoto[0]['type'][0],
                                'tmp_name' => $arrayPhoto[0]['tmp_name'][0],
                                'error' => $arrayPhoto[0]['error'][0],
                                'size' => $arrayPhoto[0]['size'][0]
                                            ];
                            if($photoExist == false) {
                                uploadImg($_FILES['photoPrincipal']);
                                uploadImg($arrayUnePhoto);
                                nouvellePhoto($arrayUnePhoto, $reference);
                                $validation = "L'article a bien été ajouté";
                            }
                        }
                        $validation = "L'article a bien été ajouté";
                        $reference ="";
                        $refOk = "";
                        $nom = "";
                        $resume = "";
                        $descr = "";
                        $qte = "";
                        $qte = "";
                        $motor = "";
                        $longueur = "";
                        $largeur = "";
                        $hauteur = "";
                        $tva = "";
                        $prixHt = "";
                    }
                }else{
                    $erreur = "La reference existe deja, Veuillez en entrer une nouvelle";
                }
        }
        include('Vue/backend/v_pageProduit.php');
        break;
    case "supprimer":
        if (!empty($_GET['reference']) && !empty($_GET['tva'])){
            $ref = $_GET['reference'];
            $idTva = $_GET['tva'];
            supprimerCategoriserMarque($ref);
            /*supprimerTvaArticle($idTva);*/
            supprimerArticle($ref);
            $validation = "L'article a bien été supprimé";
        }else{
            $erreur = "erreur de la suppression de l'article";
        }

        // pagination
        $nbCount = 0;
        $nbpage= 0;
        // Pagination
        // Recuperation du nombre de pays par zone
        $nbCount = selectCountToutArticles();
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
            $pageProduit = afficherArticleCategorie();
        }else {
            $min = 0;
            $min = ($pageActuelle - 1) * $max;
            $nbpage = ceil(($nbCount[0]) / $max);
            // modif
            $pageProduit = selectArticleCategoriePage($min, $max);
        }
        $nomCategorie= afficherCategorie();
        include ('Vue/backend/v_listeProduits.php');
        break;
    case "modifier":
        if (!empty($_POST)){
            $nom = $_POST['nomArticle'];
            $reference = $_POST['refArticle'];
            $prix = $_POST['prixArticle'];
            $resume = $_POST['resumeArticle'];
            $descr = $_POST['descArticle'];
            $qte = $_POST['qteArticle'];
            $poids = $_POST['poidsArticle'];
            if(empty($_POST['longueurArticle'])&& empty($_POST['largeurArticle'])&& empty($_POST['hauteurArticle'])){
                $temp = photoDimensionArticle($reference);
                $dimension = $temp['dimensions_article'];
            }else{
                $dimension = $_POST['longueurArticle'] . "/" . $_POST['largeurArticle'] . "/" . $_POST['hauteurArticle'];
            }
            if(empty($_FILES['photoArticle']['name'])){
                $temp = photoDimensionArticle($reference);
                $photo = $temp['photo_article'];
            }else{
                $photo = $_FILES['photoArticle']['name'];
            }
            if (!empty($nom)){
                uploadImg($_FILES['photoArticle']);
                modifierArticle($reference,$nom,$prix,$resume,$descr,$qte,$dimension,$poids,$photo);
                modifierCategorieArticle($_POST['nomCategorie'],$reference);
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
        $nbCount = selectCountToutArticles();
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
            $pageProduit = afficherArticleCategorie();
        }else {
            $min = 0;
            $min = ($pageActuelle - 1) * $max;
            $nbpage = ceil(($nbCount[0]) / $max);
            // modif
            $pageProduit = selectArticleCategoriePage($min, $max);
        }
        $nomCategorie= afficherCategorie();
        include ('Vue/backend/v_listeProduits.php');
        break;
    default:
        include("Vue/backend/v_accueil.php");
        break;
}

?>