<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 31/01/2018
 * Time: 11:35
 */

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}
if (isset($action)){
    switch ($action){
        case "afficher":{
            include('Vue/backend/v_listeCategorie.php');
            break;
        }
        case "nouveau":{
            include('Vue/backend/v_pageCategorie.php');
            break;
        }
        case "ajout":{
            if(!empty($_POST['nomCateg'])){
                $categorieChain = $_POST['nomCateg'];
                // On supprime les espaces pour verifier que le nom ne contient pas que des espaces
                $categorieChain = str_replace(' ','',$categorieChain);
                    if ($categorieChain != ''){
                        nouveauCategorie($bdd,$_POST['nomCateg'], $_POST['description']);
                        $validation = "La categorie a bien été ajouté";
                        var_dump($validation);
                    }else{
                        $erreur = "Le nom du categorie ne peut être vide";
                    }
            }else{
                $erreur = "Le nom de la categorie ne peux être vide";
            }
            include ('Vue/backend/v_pageCategorie.php');
            break;
        }
        case "modifier":{
            include ('../Modele/m_connexion.php');
            include ('../Modele/m_selections.php');
            include ('../Modele/m_modifications.php');
            $idCateg = $_POST['idCateg'];
            $nomCateg = recupNomParId($idCateg);
            echo json_encode($nomCateg);
        }
        case "update":{
            if (!empty($_POST['modifCategorie'])){
                if ($_POST['modifCateg'] == "Modifier"){
                    modifierCategorie($_POST['modifCategorie'],$_POST['idCateg']);
                    header('Location: index.php?c=accueil&a=listeCategorie');
                }else{
                    supprimerCategorie($_POST['idCateg']);
                    header('Location: index.php?c=accueil&a=listeCategorie');
                }
             }
            break;
        }
        case "supprimer":{
            //supprimerCategorie();
            include ('Vue/backend/v_pageCategorie.php');
        break;
        }
    }
}