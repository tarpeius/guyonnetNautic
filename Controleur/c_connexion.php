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
            if ((!empty($_POST['pseudo'])) && (!empty($_POST['pwd']))) {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['pwd'];
                $mdp = md5($mdp);
                $valide = isAdmin($pseudo, $mdp);
                if ($valide == 1) {
                    $_SESSION['isActive'] = 1;
                    include('Vue/Structure/v_bandeau.php');
                        header('Refresh:0; index.php?c=accueil');
                    //include('Vue/backend/v_accueil.php');
                } else {
                    $erreur = "Le nom de compte ou le mot de passe n'est pas valide";
                    include('Vue/backend/v_connexion.php');
                }
                break;
            }
        case "deconnexion":
            session_destroy();
            header("Refresh:0; url=index.php");
            break;
    }
}
