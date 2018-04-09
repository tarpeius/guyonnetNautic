<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 31/01/2018
 * Time: 14:53
 */
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}


if (isset($action)){
    switch ($action){
        case "afficher":{
            include('Vue/backend/v_listeClients.php');
            break;
        }
        case "supprimer":{
           supprimerCommandeClient($_GET['id']);
           supprimerClient($_GET['id']);

           // pagination
            $nbCount = 0;
            $nbpage= 0;
            // Pagination
            // Recuperation du nombre de pays par zone
            $nbCount = selectCountTousClient();
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
                $pageClient = afficherToutClient();
            }else {
                $min = 0;
                $min = ($pageActuelle - 1) * $max;
                $nbpage = ceil(($nbCount[0]) / $max);
                // modif
                $pageClient = afficheClientPage($min, $max);
            }
           include('Vue/backend/v_listeClients.php');
           break;
        }
        case "modifier":{
            if (isset($_GET['id'])){
                $id_Client = $_GET['id'];
            }

            include("Vue/backend/v_listeClients.php");
            break;
        }
        case "ajout":{
            if ($_POST['mdp'] == ''){
                $_POST['mdp'] = NULL;
            }
            modifierClient($_POST['nomClient'],$_POST['prenomClient'],$_POST['dateNaissance'], $_POST['emailClient'], $_POST['adresseClient'], $_POST['cpClient'], $_POST['dateInscri'], $_POST['mdp'],  $_POST['id']);
            $validation = "Le client a bien été modifier";
            var_dump($validation);
            // pagination

            $nbCount = 0;
            $nbpage= 0;
            // Pagination
            // Recuperation du nombre de pays par zone
            $nbCount = selectCountTousClient();
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
                $pageClient = afficherToutClient();
            }else {
                $min = 0;
                $min = ($pageActuelle - 1) * $max;
                $nbpage = ceil(($nbCount[0]) / $max);
                // modif
                $pageClient = afficheClientPage($min, $max);
            }
            include("Vue/backend/v_listeClients.php");
            break;
        }
        case "default":{
            include ('Vue/backend/v_listeClients.php');
            break;
        }
    }
}