<?php

function modifierCategorie($nom, $id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("UPDATE categorie SET nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie");
    $stmt->bindParam(':nom_categorie', $nom);
    $stmt->bindParam(':id_categorie', $id);
    $stmt->execute();
}

function modifierClient($nom,$prenom, $dateNaissance, $mail, $adresse, $cp, $inscri, $mdp,  $id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("UPDATE client SET nom_client=:nom, prenom_client=:prenom,  date_naissance=:dateNaissance, email_client=:mail, adresse_client=:adresse, cp_client=:cp, date_inscription=:inscri, mdp_client=:mdp WHERE id_client=:id");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':dateNaissance', $dateNaissance);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':inscri', $inscri);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function modifierCategParente($nouvCat,$categ){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="UPDATE hierarchiser SET id_categorie= :nouvCat WHERE id_categorie_1= :categ";
    $req=$bdd->prepare($query);
    $req->bindParam(':nouvCat',$nouvCat);
    $req->bindParam(':categ',$categ);
    $req->execute();
}