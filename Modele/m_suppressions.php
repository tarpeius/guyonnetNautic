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

function supprimerMarque($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("DELETE FROM marque WHERE id_marque =:id");

    $params = array (
    ':id' => $id,
    );

    $stmt->execute($params);
}
function supprimerArticleMarque($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("DELETE FROM article WHERE id_marque =:id");

    $params = array (
        ':id' => $id,
    );

    $stmt->execute($params);
}

function supprimerArticle($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("DELETE FROM article WHERE reference=:id");

    $params = array (
        ':id' => $id,
    );

    $stmt->execute($params);
}
function supprimerCategoriserMarque($ref){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("DELETE FROM categoriser WHERE reference =:ref");

    $params = array (
        ':ref' => $ref,
    );

    $stmt->execute($params);
}
function supprimerCommandeClient($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="DELETE FROM `commande` WHERE id_client=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
}

