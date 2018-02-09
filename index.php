<?php
	// session / error / include
	error_reporting(E_ALL);
	// affiche les erreurs a enlever en prod!!!! 
	ini_set('display_errors', 1);
	// k�c�c� ? 
	//ob_start();
	//session_start();
	date_default_timezone_set('Europe/Paris');

	include("Modele/m_connexion.php");
	include("Modele/m_selections.php");
	include("Modele/m_suppressions.php");
	include("Modele/m_modifications.php");
	include("Modele/m_insertions.php");
	include("Util/fonctions.php");
	include("Vue/Structure/v_header.php") ;
	include("Vue/Structure/v_bandeau.php");
	
	if((!isset($_REQUEST['c']))||(!isset($_REQUEST['a']))) // controleur -- action
	    $uc = 'accueil';
	else
	    $uc = $_REQUEST['c'];
	switch($uc)
	{
	case 'accueil':
	   include("Controleur/c_accueil.php");
	   break;
    case 'listeProduits':
        include("Controleur/c_listeProduits.php");
        break;
    case 'listeFournisseurs':
        include("Controleur/c_listeFournisseurs.php");
        break;
    case 'listeCategorie':
        include("Controleur/c_listeCategorie.php");
        break;
    case 'listeCommande':
        include("Controleur/c_listeCommande.php");
        break;
    case 'listeClient':
        include("Controleur/c_listeClient.php");
        break;
	default:
	   include("Vue/Structure/v_nopage.php");
	   break;
	 }
	//ob_end_flush();
    include("Vue/Structure/v_footer.php") ;
