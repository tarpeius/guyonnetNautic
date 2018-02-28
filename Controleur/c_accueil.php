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
                $nbCount = 0;

                // Pagination
                // Recuperation du nombre de pays par zone
                $nbCount = selectCountTousClient();
                var_dump($nbCount);
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
                    var_dump($min);
                    $nbpage = ceil(($nbCount[0]) / $max);
                    // modif
                    $pageClient = afficheClientPage($min, $max);
                    }

            include("Vue/backend/v_listeClients.php");
            break;
			default:
			include("Vue/backend/v_accueil.php");
			break;
		}
