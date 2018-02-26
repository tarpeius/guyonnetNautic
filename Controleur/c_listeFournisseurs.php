<?php


    $action = "";
    if(!empty($_REQUEST['a'])){
        $action = $_REQUEST['a'];
    }
    switch($action)
    {
        case "afficher": // a changer selon besoin
            include('Vue/backend/v_pageFournisseur.php');
            break;
        case "ajout": // a changer selon besoin
            include('Vue/backend/v_pageFournisseur.php');
            break;
        default:
            include("Vue/backend/v_accueil.php");
            break;
    }

?>