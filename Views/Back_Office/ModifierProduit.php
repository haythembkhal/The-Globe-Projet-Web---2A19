<?php

    include_once '../../Model/Produit.php';
	include_once '../../Controller/ProduitCRUD.php';

    $ProduitCRUD = new ProduitCRUD();
    
	$listeproduit=$ProduitCRUD->AfficherProduit(); 

    $error = "";

    $Produit = null;

    $Produits = new ProduitCRUD();

    if (
		isset($_POST['nom_produit']) &&		
        isset($_POST['type_produit']) &&
		isset($_POST['quantite_produit']) && 
        isset($_POST['prix_produit']) 
    ) {
        if (
			!empty($_POST['nom_produit']) &&
            !empty($_POST['type_produit']) && 
			!empty($_POST['quantite_produit']) && 
            !empty($_POST['prix_produit'])
        ) {
            $Produit = new Produit(
                null,
				$_POST['nom_produit'],
                $_POST['type_produit'], 
				$_POST['quantite_produit'],
                $_POST['prix_produit']
            );
            $Produits->ModifierProduit($Produit,$_POST['id_produit']);
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
                                            <a href="table_partenaires.html">
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
                            <div id="error">
                                <?php echo $error; ?>
                             </div>
                            <?php
                            if (isset($_POST['id_produit'])){
                                $produit = $ProduitCRUD->RecupererProduit($_POST['id_produit']);
                            }
                            ?>
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Modifier un produit</h3><center>
                                </div>
                                <form action="" method="POST">
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
                                                <input type="text" name="nom_produit" id="nom_produit" placeholder="nom du produit" minlength="1" maxlength="50" value="<?php echo $produit['nom_produit']; ?>" >
                                                <p>
                                                    <div class="error" id="error" style="color:red"></div>
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
                                                <select type="range" name="type_produit" id="type_produit" value="<?php echo $produit['type_produit']; ?>">
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
                                                <input type="number" name="quantite_produit" id="quantite_produit" value="<?php echo $produit['quantite_produit']; ?>">
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
                                                <select name="prix_produit" id="prix_produit" value="<?php echo $produit['prix_produit']; ?>">
                                                    <option selected disabled>prix du produit</option>
                                                    <option value="28">28</option>
                                                    <option value="35">35</option>
                                                    <option value="40">40</option>
                                                </select>  DT
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
                                                <input type="submit" class="btn" id="Modifier" value="Modifier"> 
                                                <label>                                  </label>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id_produit" value="<?php echo $produit['id_produit']; ?>" >
                                            </td>                
                                            <td>
                                                <label>                                  </label>
                                                <input type="reset" class="btn" value="Annuler" >
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
                                                    <th>Actions</th>
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
                                                    <td>
                                                        <form method="POST" action="" align="center">
                                                            <a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                            <input type="hidden" value=<?php echo $produit['id_produit']; ?> name="id_produit">
                                                        </form>
                                                        <center><a href="SupprimerProduit.php?id_produit=<?php echo $produit['id_produit']; ?>"><button class="btn">Supprimer</button></a><center>
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
                                    <h3> Fonctionnalité avancé </h3>
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
                                            <a class="btn">Gerers</a>
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

        <script>
            function ctrl()
            {
                var nom_produit=document.getElementById("nom_produit").value;
                
                if(nom_produit.charAt(0)>="A" && nom_produit.charAt(0)<="Z")
                {
                    document.getElementById('error').innerHTML="Il faut que le nom du produit commencé par une lettre majuscule !";  
                    return false;
                }
                else
                {
                    if(nom_produit=="")
                    {
                        document.getElementById('error').innerHTML="Il faut saisie un nom pour le produit !";  
                        return false;
                    }
                }
                else
                {
                    document.getElementById('error').innerHTML="";  
                }
            }
        </script>
    </body>
</html>
