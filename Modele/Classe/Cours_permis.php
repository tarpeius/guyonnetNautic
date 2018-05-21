<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 15:37
 */
class Cours_permis
{
    private $id;
    private $cours;

    /**
     * Cours_permis constructor.
     * @param $cours
     */
    public function __construct($param)
    {

        if (is_array($param)) {
            if (isset($param['id_coursPermis'])) {
                $this->id = $param['id_coursPermis'];
                $this->cours = $param['horaires_coursPermis'];
            } else {
                $this->cours = $param['horaires_coursPermis'];
            }
        } else {
            $this->cours = $param;
        }

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
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * @param mixed $cours
     */
    public function setCours($cours)
    {
        $this->cours = $cours;
    }


}