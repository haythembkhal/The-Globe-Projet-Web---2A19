<?php

    include_once '../../Model/Produit.php';
    include_once '../../Model/Categories.php';
	include_once '../../Controller/ProduitCRUD.php';
	include_once '../../Controller/CategorieCRUD.php';
	
	$ProduitCRUD = new ProduitCRUD();
	$listeproduit=$ProduitCRUD->AfficherProduit(); 

    $CategorieCRUD = new CategorieCRUD();
	$listecategorietype=$CategorieCRUD->AfficherCategorie();

    $error = "";

    $Produit = null;

    $Produits = new ProduitCRUD();

    if (isset($_POST['ajout'])) {

        $image_produit = $_FILES["image_produit"]["name"];
    
        $tmp_image_produit= $_FILES["image_produit"]["tmp_name"];  
    
        $folder = "../Uploads/".$image_produit;
    
        if (
            isset($_POST['nom_produit']) &&		
            isset($_POST['categorie_produit']) &&
            isset($_POST['quantite_produit']) && 
            isset($_POST['prix_produit']) 
            //&&&
            //&isset($_POST['image_produit']) 
    
        ) {
            if (
                !empty($_POST['nom_produit']) &&
                !empty($_POST['categorie_produit']) && 
                !empty($_POST['quantite_produit']) && 
                !empty($_POST['prix_produit'])
                //&&
                //&!empty($_POST['image_produit'])
    
            ) {
    
                $Produit = new Produit(
                    null,
                    $_POST['nom_produit'],
                    $_POST['categorie_produit'], 
                    $_POST['quantite_produit'],
                    $_POST['prix_produit'],
                    //$_POST['image_produit']
                    $folder
                );
    
                $Produits->AjouterProduit($Produit);
                header('Location:AjouterProduit.php');
            }
            else{
                $error = "Missing information";
            }
        move_uploaded_file($tmp_image_produit, $folder);
        }        
    }
    
    if(isset($_POST['RechercheNom']))
    {
        $listeproduit = $ProduitCRUD->Rechercher($_POST['RechercheNom']);
    }
    else{
        $error = "Missing information";
    }
    
    if(isset($_POST['Trie']))
    {  
        $Trier = filter_input(INPUT_POST, 'Trie', FILTER_SANITIZE_STRING);
        if ($Trier == "Prix croissant")
        {
            $listeproduit = $ProduitCRUD->TriePrixASC();
        }
        else
        {
            $listeproduit = $ProduitCRUD->TriePrixDESC();
        }
    }
    else{
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
                                            <a href="other-image_produit-profile.html">
                                                <i class="icon-inbox"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="other-image_produit-listing.html">
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
                                <form action="" method="POST" onsubmit="return CTRL()" enctype="multipart/form-data">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <label for="nom_produit"> Nom : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <input type="text" name="nom_produit" id="nom_produit" placeholder="nom du produit" minlength="1" maxlength="50">
                                                <p>
                                                    <div id="error_nom_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <label for="categorie_produit"> Catégorie : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <select type="range" name="categorie_produit" id="categorie_produit">
                                                    <option selected disabled>choisir...</option>
                                                    <?php
                                                        foreach($listecategorietype as $categorie){
                                                    ?>
                                                    <option value="<?php echo $categorie['id_cat']; ?>"><?php echo $categorie['nom_cat']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <br>
                                                <a href="AjouterCategorie.php">Nouvelle catégorie</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <label for="quantite_produit"> Quantité  : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <input type="number" name="quantite_produit" id="quantite_produit">
                                                <p>
                                                    <div id="error_quantite_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <label for="prix_produit"> Prix : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <input type="number" name="prix_produit" id="prix_produit" > DT
                                                <p>
                                                    <div id="error_prix_produit" style="color:red"></div>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <label for="image_produit"> Image : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <input type="file" name="image_produit" id="image_produit" accept=".jpg, .jpeg, .png, .gif">
                                                <p>
                                                    <div id="error_image_produit" style="color:red"></div>
                                                </p>
                                            </td>
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
                                            <td>
                                            <label>                                  </label>
                                                <input class="btn" type="submit" name="ajout" value="Ajouter"> 
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
                                function CTRL()
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
                                        error_nom_produit.innerHTML="Il faut saisie un nom pour le produit !";  
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
                                        error_quantite_produit.innerHTML="Il faut mettre le quantite de ce produit !";  
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
                                        error_prix_produit.innerHTML="Il faut mettre le prix de ce produit !";  
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
                                        error_image_produit.innerHTML="Il faut mettre une image produit pour ce produit !";  
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
                        <div class="content" id="Aff_Fil">
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Liste des produits</h3><center>
                                </div>
                                <div>
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" align="center">
                                        <br>
										<center>
                                        <button type="submit" class="btn" for="Trie">Trier par : </button>
                                        <select type="range" name="Trie" id="Trie">
                                            <option selected disabled>choisir...</option>
                                                <option>Prix croissant</option>
                                                <option>Prix décroissant</option>
                                        </select>
										</center>
                                    </form>  
                                </div>  
                                <br>
                                <div>
                                    <form action="" method="GET" align="center">
                                        <div>
										<center>
                                            <input class="btn" type="submit" value="Filtrer par :" >
                                            <?php
                                            $cnx = mysqli_connect("localhost","root","","the_globe");

                                            $categorie = "SELECT * FROM categorie";
                                            $listecategorietype  = mysqli_query($cnx, $categorie);

                                            if(mysqli_num_rows($listecategorietype) > 0)
                                            {
                                                foreach($listecategorietype as $categorielist)
                                                {
                                                    $checked = [];
                                                    if(isset($_GET['categorie']))
                                                    {
                                                        $checked = $_GET['categorie'];
                                                    }
                                            ?>
                                        <input type="checkbox" name="categorie[]" value="<?=  $categorielist['id_cat']; ?>" />
                                        <?= $categorielist['nom_cat']; 
                                            }
                                        }
                                        else
                                        {
                                            echo "No categories Found";
                                        }
                                        ?>
										</center>
                                        </div>
                                    </form>
									<br>
                                    <center><a href="AjouterProduit.php"><button class="btn">Retour</button></a></center>
                                </div>
                                <br>
                                <div>
                                    <form action="" method="POST" align="center">
                                        <div>
										<center>
                                            <input type="text" class="span3" name="RechercheNom" placeholder="rechercher...">

                                            <button class="btn" type="submit">
                                                <i class="icon-search"></i>
                                            </button>	
											</center>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><center>Nom</center></th>
                                                <th><center>Catégorie</center></th>
                                                <th><center>Quantité</center></th>
                                                <th><center>Prix</center></th>
                                                <th><center>Image</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $produit = "SELECT * FROM produits INNER JOIN categories ON id_cat=categorie_produit";
                                            $listeproduit = mysqli_query($cnx, $produit);
                                            if(isset($_GET['categorie']))
                                            {
                                                $categoriechecked = [];
                                                $categoriechecked = $_GET['categorie'];
                                                foreach($categoriechecked as $rowcategorie)
                                                {
                                                    $produit = "SELECT * FROM produits INNER JOIN categorie ON id_cat=categorie_produit WHERE categorie_produit IN ($rowcategorie)";
                                                    $listeproduit = mysqli_query($cnx, $produit);
                                                    if(mysqli_num_rows($listeproduit) > 0)
                                                    {

                                                foreach($listeproduit as $produit){
                                            ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                    <label>                                  </label>
                                                    <?php echo $produit['nom_produit']; ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                    <label>                                  </label>
                                                    <?php echo $produit['nom_cat']; ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                    <label>                                  </label>
                                                    <?php echo $produit['quantite_produit']; ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                    <label>                                  </label>
                                                    <?php echo $produit['prix_produit']; ?></td>
                                                    </center>
                                                <td>
                                                    <center>
                                                    <label>                                  </label>
                                                    <?php echo $produit['image_produit']; ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <form method="POST" action="ModifierProduit.php" align="center">
                                                        <center>
														<a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                        <input type="hidden" value=<?php echo $produit['id_produit']; ?> name="id_produit">
                                                    </center>
													</form>
                                                    <center><a href="SupprimerProduit.php?id_produit=<?php echo $produit['id_produit']; ?>"><button class="btn">Supprimer</button></a><center>
                                                </td>
                                            </tr>
                                            <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "No products Found";
                                                        }
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table> 
                                </table> 
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
                                        <form method="POST" action="export.php">
										<center>
                                            <a type="submit" name="Export" >
                                                <button class="btn">Export Excel</button>
                                            </a>
											</center>
                                        </form> 									
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <form method="POST" action="pdf.php">
										<center>
                                            <a type="submit" name="PDF" >
                                                <button class="btn">Generer un fichier PDF</button>
                                            </a>
											</center>
                                        </form>    
                                        </td>
                                    </tr>
                                </table>
                            </div>
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
                                    