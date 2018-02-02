<?php
    $target_dir = "../ressource/img/";
    $target_file = $target_dir . basename($_FILES["logoMarque"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // verifie si l'image est correcte ou fausse
    if(isset($_POST["submit"]) && isset($_FILES["logoMarque"]["name"])) {
        $check = getimagesize($_FILES["logoMarque"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // verifie si l'image existe déja
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // verifie la taille du dossier
    if ($_FILES["logoMarque"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["logoMarque"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["logoMarque"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
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


