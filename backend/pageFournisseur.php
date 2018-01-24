<!DOCTYPE html>
<html>
<head>
    <title>Projet Guyonnet Nautic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
<!--                Logo -->
                <div class="logo">
                    <h1><a href="index.php">Guyonnet Nautic</a></h1>
                </div>
            </div>
<!--                Barre de recherche -->
            <div class="col-md-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Recherche</button>
	                       </span>
                        </div>
                    </div>
                </div>
            </div>
<!--                Profil -->
            <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon compte <b class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="profile.html">Profil</a></li>
                                    <li><a href="login.html">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
<!--                Main menu -->
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Catalogue
                            <span class="caret pull-right"></span>
                        </a>
                        <ul>
                            <li><a href="listeProduits.php">Produits</a></li>
                            <li><a href="listeCategories.php">Catégories</a></li>
                            <li><a href="listeFournisseurs.php">Fournisseurs/Marques</a></li>
                        </ul>
                    </li>
                    <li><a href="listeCommande.php"><i class="glyphicon glyphicon-calendar"></i> Commandes</a></li>
                    <li><a href="listeClients.php"><i class="glyphicon glyphicon-stats"></i> Clients</a></li>
                    <li><a href="promotion.php"><i class="glyphicon glyphicon-list"></i> Promotions</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Transport
                            <span class="caret pull-right"></span>
                        </a>
                        <ul>
                            <li><a href="transport.php">Transport</a></li>
                            <li><a href="transporteur.php">Transporteur</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Parametres</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Stats</a></li>
                </ul>
            </div>
        </div>
<!--                Titre page -->
        <div class="col-md-9">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Page fournisseur</div>
                    <label></label>
                    <div class="panel-options">
                        <button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Enregistrer</button>
                        <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Supprimer</button>
                    </div>
                </div>
            </div>
<!--            Formulaire création fournisseur -->
            <div class="content-box-large">
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
            <!--        Nom input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Telephone input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Adresse input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Adresse</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Code postal input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Code postal</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Ville input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Ville</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Pays input -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Pays</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            <!--        Logo input -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Logo</label>
                            <div class="col-md-10">
                                <input type="file" class="btn btn-default" id="exampleInputFile1">
                                <p class="help-block">
                                    some help text here.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">

        <div class="copy text-center">
            Copyright 2014 <a href='#'>Website</a>
        </div>

    </div>
</footer>

<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="vendors/ckeditor/ckeditor.js"></script>
<script src="vendors/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

<script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

<script src="vendors/select/bootstrap-select.min.js"></script>

<script src="vendors/tags/js/bootstrap-tags.min.js"></script>

<script src="vendors/mask/jquery.maskedinput.min.js"></script>

<script src="vendors/moment/moment.min.js"></script>

<script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- bootstrap-datetimepicker -->
<link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/editors.js"></script>
</body>
</html>