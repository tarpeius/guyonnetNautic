<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 29/01/2018
 * Time: 15:33
 */

$hote = "mysql:host=localhost";
$dbName = "guyonnetnautic";
$user = "root";
$mdp = "";

try
{
    $bdd = new PDO("$hote;dbname=$dbName;charset=utf8","$user","$mdp");
}
catch(Exception $e)
{
    echo 'Une erreur est survenue ! </br>';
    die();
}