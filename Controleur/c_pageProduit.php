<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8', 'root', '');

    $referenceArticle = $_POST['referenceArticle'];
    $nomArticle = $_POST['nomArticle'];
    $prixArticleHT = $_POST['prixHTArticle'];
    $prixArticleTTC = $_POST['prixTTCArticle'];
    $resumeArticle = $_POST['resumeArticle'];
    $descriptionArticle = $_POST['descriptionArticle'];
    $quantiteArticle = $_POST['quantiteArticle'];
    $poidsArticle = $_POST['poidsArticle'];
    $motorisationArticle = $_POST['motorisationArticle'];
    $longueurArticle = $_POST['longueurArticle'];
    $largeurArticle = $_POST['largeurArticle'];
    $hauteurArticle = $_POST['hauteurArticle'];
    $tvaArticle = $_POST['tvaArticle'];
    $categorieArticle = $_POST['categorieArticle'];
    $marqueArticle = $_POST['marqueArticle'];

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql1 = "INSERT INTO produit (id_prod,nom_prod,resume_prod,desc_prod) VALUES ('','$nomProduit','$resumeProduit','$descriptionProduit')";
    $sql = "INSERT INTO article (reference,nom_article,prix_article,qte_article,poids_article,motorisation_article,dimensions_article,photo_article) VALUES ($referenceArticle,'$nomArticle','$prixArticleTTC','$resumeArticle','$descriptionArticle','$quantiteArticle','$poidsArticle','$motorisationArticle','$longueurArticle','$largeurArticle','$hauteurArticle','$tvaArticle','$categorieArticle','$marqueArticle')";
    $db->exec($sql1);
    echo "Enregistrement réussie avec succès";
}
catch(PDOException $e) {
    echo $sql1 . "<br>" . $e->getMessage();
}

$db = null;

?>