<?php

    include_once '../../Model/Categorie.php';
    include_once '../../Controller/CategorieCRUD.php';

    $CategorieCRUD = new CategorieCRUD();

	$listecategorie=$CategorieCRUD->AfficherCategorie(); 

    $error = "";

    $Categorie = null;

    $Categories = new CategorieCRUD();

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
            $Categories->ModifierCategorie($Categorie,$_POST['id_cat']);
            header('Location:ModifierCategorie.php');
        }
        else
            $error = "Missing information";
    } 
  
    if(isset($_POST['TrieCat']))
    {  
        $Trier = filter_input(INPUT_POST, 'TrieCat', FILTER_SANITIZE_STRING);
        if ($Trier == "ordre alphabetique croissant")
        {
            $listecategorie = $CategorieCRUD->TrierNomCatASC();
        }
        else
        {
            $listecategorie = $CategorieCRUD->TrierNomCatDESC();
        }
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
                                            <a href="table_categories.html">
                                                <i class="menu-icon icon-table"></i>
                                                Categories
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
                            if (isset($_POST['id_cat'])){
                                $categorie = $CategorieCRUD->RecupererCategorie($_POST['id_cat']);
                            }
                            ?>
                            <a href="AjouterCategorie.php"><button class="btn">Retour</button></a>
                            <hr>
                            <div class="module">
                                <div class="module-head">
                                    <center><h3>Modifier un categorie</h3><center>
                                </div>
                                <form action="" method="POST" onsubmit="return CTRL()">
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
                                                <center>
                                                <label>                                  </label>
                                                <label for="nom_cat"> Nom : </label>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                <input type="text" name="nom_cat" id="nom_cat" placeholder="nom du categorie" minlength="1" maxlength="20" value="<?php if (isset($_POST['id_cat'])){ 
                                                    $Cat=$CategorieCRUD->RecupererCategorie($_POST['id_cat']);
                                                 echo $Cat['nom_cat'];
                                                 } ?>" >
                                                <p>
                                                    <div id="error_nom_cat" style="color:red"></div>
                                                </p>
                                                </center>
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
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <input type="submit" class="btn" id="modif" value="Modifier"> 
                                                <label>                                  </label>
                                                </center>                                
                                                <input type="hidden" name="id_cat" value="<?php echo $categorie['id_cat']; ?>" >

                                            </td>              
                                            <td>
                                                <center>
                                                <label>                                  </label>
                                                <input class="btn" type="reset" value="Annuler">
                                                <label>                                  </label>
                                                </center>                                
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
                                        </tr>
                                    </table>
                                </form>

                                <script>

                                function CTRL()
                                {
                                    var nom_cat=document.getElementById("nom_cat").value;
                                    var error_nom_cat = document.getElementById("error_nom_cat");

                                    if(nom_cat=="")
                                    {
                                        error_nom_cat.innerHTML="Il faut saisie un nom pour le categorie !";  
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
                                    <div>
                                        <form method="POST" action ="TrierCategorie.php" align="center">
                                            <br>
                                            <button type="submit" class="btn" for="TrieCat">Trier par : </button>
                                            <select type="range" name="TrieCat" id="TrieCat">
                                                <option selected disabled>choisir...</option>
                                                    <option>ordre alphabetique croissant</option>
                                                    <option>ordre alphabetique décroissant</option>
                                            </select>
                                        </form>  
                                    </div>  
                                    <br>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><center>Nom</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($listecategorie as $categorie){
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <center>
                                                        <label>                                  </label>
                                                        <?php echo $categorie['nom_cat']; ?>
                                                        <label>                                  </label>
                                                        </center>   
                                                    </td> 
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <form method="POST" action="" align="center">
                                                            <a type="submit" name="Modifier" ><button class="btn">Modifier</button></a>
                                                            <input type="hidden" value=<?php echo $categorie['id_cat']; ?> name="id_cat">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <center><a href="SupprimerCategorie.php?id_cat=<?php echo $categorie['id_cat']; ?>"><button class="btn">Supprimer</button></a><center>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
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
                                        <form method="POST" action="exportCat.php" align="center">
                                            <a type="submit" name="Export" >
                                                <button class="btn">Export Excel</button>
                                            </a>
                                        </form>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <form method="POST" action="pdfCat.php" align="center">
                                            <a type="submit" name="PDF" >
                                                <button class="btn">Generer un fichier PDF</button>
                                            </a>
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
