<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 31/01/2018
 * Time: 14:09
 */

$action = "";

	if(!empty($_REQUEST['a'])){
        $action = $_REQUEST['a'];
    }
	switch($action)
    {
        case "": // a changer selon besoin
            include('Vue/backend/v_accueil.php');
            break;
        case "afficher": // a changer selon besoin
            include('Vue/backend/v_listeCommande.php');
            break;
        case "supprimer": // a changer selon besoin
            supprimerCommande($_GET['id']);
            // pagination

            $nbCount = 0;
            $nbpage= 0;
            // Pagination
            // Recuperation du nombre de pays par zone
            $nbCount = selectCountToutesCommandes();
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
                $pageCommande = afficherToutesCommande();
            }else {
                $min = 0;
                $min = ($pageActuelle - 1) * $max;
                $nbpage = ceil(($nbCount[0]) / $max);
                // modif
                $pageCommande = afficherCommandePage($min, $max);
            }
            include('Vue/backend/v_listeCommande.php');
            break;
        default:
            include("Vue/backend/v_accueil.php");
            break;
    }