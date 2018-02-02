<?php

function afficherCategorie($bdd){
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM categorie";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficherToutesMarques($bdd)
    {
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM marque";
        $req=$bdd->prepare($query);
		$req->execute();
		$result= $req->fetchAll();
		return $result;
    }