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
        $query="SELECT permis.id_permis,permis_type.nom_permis,permis.mois_permis,permis.annee_permis,permis.date_examen_permis,permis.lieu_examen_permis
                FROM permis 
                INNER JOIN permis_type ON permis.id_typePermis = permis_type.id_typePermis
                WHERE permis.id_permis = :id
                 ";
        $req = $this->db->prepare($query);
        $req->bindValue('id', $id, PDO::PARAM_INT);
        $req->execute();
        $result= $req->fetch();
        return $result;
    }

    function afficherTypePermis() {
        $query="SELECT permis_type.id_typePermis,permis_type.nom_permis
                FROM permis_type";
        $req = $this->db->prepare($query);
        $req->execute();
        $result= $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function afficherCoursPermis($idPermis) {
        $query="SELECT permis_cours.id_coursPermis,permis_cours.horaires_coursPermis
                FROM permis_cours
                INNER JOIN permis_association ON permis_cours.id_coursPermis = permis_association.id_coursPermis
                WHERE permis_association.id_permis=:idPermis";
        $req = $this->db->prepare($query);
        $req->bindValue('idPermis', $idPermis, PDO::PARAM_INT);
        $req->execute();
        $result= $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function afficherToutPermis() {
        $query="SELECT permis.id_permis,permis_type.nom_permis,permis.mois_permis,permis.annee_permis,permis.date_examen_permis,permis.lieu_examen_permis
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
        $req->bindValue(':cours', $cours->getCours(), PDO::PARAM_STR);
        $req->execute();
        $id = $this->db->lastInsertId();
        $cours->setId($id);
    }

    function nouvelleAssociationPermis(Cours_permis &$cours,Permis &$permis){

        $query = "INSERT INTO permis_association (id_coursPermis,id_permis) VALUES(:idCours,:idPermis)";
        $req = $this->db->prepare($query);
        $req->bindValue(':idCours', $cours->getId(), PDO::PARAM_INT);
        $req->bindValue(':idPermis', $permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function supprimerPermis(Permis $permis)
    {
        $sql = "DELETE FROM permis WHERE permis.id_permis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('id', $permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function supprimerCoursPermis($id)
    {
        $sql = "DELETE FROM permis_cours WHERE id_coursPermis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function supprimerAssociationPermis($cours, Permis $permis)
    {
        $sql = "DELETE FROM permis_association WHERE id_permis=:idPermis AND id_coursPermis=:idCours";
        $req = $this->db->prepare($sql);
        $req->bindValue('idCours', $cours, PDO::PARAM_INT);
        $req->bindValue('idPermis', $permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function modifierPermis(Permis $permis)
    {
        $sql = "UPDATE permis SET mois_permis=:mois,annee_permis=:annee,date_examen_permis=:examDate,lieu_examen_permis=:examLieu,id_typePermis=:typePermis WHERE id_permis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('typePermis',$permis->getType(), PDO::PARAM_INT);
        $req->bindValue('examLieu',$permis->getExamenLieu(), PDO::PARAM_STR);
        $req->bindValue('examDate',$permis->getExamenDate(), PDO::PARAM_STR);
        $req->bindValue('annee',$permis->getAnnee(), PDO::PARAM_INT);
        $req->bindValue('mois',$permis->getMois(), PDO::PARAM_STR);
        $req->bindValue('id',$permis->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function modifierCoursPermis(Cours_permis $cours)
    {
        $sql = "UPDATE permis_cours SET horaires_coursPermis=:cours WHERE id_coursPermis=:id";
        $req = $this->db->prepare($sql);
        $req->bindValue('cours',$cours->getCours(), PDO::PARAM_STR);
        $req->bindValue('id',$cours->getId(), PDO::PARAM_INT);
        $req->execute();
    }


}