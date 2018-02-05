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
        case "default":{
            include ('Vue/backend/v_listeClients.php');
            break;
        }
    }
}