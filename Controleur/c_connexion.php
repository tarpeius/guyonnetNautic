<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 14/02/2018
 * Time: 15:43
 */
$action=$_GET['a'];

if(!empty($action)) {
    switch ($action) {
        case "authentification":
           // var_dump($_REQUEST);
            if ((!empty($_POST['pseudo'])) && (!empty($_POST['pwd']))) {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['pwd'];
                $valide = isAdmin($pseudo, $mdp);
                if ($valide == 1) {
                    $_SESSION['isActive'] = 1;
                    include('Vue/backend/v_accueil.php');
                } else {
                    $erreur = "marche pas !";
                    include('Vue/backend/v_connexion.php');

                }
                break;
            }
        case "deconnexion":
            session_destroy();
            include "Vue/backend/v_connexion.php";
            break;
    }
}