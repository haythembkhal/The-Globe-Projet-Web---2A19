<?php

    include_once '../../Model/Produit.php';
    include_once '../../Model/Categorie.php';
	include_once '../../Controller/CRUD.php';
	
	$ProduitCRUD = new ProduitCRUD();
    $CategorieCRUD = new CategorieCRUD();

	$listeproduit=$ProduitCRUD->AfficherProduit(); 
	$listecategorie=$CategorieCRUD->AfficherCategorie(); 

    $error = "";

    $Produit = null;
    $Categorie = null;

    $Produits = new ProduitCRUD();
    $Categories = new CategorieCRUD();

    if (
		isset($_POST['nom_produit']) &&		
        isset($_POST['type_produit']) &&
		isset($_POST['quantite_produit']) && 
        isset($_POST['prix_produit']) &&
        isset($_POST['image_produit'])
    ) {
        if (
			!empty($_POST['nom_produit']) &&
            !empty($_POST['type_produit']) && 
			!empty($_POST['quantite_produit']) && 
            !empty($_POST['prix_produit']) &&
            !empty($_POST['image_produit']) 
        ) {
            $Produit = new Produit(
                null,
				$_POST['nom_produit'],
                $_POST['type_produit'], 
				$_POST['quantite_produit'],
                $_POST['prix_produit'],
                $_POST['image_produit']
            );
            $Produits->AjouterProduit($Produit);
        }
        else
            $error = "Missing information";
    }   

    if (
		isset($_POST['nom_cat'])
    ) {
        if (
			!empty($_POST['nom_cat'])
        ) {
            $Categorie = new Categorie(
                null,
				$_POST['nom_cat']
            );
            $Categories->AjouterCategorie($Categorie);
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

                    <a class="brand" href="index.html">
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
                                            <a href="table_produits_categories.html">
                                                <i class="menu-icon icon-table"></i>
                                                Produits_Categories
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
                                    <center><h3>Ajouter un produit</h3><center>
                                </div>
                                <form action="" method="POST" onsubmit="return CTRL_P()">
                                    <table class="table">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="nom_produit"> Nom : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="nom_produit" id="nom_produit" placeholder="nom du produit" minlength="1" maxlength="50">
                                                <p>
                                                    <div id="error_nom_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="type_produit"> Type : </label>
                                            </td>
                                            <td>
                                                <select type="range" name="type_produit" id="type_produit">
                                                    <option selected disabled>Type de produit</option>
                                                    <option value="Pull">Pull</option>
                                                    <option value="Sac">Sac</option>
                                                    <option value="Casquette">Casquette</option>
                                                </select>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="quantite_produit"> Quantité  : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="quantite_produit" id="quantite_produit">
                                                <p>
                                                    <div id="error_quantite_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                            <td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="prix_produit"> Prix : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="prix_produit" id="prix_produit" > DT
                                                <p>
                                                    <div id="error_prix_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="image_produit"> Image : </label>
                                            </td>
                                            <td>
                                                <input type="file" name="image_produit" id="image_produit">
                                                <p>
                                                    <div id="error_image_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <br>
                                    </table>
                                    <div class="module-head"></div>
                                    <table class="table">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <label>                                  </label>
                                                <input class="btn" type="submit" value="Ajouter"> 
                                                <label>                                  </label>
                                            </td>
                                            <td>
                                                <label>                                  </label>
                                                <input class="btn" type="reset" value="Annuler" >
                                                <label>                                  </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </form>
                                <script>

                                function CTRL_P()
                                {
                                    var nom_produit=document.getElementById("nom_produit").value;
                                    var error_nom_produit = document.getElementById("error_nom_produit");

                                    var quantite_produit=document.getElementById("quantite_produit").value;
                                    var error_quantite_produit = document.getElementById("error_quantite_produit");

                                    var prix_produit=document.getElementById("prix_produit").value;
                                    var error_prix_produit = document.getElementById("error_prix_produit");

                                    var image_produit=document.getElementById("image_produit").value;
                                    var error_image_produit = document.getElementById("error_image_produit");

                                    if(nom_produit=="")
                                    {
                                        document.getElementById('error_nom_produit').innerHTML="Il faut saisie un nom pour le produit !";  
                                        return false;
                                    }
                                    else 
                                        if(nom_produit.charAt(0)>="a" && nom_produit.charAt(0)<="z")
                                        {
                                            error_nom_produit.innerHTML="Il faut que le nom du produit commencé par une lettre majuscule !";  
                                            return false;
                                        }
                                        else
                                        {
                                            error_nom_produit.innerHTML="";  
                                        }

                                    if(quantite_produit=="")
                                    {
                                        document.getElementById('error_quantite_produit').innerHTML="Il faut mettre le quantite de ce produit !";  
                                        return false;
                                    }
                                    else 
                                        if(quantite_produit<= 0)
                                        {
                                            error_quantite_produit.innerHTML="Il faut que la quantite du produit doit superieure a 0 !";  
                                            return false;
                                        }
                                        else
                                        {
                                            error_quantite_produit.innerHTML="";  
                                        }
                                    
                                    if(prix_produit=="")
                                    {
                                        document.getElementById('error_prix_produit').innerHTML="Il faut mettre le prix de ce produit !";  
                                        return false;
                                    }
                                    else 
                                        if(prix_produit<= 0)
                                        {
                                            error_prix_produit.innerHTML="Il faut que le prix du produit doit superieure a 0 !";  
                                            return false;
                                        }
                                        else
                                        {
                                            error_prix_produit.innerHTML="";  
                                        }

                                    if(image_produit=="")
                                    {
                                        document.getElementById('error_image_produit').innerHTML="Il faut mettre une image pour ce produit !";  
                                        return false;
                                    }
                                    else 
                                        {
                                            error_image_produit.innerHTML="";  
                                        }
                                }

                                </script>

                            </div>
                        </div>
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Liste des produits</h3><center>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Type</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($listeproduit as $produit){
                                                ?>
                                                <tr>
                                                    <td><?php echo $produit['nom_produit']; ?></td>
                                                    <td><?php echo $produit['type_produit']; ?></td>
                                                    <td><?php echo $produit['quantite_produit']; ?></td>
                                                    <td><?php echo $produit['prix_produit']; ?></td>
                                                    <td><?php echo $produit['image_produit']; ?></td>
                                                    <td>
                                                        <form method="POST" action="Modification.php" align="center">
                                                            <a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                            <input type="hidden" value=<?php echo $produit['id_produit']; ?> name="id_produit">
                                                        </form>
                                                        <center><a href="Suppression.php?id_produit=<?php echo $produit['id_produit']; ?>"><button class="btn">Supprimer</button></a><center>
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

                        <div class="content">    
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Ajouter un categorie</h3><center>
                                </div>
                                <form action="" method="POST" onsubmit="return CTRL_C()">
                                    <table class="table">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <label>                                  </label>
                                                <label for="nom_cat"> Nom : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="nom_cat" id="nom_cat" placeholder="nom du cat" minlength="1" maxlength="20">
                                                <p>
                                                    <div id="error_nom_cat" style="color:red"></div>
                                                </p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <br>
                                    </table>
                                    <div class="module-head"></div>
                                    <table class="table">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <label>                                  </label>
                                                <input class="btn" type="submit" value="Ajouter"> 
                                                <label>                                  </label>
                                            </td>
                                            <td>
                                                <label>                                  </label>
                                                <input class="btn" type="reset" value="Annuler" >
                                                <label>                                  </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </form>
                                <script>

                                function CTRL_C()
                                {
                                    var nom_cat=document.getElementById("nom_cat").value;
                                    var error_nom_cat = document.getElementById("error_nom_cat");

                                    if(nom_cat=="")
                                    {
                                        document.getElementById('error_nom_cat').innerHTML="Il faut saisie un nom pour le categorie !";  
                                        return false;
                                    }
                                    else 
                                        if(nom_cat.charAt(0)>="a" && nom_cat.charAt(0)<="z")
                                        {
                                            error_nom_cat.innerHTML="Il faut que le nom du categorie commencé par une lettre majuscule !";  
                                            return false;
                                        }
                                        else
                                        {
                                            error_nom_cat.innerHTML="";  
                                        }
                                }

                                </script>
                            </div>
                        </div>
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Liste des categories</h3><center>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>   </th>
                                                    <th>Nom</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($listecategorie as $categorie){
                                                ?>
                                                <tr>
                                                    <td>  </td>
                                                    <td><?php echo $categorie['nom_cat']; ?></td>
                                                    <td>
                                                        <form method="POST" action="Modification.php" align="center">
                                                            <a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                            <input type="hidden" value=<?php echo $categorie['id_cat']; ?> name="id_cat">
                                                        </form>
                                                        <center><a href="Suppression.php?id_cat=<?php echo $categorie['id_cat']; ?>"><button class="btn">Supprimer</button></a><center>
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

                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <center><h3> Fonctionnalité avancé </h3><center>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label for="trie"> Trier par : </label>
                                            <select id="trie" name="trie">
                                                <option value="a">Nom</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="recherche"> Rechercher : </label>
                                            <input type="text" id="recherche">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="btn">Generer un fichier PDF</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="btn">Gerer</a>
                                        </td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 The globe </b> All rights reserved.
            </div>
	    </div>

        <script src="scripts/jquery-1.9.1.min.js"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="scripts/datatables/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('.datatable-1').dataTable();
                $('.dataTables_paginate').addClass("btn-group datatable-pagination");
                $('.dataTables_paginate > a').wrapInner('<span />');
                $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
                $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
            } );
	    </script>
    </body>
</html>