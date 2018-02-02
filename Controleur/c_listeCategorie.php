<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 31/01/2018
 * Time: 11:35
 */
$action=$_REQUEST['a'];
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
            var_dump($_REQUEST);
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
    }
}