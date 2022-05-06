<?php

    include_once '../../Model/Produit.php';
    include_once '../../Model/Categorie.php';
	include_once '../../Controller/ProduitCRUD.php';
	include_once '../../Controller/CategorieCRUD.php';
	
	$ProduitCRUD = new ProduitCRUD();
	$listeproduit=$ProduitCRUD->AfficherProduit(); 

    $CategorieCRUD = new CategorieCRUD();
	$listecategorietype=$CategorieCRUD->AfficherCategorie();

    $error = "";

    $Produit = null;

    $Produits = new ProduitCRUD();

    if (
		isset($_POST['nom_produit']) &&		
        isset($_POST['categorie_produit']) &&
		isset($_POST['quantite_produit']) && 
        isset($_POST['prix_produit']) &&
        isset($_POST['image_produit'])
    ) {
        if (
			!empty($_POST['nom_produit']) &&
            !empty($_POST['categorie_produit']) && 
			!empty($_POST['quantite_produit']) && 
            !empty($_POST['prix_produit']) &&
            !empty($_POST['image_produit']) 
        ) {
            $Produit = new Produit(
                null,
				$_POST['nom_produit'],
                $_POST['categorie_produit'], 
				$_POST['quantite_produit'],
                $_POST['prix_produit'],
                $_POST['image_produit']
            );

            $Produits->AjouterProduit($Produit);
            header('Location:AjouterProduit.php');
        }
        else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Globe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="categorie" href="index.html">
                        The Globe
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#">
                                <i class="icon-envelope"></i>
                            </a></li>
                            <li><a href="#">
                                <i class="icon-eye-open"></i>
                            </a></li>
                            <li><a href="#">
                                <i class="icon-bar-chart"></i>
                            </a></li>
                        </ul>

                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                                                </ul>
                            </li>
                            
                            <li><a href="#">
                                Support
                            </a></li>
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/user.png" class="nav-avatar" />
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->    

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active">
                                    <a href="index.html">
                                        <i class="menu-icon icon-dashboard"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="activity.html">
                                        <i class="menu-icon icon-bullhorn"></i>
                                        News Feed
                                    </a>
                                </li>
                                <li>
                                    <a href="message.html">
                                        <i class="menu-icon icon-inbox"></i>
                                        Inbox
                                        <b class="label green pull-right">11</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="task.html">
                                        <i class="menu-icon icon-tasks"></i>
                                        Tasks
                                        <b class="label orange pull-right">19</b>
                                    </a>
                                </li>
                            </ul><!--/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                    <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                    <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                    <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                    <li><a class="collapsed" data-toggle="collapse" href="#toggletables">
                                        <i class="menu-icon icon-table"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Tables
                                    </a><ul id="toggletables" class="collapse unstyled">
                                        <li>
                                            <a href="table_utilisateurs.html">
                                                <i class="menu-icon icon-table"></i>
                                                Utilisateurs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table_conges.html">
                                                <i class="menu-icon icon-table"></i>
                                                Congés
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table_spectacles.html">
                                                <i class="menu-icon icon-table"></i>
                                                Spectacles
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table_artistes.html">
                                                <i class="menu-icon icon-table"></i>
                                                Artistes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table_billets.html">
                                                <i class="menu-icon icon-table"></i>
                                                Billets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table_produits.html">
                                                <i class="menu-icon icon-table"></i>
                                                Produits
                                            </a>
                                        </li>
                                    </ul></li>
                                    

                                    <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                                </ul><!--/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-cog"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        More Pages
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li>
                                            <a href="other-login.html">
                                                <i class="icon-inbox"></i>
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="other-user-profile.html">
                                                <i class="icon-inbox"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="other-user-listing.html">
                                                <i class="icon-inbox"></i>
                                                All Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-signout"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div><!--/.sidebar-->
                    </div><!--/.span3-->                                

                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Liste des produits</h3><center>
                                </div>
                                <div class="module-body table">
                                    <form name="search_form" method="POST" action="">
                                        <div class="module-head">
                                            <!--<input type="text" id="myInput" onkeyup="SEARCH()" placeholder="Rechercher....">-->
                                            search : 
                                            <input type="text" name="search_box" value="" placeholder="Rechercher....">
                                            <input type="submit" name="search" value="sreaer...">
                                            <?php
                                            include_once '../../config.php';

                                            $sear ="SELECT * FROM produits ";

                                            if(isset($_POST['search'])) {
                                                $search_term = mysql_real_escape_string($_POST['search_box']);
                                                $sear .= "WHERE nom_produit = '($search_term)' ";
                                            }
                                            $query_sear = mysql_query($sear) or die(mysql_error());
                                            ?>

                                        </div>
                                    </form>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <table class="table table-striped" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Catégorie</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <?php
                                                while ($row = mysql_fetch_array($query_sear)){
                                                ?>
                                                    <td><?php echo $row['nom_produit'];?></td>
                                                    <td><?php echo $row['categorie_produit']; ?></td>
                                                    <td><?php echo $row['quantite_produit']; ?></td>
                                                    <td><?php echo $row['prix_produit']; ?></td>
                                                    <td><?php echo $row['image_produit']; ?></td>
                                                    <td>
                                                        <form method="POST" action="ModifierProduit.php" align="center">
                                                            <a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                            <input type="hidden" value=<?php echo $row['id_produit']; ?> name="id_produit">
                                                        </form>
                                                        <center><a href="SupprimerProduit.php?id_produit=<?php echo $row['id_produit']; ?>"><button class="btn">Supprimer</button></a><center>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table> 
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>   