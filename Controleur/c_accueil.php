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
      /*      case "connexion": // a changer selon besoin
                var_dump($_REQUEST);
                if ((!empty($_POST['pseudo']))&&(!empty($_POST['pwd']))){
                    var_dump($_REQUEST);
                    $pseudo = $_POST['pseudo'];
                    $mdp = $_POST['pwd'];
                    $valide = isAdmin($pseudo,$mdp);
                    var_dump($valide);
                    if ($valide == 1){
                        $_SESSION['isActive'] = 1;
                        include('Vue/backend/v_accueil.php');
                    }else{

                       // include('Vue/backend/v_connexion.php');
                    }
                }
            break;
      */
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
            case 'deconnexion':
                session_destroy();
            include('/Vue/backend/v_connexion.php');
            break;
			default:
			include("Vue/backend/v_accueil.php");
			break;
		}
