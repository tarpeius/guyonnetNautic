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
        $result= $req->fetchAll(PDO::FETCH_ASSOC);
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
        $result = $req->fetch(PDO::FETCH_ASSOC);
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

    function afficherArticleParMarque($id)
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM article WHERE id_marque =:id";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherArticleParMarqueOrdreAsc($id){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM article WHERE id_marque =:id ORDER BY nom_marque ASC";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherArticleParMarqueOrdreDesc($id){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM article WHERE id_marque =:id ORDER BY nom_marque DESC";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherArticleCategorie()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT article.nom_article, article.reference, article.photo_article, article.prix_article, article.qte_article, article.resume_article, article.desc_article, article.poids_article, article.dimensions_article, categorie.id_categorie,categorie.nom_categorie, article.id_tva 
                  FROM article, categoriser, categorie 
                  WHERE article.reference=categoriser.reference AND categoriser.id_categorie=categorie.id_categorie";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherArticleCategorieOrdreAsc()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT article.nom_article, article.reference, article.photo_article, article.prix_article, article.qte_article, article.resume_article, article.desc_article, article.poids_article, article.dimensions_article, categorie.id_categorie,categorie.nom_categorie, article.id_tva 
                  FROM article, categoriser, categorie 
                  WHERE article.reference=categoriser.reference AND categoriser.id_categorie=categorie.id_categorie
                  ORDER BY article.nom_article ASC ";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function afficherArticleCategorieOrdreDesc()
    {
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT article.nom_article, article.reference, article.photo_article, article.prix_article, article.qte_article, article.resume_article, article.desc_article, article.poids_article, article.dimensions_article, categorie.id_categorie,categorie.nom_categorie, article.id_tva 
                      FROM article, categoriser, categorie 
                      WHERE article.reference=categoriser.reference AND categoriser.id_categorie=categorie.id_categorie
                      ORDER BY article.nom_article DESC ";
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
    /// <summary>
    /// Fonction de selection des clients avec une limit pour la pagination
    /// </summary>
    /// <param name=min>Paramètre de limit minimum.</param>
    /// <param name=max>Paramètre de limit maximum.</param>
    /// <returns>Retourne le tableau de résultats.</returns>
    function afficheClientPage($min, $max){
        global $bdd;
        $query="SELECT * FROM client ORDER BY id_client ASC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    // <summary>
    /// Fonction de selection du nombre de client
    /// </summary>
    /// <returns>Retourne le nombre de client.</returns>
    function selectCountTousClient(){
        global $bdd;
        $query="SELECT COUNT(id_client)FROM client";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }
    /// <summary>
    /// Fonction de selection des clients avec une limit pour la pagination
    /// </summary>
    /// <param name=min>Paramètre de limit minimum.</param>
    /// <param name=max>Paramètre de limit maximum.</param>
    /// <returns>Retourne le tableau de résultats.</returns>
    function afficherMarquesPage($min, $max){
        global $bdd;
        $query="SELECT * FROM marque ORDER BY id_marque ASC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    // <summary>
    /// Fonction de selection du nombre de client
    /// </summary>
    /// <returns>Retourne le nombre de client.</returns>
    function selectCountToutesMarques(){
        global $bdd;
        $query="SELECT COUNT(id_marque)FROM marque";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }

    /// <summary>
    /// Fonction de selection des clients avec une limit pour la pagination
    /// </summary>
    /// <param name=min>Paramètre de limit minimum.</param>
    /// <param name=max>Paramètre de limit maximum.</param>
    /// <returns>Retourne le tableau de résultats.</returns>
    function selectArticleCategoriePage($min, $max){
        global $bdd;
        $query="SELECT *
                FROM article, categoriser, categorie 
                WHERE article.reference=categoriser.reference 
                AND categoriser.id_categorie=categorie.id_categorie 
                ORDER BY nom_article ASC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    /// <summary>
    /// Fonction de selection des clients avec une limit pour la pagination
    /// </summary>
    /// <param name=min>Paramètre de limit minimum.</param>
    /// <param name=max>Paramètre de limit maximum.</param>
    /// <returns>Retourne le tableau de résultats.</returns>
    function selectArticleCategoriePageDesc($min, $max){
        global $bdd;
        $query="SELECT *
                    FROM article, categoriser, categorie 
                    WHERE article.reference=categoriser.reference 
                    AND categoriser.id_categorie=categorie.id_categorie 
                    ORDER BY nom_article DESC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    // <summary>
    /// Fonction de selection du nombre de client
    /// </summary>
    /// <returns>Retourne le nombre de client.</returns>
    function selectCountToutArticles(){
        global $bdd;
        $query="SELECT COUNT(reference) FROM article";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }

    function selectArticleCategoriePageParCategorie($id, $min, $max){
        global $bdd;
        $query="SELECT *
                FROM article, categoriser, categorie 
                WHERE article.reference=categoriser.reference 
                AND categoriser.id_categorie=categorie.id_categorie
                AND categorie.id_categorie = :id 
                ORDER BY nom_article ASC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function selectArticleCategoriePageParCategorieDesc($id, $min, $max){
        global $bdd;
        $query="SELECT *
                    FROM article, categoriser, categorie 
                    WHERE article.reference=categoriser.reference 
                    AND categoriser.id_categorie=categorie.id_categorie
                    AND categorie.id_categorie = :id 
                    ORDER BY nom_article DESC LIMIT $min , $max ";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    // <summary>
    /// Fonction de selection du nombre de client
    /// </summary>
    /// <returns>Retourne le nombre de client.</returns>
    function selectCountToutArticlesParCategorie($id){
        global $bdd;
        $query="SELECT COUNT(article.reference)
                FROM article, categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categoriser.id_categorie=categorie.id_categorie
                AND categorie.nom_categorie = :id ";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetch();
        return $result;
}
    /// <summary>
    /// Fonction de selection des clients avec une limit pour la pagination
    /// </summary>
    /// <param name=min>Paramètre de limit minimum.</param>
    /// <param name=max>Paramètre de limit maximum.</param>
    /// <returns>Retourne le tableau de résultats.</returns>
    function afficherCommandePage($min, $max){
        global $bdd;
        $query="SELECT commande.id_commande,date_commande,valeur_commande,id_client,commande.id_mdpaiement, type_mdpaiement FROM commande, mode_paiement 
                WHERE commande.id_mdpaiement=mode_paiement.id_mdpaiement ORDER BY commande.id_commande ASC LIMIT $min,$max";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // <summary>
    /// Fonction de selection du nombre de client
    /// </summary>
    /// <returns>Retourne le nombre de client.</returns>
    function selectCountToutesCommandes(){
        global $bdd;
        $query="SELECT COUNT(id_commande)FROM commande";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetch();
        return $result;
}
    // <summary>
    /// Fonction de selection des deux dernieres commandes
    /// </summary>
    /// <returns>Retourne les deux dernieres commandes.</returns>
    function selectDeuxDernieresCommandes(){
        global $bdd;
        $query="SELECT * FROM commande ORDER BY id_commande DESC LIMIT 0,2";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    // <summary>
    /// Fonction de selection des deux dernieres commandes
    /// </summary>
    /// <returns>Retourne les deux dernieres commandes.</returns>
    function selectDeuxDerniersClients(){
        global $bdd;
        $query="SELECT * FROM client ORDER BY id_client DESC LIMIT 0,2";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    // <summary>
    /// Fonction de selection des deux dernieres commandes
    /// </summary>
    /// <returns>Retourne les deux dernieres commandes.</returns>
    function selectDeuxDerniersProduits(){
        global $bdd;
        $query="SELECT * FROM client ORDER BY id_client DESC LIMIT 0,2";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }
    // <summary>
    /// Fonction de selection des deux dernieres marques
    /// </summary>
    /// <returns>Retourne les deux dernieres marques.</returns>
    function selectDeuxDernieresMarques(){
        global $bdd;
        $query="SELECT * FROM marque ORDER BY id_marque DESC LIMIT 0,2";
        $req=$bdd->prepare($query);
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    function verifRefArticle($ref){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT reference FROM article WHERE reference=:ref";
        $req=$bdd->prepare($query);
        $req->bindParam(':ref', $ref);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }

    function verifPhoto($arrayPhoto){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT url_photo FROM photo WHERE url_photo=:url";
        $req=$bdd->prepare($query);
        $req->bindParam(':url', $arrayPhoto['name']);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }

    function photoDimensionArticle($id){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT photo_article, dimensions_article FROM article WHERE reference=:id";
        $req=$bdd->prepare($query);
        $req->bindParam(':id', $id);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }