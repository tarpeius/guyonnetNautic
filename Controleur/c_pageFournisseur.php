<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}
switch($action)
{
    case "ajout": // a changer selon besoin
        // ajout  fonction ajout photo
    include('Vue/backend/v_accueil.php');
    break;
    default:
        include("Vue/backend/v_accueil.php");
        break;
}





try {
    $db = new PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8', 'root', '');

    $nomMarque = $_POST['nomMarque'];
    $logoMarque = $_FILES["logoMarque"]["name"];

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO marque (nom_marque,logo_marque) VALUES ('$nomMarque','$logoMarque')";
    $db->exec($sql);
    echo "Enregistrement réussie avec succès";

    $sql1 = "SELECT logo_marque FROM marque WHERE logo_marque = $logoMarque";
    $db->exec($sql1);
    var_dump($sql1);
}
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    catch(PDOException $e) {
        echo $sql1 . "<br>" . $e->getMessage();
    }

    $db = null;
?>
<img src="../ressource/img/<?php echo $logoMarque?>">


