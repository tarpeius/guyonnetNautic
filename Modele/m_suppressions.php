<?php

function supprimerCategorie($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="DELETE FROM `categorie` WHERE id_categorie=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
}

function supprimerClient($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="DELETE FROM `client` WHERE id_client=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
}

function supprimerCommande($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="DELETE FROM commande WHERE id_commande=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
}