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

    //include("Vue/structure/v_bandeau.php");
    if (!empty($_SESSION['isActive'])){
        include("Vue/Structure/v_bandeau.php");
    }

        if ((!isset($_REQUEST['c'])) || (!isset($_REQUEST['a']))) {
            // controleur -- action
            $uc = 'accueil';
        } else {
            $uc = $_REQUEST['c'];
        }


                if (!empty($_GET['c'])) {
                    $uc = $_GET['c'];
                    switch ($uc) {
                        case 'accueil':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_accueil.php");
                            } else {
                                var_dump($_SESSION);
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour pouetez.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'listeProduits':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_listeProduits.php");
                            } else {
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour poursuivre.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'listeFournisseurs':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_listeFournisseurs.php");
                            } else {
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour poursuivre.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'listeCategorie':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_listeCategorie.php");
                            } else {
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour poursuivre.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'listeCommande':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_listeCommande.php");
                            } else {
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour poursuivre.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'listeClient':
                            if (!empty($_SESSION["isActive"])) {
                                include("Controleur/c_listeClient.php");
                            } else {
                                $erreur = "Vous êtes déconnecté, merci de vous reconnecter pour poursuivre.";
                                include('Vue/backend/v_connexion.php');
                            }
                            break;
                        case 'connexion':
                            {
                                include('Controleur/c_connexion.php');
                                break;
                            }
                        default:
                            include("Vue/Structure/v_nopage.php");
                            break;
                    }

            } else {
                include('Vue/backend/v_connexion.php');
            }

            //ob_end_flush();
            include("Vue/Structure/v_footer.php");

