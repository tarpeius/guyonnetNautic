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
            include('Vue/backend/v_listeCommande.php');
            break;
        default:
            include("Vue/backend/v_accueil.php");
            break;
    }