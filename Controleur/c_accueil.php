<?php
	$action = "";
	if(!empty($_REQUEST['a'])){
		$action = $_REQUEST['a'];
	}
	switch($action)
		{
			case "": // a changer selon besoin
			include('Vue/backend/v_accueil.php');
			break;


            case "listeProduits": // a changer selon besoin
            include('Vue/backend/v_listeProduits.php');
            break;
            case "listeCategorie": // a changer selon besoin
            include('Vue/backend/v_listeCategories.php');
            break;
            case "listeFournisseurs": // a changer selon besoin
            include('Vue/backend/v_listeFournisseurs.php');
            break;
            case 'listeCommande':
            include("Vue/backend/v_listeCommande.php");
            break;
            case 'listeClients':
            include("Vue/backend/v_listeClients.php");
            break;
			default:
			include("Vue/backend/v_accueil.php");
			break;
		}
