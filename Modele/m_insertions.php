<?php

function nouveauCategorie($bdd,$nom, $descri){
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO categorie (nom_categorie,desc_categorie)VALUES(:nom,:descri)");

    $params = array(
        ':nom' => $nom,
        ':descri' => $descri,
    );

    $stmt->execute($params);
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


function nouveauArticle($bdd,$ref,$nom,$prix,$resume,$descr,$qte,$poids,$motor,$dimension,$photo,$marque,$tva)
{
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
function nouveauCategoriser($bdd,$id,$ref){
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO categoriser(categoriser.id_categorie,categoriser.reference) VALUES (:id,:ref)");

    $params = array (
        ':id' => $id,
        ':ref' => $ref,
    );

    $stmt->execute($params);
}