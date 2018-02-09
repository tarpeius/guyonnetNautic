<?php

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

    function recupNomParId($id)
    {
         global $bdd;
         $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "SELECT nom_categorie FROM categorie WHERE id_categorie = :id";
         $req=$bdd->prepare($query);
         $req->bindParam(':id', $id);
         $req->execute();
         $result = $req->fetch(PDO::FETCH_OBJ);
         return $result;
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
