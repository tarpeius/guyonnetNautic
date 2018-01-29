<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 29/01/2018
 * Time: 15:19
 */

include ('../modele/requetesSQL.php');
include ('../modele/PDO.php');
// ajout de fonction c'est plus propre mais je sais plus comment on fait ( date 29/01 )

if(!empty($_POST)){
    $nom = $_POST['nomCateg'];
    $descri = $_POST['description'];
    var_dump($_POST);
    nouveauCategorie($bdd, $nom, $descri);
    $msg = "bien effectué";
   $allCateg = afficherCategorie($bdd);

}else{
    $msg = "erreur";
}
echo $msg;
var_dump($allCateg);



