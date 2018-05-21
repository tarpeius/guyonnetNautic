<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 15:36
 */
class Permis
{
    private $id;
    private $type;
    private $mois;
    private $annee;
    private $examenDate;
    private $examenLieu;

    /**
     * Permis constructor.
     * @param $nom
     * @param $mois
     * @param $annee
     * @param $examenDate
     * @param $examenLieu
     */
//    public function __construct($mois, $annee, $examenDate, $examenLieu, $type)
//    {
//        $this->mois = $mois;
//        $this->annee = $annee;
//        $this->examenDate = $examenDate;
//        $this->examenLieu = $examenLieu;
//        $this->type = $type;
//    }

    public function __construct($param) {
        if (is_array($param)) {
            if (isset($param['id_permis'])) {
                $this->id = $param['id_permis'];
                $this->mois = $param['mois_permis'];
                $this->annee = $param['annee_permis'];
                $this->examenDate = $param['date_examen_permis'];
                $this->examenLieu = $param['lieu_examen_permis'];
                $this->type = $param['id_typePermis'];
            } else {
                $this->mois = $param['mois_permis'];
                $this->annee = $param['annee_permis'];
                $this->examenDate = $param['date_examen_permis'];
                $this->examenLieu = $param['lieu_examen_permis'];
                $this->type = $param['id_typePermis'];
            }

        } else {
            $this->id = $param;
        }
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * @param mixed $mois
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getExamenDate()
    {
        return $this->examenDate;
    }

    /**
     * @param mixed $examenDate
     */
    public function setExamenDate($examenDate)
    {
        $this->examenDate = $examenDate;
    }

    /**
     * @return mixed
     */
    public function getExamenLieu()
    {
        return $this->examenLieu;
    }

    /**
     * @param mixed $examenLieu
     */
    public function setExamenLieu($examenLieu)
    {
        $this->examenLieu = $examenLieu;
    }

}