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