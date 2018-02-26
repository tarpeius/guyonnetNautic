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

function nouvelleMarque($bdd,$nom,$logo){
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO marque (nom_marque,logo_marque) VALUES (:nom,:logo)");

    $params = array (
        ':nom' => $nom,
        ':logo' => $logo,
    );

    $stmt->execute($params);
}

function nouveauArticle($ref,$nom,$prix,$resume,$descr,$qte,$poids,$motor,$dimension,$photo,$marque,$tva)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO article (reference,nom_article,prix_article,qte_article,resume_article,desc_article,poids_article,motorisation_article,dimensions_article,photo_article,id_marque,id_tva) VALUES (:ref,:nom,:prix,:qte,:resume,:descr,:poids,:motor,:dimension,:photo,:marque,:tva)");
    $params = array (
        ':ref' => $ref,
        ':nom' => $nom,
        ':prix' => $prix,
        ':qte' => $qte,
        ':resume' => $resume,
        ':descr' => $descr,
        ':poids' => $poids,
        ':motor' => $motor,
        ':dimension' => $dimension,
        ':photo' => $photo,
        ':marque' => $marque,
        ':tva' => $tva,
    );
    $stmt->execute($params);
}
function nouveauCategoriser($id,$ref){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO categoriser(categoriser.id_categorie,categoriser.reference) VALUES (:id,:ref)");

    $params = array (
        ':id' => $id,
        ':ref' => $ref,
    );

    $stmt->execute($params);
}