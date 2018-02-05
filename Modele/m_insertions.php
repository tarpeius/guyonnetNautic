<?php

function nouveauCategorie($nom, $descri){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO categorie (nom_categorie,desc_categorie)VALUES(:nom,:descri)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':descri', $descri);
    $stmt->execute();
}

function nouveauSousCategorie($categParent, $categEnfant ){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO hierarchiser (id_categorie,id_categorie_1)VALUES(:categPere,:categFils)");
    $stmt->bindParam(':categPere', $categParent);
    $stmt->bindParam(':categFils', $categEnfant);
    $stmt->execute();
}
function nouveauArticle($ref,$nom,$prix,$resume,$descr,$qte,$poids,$motor,$dimension,$photo,$tva,$categorie,$marque)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = "INSERT INTO article (reference,nom_article,prix_article,qte_article,resume_article,desc_article,poids_article,motorisation_article,dimensions_article,photo_article) VALUES (:ref,:nom,:prix,:qte,:resume,:descr,:poids,:motor,:dimension,:photo,:marque,:tva)";
    $stmt->bindParam(':ref', $ref);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':qte', $qte);
    $stmt->bindParam(':resume', $resume);
    $stmt->bindParam(':descr', $descr);
    $stmt->bindParam(':poids', $poids);
    $stmt->bindParam(':motor', $motor);
    $stmt->bindParam(':dimension', $dimension);
    $stmt->bindParam(':photo', $photo);
    $stmt->bindParam(':marque', $marque);
    $stmt->bindParam(':tva', $tva);

    $bdd->exec($stmt);
}