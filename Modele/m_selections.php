<?php

function afficherCategorieSansParent(){
    global $bdd;
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM categorie WHERE id_categorie NOT IN (SELECT id_categorie_1 FROM hierarchiser) AND id_categorie NOT IN (SELECT id_categorie FROM hierarchiser)";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function afficherToutesCategories(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM categorie";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function afficherCategorie()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="SELECT * FROM categorie";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherToutesMarques()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM marque";
        $req=$bdd->prepare($query);
		$req->execute();
		$result= $req->fetchAll();
		return $result;
    }

function recupNomParId($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT nom_categorie FROM categorie WHERE id_categorie = :id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_OBJ);
    return $result;

}

function recupIdParNom($nom){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT id_categorie FROM categorie WHERE nom_categorie = :nom";
    $req=$bdd->prepare($query);
    $req->bindParam(':nom', $nom);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function recupSousCategorieParCategorie($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM categorie, hierarchiser WHERE categorie.id_categorie=hierarchiser.id_categorie AND categorie.id_categorie=:idParent GROUP BY hierarchiser.id_categorie_1";
    $req=$bdd->prepare($query);
    $req->bindParam(':idParent', $id);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function recupCategorie(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT DISTINCT(nom_categorie), categorie.id_categorie FROM categorie, hierarchiser WHERE categorie.id_categorie=hierarchiser.id_categorie";
    $req=$bdd->prepare($query);
    //$req->bindParam(':idCateg', $idCateg);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function afficherToutSousCategorie(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM hierarchiser ";
    $req=$bdd->prepare($query);
    //$req->bindParam(':idCateg', $idCateg);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function afficherToutClient(){
    global $bdd;
    $query = "SELECT * FROM `client`";
    $req=$bdd->prepare($query);
    $req->execute();
    $result = $req->fetchAll();
    return $result;
}

function afficherUnClient($id){
    global $bdd;
    $query = "SELECT * FROM `client` WHERE id_client=:id";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function afficherToutesCommande(){
    global $bdd;
    $query = "SELECT commande.id_commande, date_commande, valeur_commande, id_client, mode_paiement.id_mdpaiement, type_mdpaiement FROM commande, mode_paiement WHERE commande.id_mdpaiement=mode_paiement.id_mdpaiement";
    $req=$bdd->prepare($query);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function existHierarchiser($id){
    global $bdd;
    $query = "SELECT * FROM hierarchiser WHERE EXISTS ( SELECT id_categorie FROM categorie WHERE id_categorie= :id)";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function isAdmin($pseudo, $mdp){
    global $bdd;
    $query = "SELECT COUNT(pseudo_admin) FROM administrateur WHERE pseudo_admin=:pseudo AND pass_admin=:mdp";
    $req=$bdd->prepare($query);
    $req->bindParam(':pseudo', $pseudo);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $result = $req->fetch();
    return $result[0];
}

    function afficherUneMarque($id)
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM marque WHERE id_marque=:id";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    function afficherTva()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM taux_tva";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    function afficherArticle()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM article";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    function afficherArticleCategorie()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT article.nom_article, article.reference, article.photo_article, article.qte_article, categorie.nom_categorie 
                  FROM article, categoriser, categorie 
                  WHERE article.reference=categoriser.reference AND categoriser.id_categorie=categorie.id_categorie";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    function afficherRefSuppMarque($id){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT reference FROM article WHERE id_marque =:id";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
