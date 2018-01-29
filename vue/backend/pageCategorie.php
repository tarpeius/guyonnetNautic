<!DOCTYPE html>
<html>
<head>
    <title>Projet Guyonnet Nautic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../ressource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../ressource/css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../../ressource/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="../../ressource/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../ressource/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="../../ressource/css/forms.css" rel="stylesheet">

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
<!--                Profil  admin -->
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
                        <div class="panel-title">Page catégorie</div>
                            <label>Statut </label>
                            <input type="radio" name="active" value="male"> <span class="glyphicon glyphicon-ok"></span>
                            <input type="radio" name="active" value="female"> <span class="glyphicon glyphicon-remove"></span>
                        <div class="panel-options">
                            <button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Enregistrer</button>
                            <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Supprimer</button>
                        </div>
                    </div>
                </div>
<!--                Contenu page -->
                <div class="content-box-large">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
            <!--                 Nom categorie  -->
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
            <!--                 Categorie parente  -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Catégorie parente</label>
                                <div class="col-sm-5">
                                    <select class="selectpicker">
                                        <option data-icon="glyphicon-chevron-right">Bateau</option>
                                        <option>Semi-Rigide</option>
                                        <option>Pneumatique</option>

                                        <option data-divider="true"></option>

                                        <option data-icon="glyphicon-chevron-right">Jet-ski</option>
                                        <option>Location</option>

                                        <option data-divider="true"></option>

                                        <option data-icon="glyphicon-chevron-right">Permis-bateau</option>
                                        <option>Cotier</option>
                                        <option>Fluvial</option>
                                        <option>Hauturier</option>
                                    </select>
                                </div>
                            </div>
            <!--                 Description categorie  -->
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-7">
                                    <textarea name="description" rows="5" cols="100">

                                    </textarea>
                                </div>
                            </div>
            <!--                 Photo categorie  -->
                            <div class="form-group">
                                <label class="col-md-2 control-label">Photo</label>
                                <div class="col-md-10">
                                    <input type="file" class="btn btn-default" id="exampleInputFile1">
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

<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../ressource/bootstrap/js/bootstrap.min.js"></script>

<script src="../../ressource/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="../../ressource/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="../../ressource/vendors/ckeditor/ckeditor.js"></script>
<script src="../../ressource/vendors/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript" src="../ressource/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

<script src="../../ressource/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

<script src="../../ressource/vendors/select/bootstrap-select.min.js"></script>

<script src="../../ressource/vendors/tags/js/bootstrap-tags.min.js"></script>

<script src="../../ressource/vendors/mask/jquery.maskedinput.min.js"></script>

<script src="../../ressource/vendors/moment/moment.min.js"></script>

<script src="../../ressource/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- bootstrap-datetimepicker -->
<link href="../../ressource/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<script src="../../ressource/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="../../ressource/js/custom.js"></script>
<script src="../../ressource/js/editors.js"></script>
</body>
</html>