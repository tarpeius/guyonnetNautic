<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 15:37
 */
class PermisManager
{
    private $db;

    public function __construct($mode='debug')
    {
        if ($mode == 'debug'){
            $this->db = New PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }elseif ($mode == 'prod'){
            $this->db = New PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8','root','');
        }
    }

    function afficherPermis($id) {
        $query="SELECT permis.id_permis,permis_type.nom_permis,permis.mois_permis,permis.annee_permis,permis.date_examen_permis
                FROM permis 
                INNER JOIN permis_type ON permis.id_typePermis = permis_type.id_typePermis
                WHERE permis.id_permis = :id
                 ";
        $req = $this->db->prepare($query);
        $req->bindValue('id', $id, PDO::PARAM_INT);
        $req->execute();
        $result= $req->fetch();
        $permis = new Permis($result);
        return $permis;
    }

    function afficherToutPermis() {
        $query="SELECT permis.id_permis,permis_type.nom_permis,permis.mois_permis,permis.annee_permis,permis.date_examen_permis
                FROM permis 
                INNER JOIN permis_type ON permis.id_typePermis = permis_type.id_typePermis
                 ";
        $req= $this->db->prepare($query);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function nouveauPermis(Permis &$permis){
        $query= "INSERT INTO permis (mois_permis,annee_permis,date_examen_permis,lieu_examen_permis,id_typePermis)VALUES(:mois,:annee,:dateExam,:lieuExam,:typePermis)";
        $req = $this->db->prepare($query);
        $req->bindValue(':mois', $permis->getMois(), PDO::PARAM_STR);
        $req->bindValue(':annee', $permis->getAnnee(), PDO::PARAM_INT);
        $req->bindValue(':dateExam', $permis->getExamenDate(), PDO::PARAM_STR);
        $req->bindValue(':lieuExam', $permis->getExamenLieu(), PDO::PARAM_STR);
        $req->bindValue(':typePermis', $permis->getType(), PDO::PARAM_INT);
        $req->execute();
        $id = $this->db->lastInsertId();
        $permis->setId($id);
    }

    function nouveauCoursPermis(Cours_permis &$cours){
        $query ="INSERT INTO permis_cours (horaires_coursPermis) VALUES(:cours)";
        $req = $this->db->prepare($query);
        $req->bindParam(':cours', $cours->getCours(), PDO::PARAM_STR);
        $req->execute();
        $id = $this->db->lastInsertId();
        $cours->setId($id);
    }

    function nouvelleAssociationPermis(Permis &$permis,Cours_permis &$cours){
        global $bdd;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $bdd->prepare("INSERT INTO permis_cours (id_coursPermis,id_permis) VALUES(:idCours,:idPermis)");
        $stmt->bindParam(':idCours', $cours->getId(), PDO::PARAM_INT);
        $stmt->bindParam(':idPermis', $permis->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function supprimerPermis(Permis $permis)
    {
        $sql = "DELETE FROM permis,permis_association,permis_cours WHERE permis.id_permis=:id AND permis_association.id_permis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('id', $permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function supprimerCoursPermis(Cours_permis $cours)
    {
        $sql = "DELETE FROM permis,permis_cours WHERE id_permis=:id AND permis_association.id_permis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('id', $cours->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function supprimerAssociationPermis(Cours_permis $cours, Permis $permis)
    {
        $sql = "DELETE FROM permis_association WHERE id_permis=:idPermis AND id_coursPermis=:idCours";
        $req = $this->db->prepare($sql);
        $req->bindValue('idCours', $cours->getId(), PDO::PARAM_INT);
        $req->bindValue('idPermis', $permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function modifierPermis(Permis $permis)
    {
        $sql = "UPDATE permis SET mois_permis,annee_permis,date_examen_permis,lieu_examen_permis,id_typePermis WHERE id=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('type',$permis->getType(), PDO::PARAM_INT);
        $req->bindValue('examLieu',$permis->getExamenLieu(), PDO::PARAM_STR);
        $req->bindValue('examDate',$permis->getExamenDate(), PDO::PARAM_STR);
        $req->bindValue('annee',$permis->getAnnee(), PDO::PARAM_INT);
        $req->bindValue('mois',$permis->getMois(), PDO::PARAM_STR);
        $req->bindValue('id',$permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function modifierCoursPermis(Cours_permis $cours)
    {
        $sql = "UPDATE permis_cours SET horaires_coursPermis:cours WHERE id_coursPermis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('cours',$cours->getCours(), PDO::PARAM_STR);
        $req->bindValue('id',$cours->getId(), PDO::PARAM_INT);
        $req->execute();
    }


}