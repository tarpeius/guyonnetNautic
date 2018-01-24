<!DOCTYPE html>
<html>
<head>
    <title>Projet Guyonnet Nautic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

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
                                    <li><a href="login.html">Deconnexion</a></li>
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
                        <div class="panel-title">Fournisseurs</div>
                        <label></label>
        <!--        Bouton créer fournisseur -->
                    <div class="panel-options">
                        <a href="pageFournisseur.php"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Créer fournisseur</button></a>
                    </div>
                </div>
            </div>
<!--                Contenu page -->
        <!--            Tableau liste fournisseurs(Id, logo, nom, nb produit, affichée, actions -->
            <div class="content-box-large">
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Logo</th>
                            <th>Nom</th>
                            <th>Nombre de produits</th>
                            <th>Affichée</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>1</td>
                            <td><img src="https://www.tuxboard.com/photos/2012/04/bateau-flottant-12.jpg" width="150px" height="90px"></td>
                            <td>Yamaha</td>
                            <td>21</td>
                            <td>
                                <span class="glyphicon glyphicon-ok"></span>
                            </td>
                            <td>
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="glyphicon glyphicon-file"></span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>2</td>
                            <td><img src="http://teamwatersport.fr/wp-content/uploads/2015/02/2-620x245.jpg" width="150px" height="90px"></td>
                            <td>Seadoo</td>
                            <td>5</td>
                            <td>
                                <span class="glyphicon glyphicon-ok"></span>
                            </td>
                            <td>
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="glyphicon glyphicon-file"></span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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

<link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="vendors/datatables/dataTables.bootstrap.js"></script>

<script src="js/custom.js"></script>
<script src="js/tables.js"></script>
</body>
</html>