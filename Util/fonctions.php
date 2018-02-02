<?php
/*
function uploadImg($_FILES){
    var_dump($_FILES);
    $target_dir = "Util/img/";
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
    var_dump($_FILES);
}
*/