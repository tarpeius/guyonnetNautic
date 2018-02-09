<?php

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
    $stmt = $bdd->prepare("DELETE FROM article WHERE id_article =:id");

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

?>