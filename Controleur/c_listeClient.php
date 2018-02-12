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
           supprimerClient($_GET['id']);
           include('Vue/backend/v_listeClients.php');
           break;
        }

        case "modifier":{
            if ($_POST['mdp'] == ''){
                $_POST['mdp'] = NULL;
            }
            modifierClient($_POST['nomClient'],$_POST['prenomClient'],$_POST['dateNaissance'], $_POST['emailClient'], $_POST['adresseClient'], $_POST['cpClient'], $_POST['dateInscri'], $_POST['mdp'],  $_POST['id']);
            $validation = "Le client a bien été modifier";
            var_dump($validation);
            include("Vue/backend/v_listeClients.php");
            break;
        }
        case "default":{
            include ('Vue/backend/v_listeClients.php');
            break;
        }
    }
}