<?php

function modifierCategorie($nom, $id){
    global $bdd;
    $stmt = $bdd->prepare("UPDATE categorie SET nom_categorie=:nom WHERE id_categorie=:id_categorie");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':id_categorie', $id);
    $stmt->execute();
}
function modifierMarque($id,$nom,$logo){
    global $bdd;
    $stmt = $bdd->prepare("UPDATE marque SET nom_marque=:nom,logo_marque=:logo WHERE id_marque=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':logo', $logo);
    $stmt->execute();
}
function modifierNomMarque($id,$nom){
    global $bdd;
    $stmt = $bdd->prepare("UPDATE marque SET nom_marque=:nom WHERE id_marque=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();
}
function modifierLogoMarque($id,$logo){
    global $bdd;
    $stmt = $bdd->prepare("UPDATE marque SET logo_marque=:logo WHERE id_marque=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':logo', $logo);
    $stmt->execute();
}
function modifierArticle()
{

    "INSERT INTO `article` (`reference`, `nom_article`, `prix_article`, `qte_article`, `resume_article`, `desc_article`, `poids_article`, `motorisation_article`, `dimensions_article`, `photo_article`, `id_marque`, `id_tva`) VALUES ('124', 'Bouee', '19.99', '1', 'c\'est une bouée', 'cette bouée est très spéciale', '5', '20', '2.3', NULL, NULL, '2')";
}
