<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="../../Util/css/styles.css" >
    <link rel="stylesheet" href="../../Util/bootstrap/css/bootstrap.min.css" >
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Connectez vous pour acceder au site Guyonnet Nautic</h1>
                <div class="account-wall">
                    <img class="profile-img" src=""
                         alt="">
                    <form class="form-signin" method="POST" action="index.php?c=connexion&a=authentification">
                        <input type="text" name="pseudo" class="form-control" placeholder="Email" required autofocus>
                        <input type="password" name="pwd" class="form-control" placeholder="Mot de Passe" required>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion">
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if(!empty($erreur)){
            echo"<div class='alert alert-danger'>
            <strong>".$erreur.".</strong>
        </div>";
        }
        ?>
    </div>