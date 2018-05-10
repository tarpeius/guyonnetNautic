<?php

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}


if (isset($action)){
    switch ($action){
        case "afficher":{
            include('Vue/backend/v_listePermis.php');
            break;
        }
        case "nouveau":
            include('Vue/backend/v_pagePermis.php');
            break;
        case "supprimer":{
            include('Vue/backend/v_listePermis.php');
            break;
        }
        case "modifier":{
            include("Vue/backend/v_listePermis.php");
            break;
        }
        case "ajout":{
            include("Vue/backend/v_listePermis.php");
            break;
        }
        case "default":{
            include ('Vue/backend/v_listePermis.php');
            break;
        }
    }
}