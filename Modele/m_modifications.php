<?php

function modifierCategorie($bdd, $nom, $id){
    $stmt = $bdd->prepare("UPDATE categorie SET nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':id_categorie', $id);
    $stmt->execute();
}