<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 29/01/2018
 * Time: 15:39
 */

require('PDO.php');

function nouveauCategorie($bdd,$nom, $descri){
    $stmt = $bdd->prepare("INSERT INTO categorie (nom_categorie,desc_categorie)VALUES(:nom,:descri)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':descri', $descri);
    $stmt->execute();
}

function afficherCategorie($bdd){
    $query="SELECT * FROM categorie";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function modifierCategorie($bdd, $nom, $id){
    $stmt = $bdd->prepare("UPDATE categorie SET nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':id_categorie', $id);
    $stmt->execute();
}

