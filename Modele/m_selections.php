<?php

function afficherCategorie(){
    global $bdd;
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM categorie";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficherToutesMarques()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM marque";
        $req=$bdd->prepare($query);
		$req->execute();
		$result= $req->fetchAll();
		return $result;
    }

function recupNomParId($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT nom_categorie FROM categorie WHERE id_categorie = :id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_OBJ);
    return $result;

}

function recupIdParNom($nom){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT id_categorie FROM categorie WHERE nom_categorie = :nom";
    $req=$bdd->prepare($query);
    $req->bindParam(':nom', $nom);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function recupSousCategorieParCategorie(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM categorie, hierarchiser WHERE categorie.id_categorie=hierarchiser.id_categorie  GROUP BY hierarchiser.id_categorie_1";
    $req=$bdd->prepare($query);
    //$req->bindParam(':idCateg', $idCateg);
    $req->execute();
    $result = $req->fetchAll();
    return $result;
}

function afficherToutClient(){
    global $bdd;
    $query = "SELECT * FROM `client`";
    $req=$bdd->prepare($query);
    $req->execute();
    $result = $req->fetchAll();
    return $result;
}

function afficherUnClient($id){
    global $bdd;
    $query = "SELECT * FROM `client` WHERE id_client=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetchAll();
    return $result;
}
