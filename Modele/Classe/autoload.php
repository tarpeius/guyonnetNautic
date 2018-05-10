<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 15:39
 */

    function __autoload($nomClass){
        if (file_exists($nomClass.'.php')){
            include($nomClass.'.php');
        }else{
            echo "Le(s) fichier(s) n'existe(nt) pas";
        }
    }