﻿<?php 
//class definition
include_once '..\..\Controller\spectacleControllerB.php';
include_once '..\..\Controller\commentaireControllerB.php';

include_once '../../Controller/messageC.php';
$message=new MessageC();
$count=0;

$count_message=$message->nombreNouveauMessage();
$notification=new notificationC();
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Globe| Admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="backendCSS.css">


<script src="controldesaisie.js"></script> 
<script>
	
function ctrlSaisie(event)
{
var adresse=document.getElementById("adresse").value;
var resto=document.getElementById("resto").value;
var hotel=document.getElementById("hotel").value;
var gare=document.getElementById("gare").value;
var carte=document.getElementById("carte").value;
var video=document.getElementById("video").value;
var realisateurs=document.getElementById("realisateurs").value;
var desc=document.getElementById("desc").value;
var imgL=document.getElementById("imgLand").value;
var imgP=document.getElementById("imgPort").value;
var prix=document.getElementById("plan").value;
var titre=document.getElementById("titre").value;
var date=document.getElementById("date").value;
var duration=document.getElementById("duration").value;

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();


var cmon=document.getElementById("input1")
var cprenom=document.getElementById("input2")
var cemail=document.getElementById("input3")

if(!(titre.charAt(0)>="A" && titre.charAt(0)<="Z"))
{
	// event.preventDefault();
	input1.innerHTML="Titre doit commencer par une majuscule!!";
	return false;
}

//date condition 
today = yyyy + '-' + mm + '-' + dd;
if (date<today){
	input2.innerHTML="Date doit etre superieur a la date d'aujourd'hui !!";
	return false;
}
if(duration.includes('m')==false){
	input3.innerHTML="Il faut saisir en mintues de la facon suivante XXX m"
return false;
}
if(adresse=="")
{
	input4.innerHTML="Il faut saisir des données";
	return false;
}
if(resto=="")
{
	input5.innerHTML="Il faut saisir des données";
	return false;
}
if(gare=="")
{
	input6.innerHTML="Il faut saisir des données";
	return false;
}
if(hotel=="")
{
	input7.innerHTML="Il faut saisir des données";
	return false;
}
if(imgL=="")
{
	input8.innerHTML="Il faut saisir des données";
	return false;
}
if(imgP=="")
{
	input9.innerHTML="Il faut saisir des données";
	return false;
}
if(video=="")
{
	input10.innerHTML="Il faut saisir des données";
	return false;
}
if(carte=="")
{
	input11.innerHTML="Il faut saisir des données";
	return false;
}
if(desc=="")
{
	input12.innerHTML="Il faut saisir des données";
	return false;
}
if(realisateurs=="")
{
	input13.innerHTML="Il faut saisir des données";
	return false;
}
if(isNaN(prix))
{
	input14.innerHTML="Il faut saisir un nombre";
	return false;
}

}
</script>
</head>
<body style="background-color:white;">

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">The Globe</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                    
                            <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    
                                    <li class="divider"></li>
                                    <li><a href="../../Controller/logoutController.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>



	<!-- <div class="wrapper"> -->
		<div class="container">
			<div class="row">
				<div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                                <li><a href="message.php"><i class="menu-icon icon-envelope"></i>Inbox <b class="label green pull-right">
                                     <?php echo $count_message;?></b> </a></li>
                                <li><a href="task.php"><i class="menu-icon icon-bullhorn"></i>Notifications <b class="label orange pull-right">
                                    <?php echo $count;?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                               
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#toggletables">
									<i class="menu-icon icon-table"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Tables
								</a><ul id="toggletables" class="collapse unstyled">
									<li>
										<a href="table_utilisateurs.php">
											<i class="menu-icon icon-table"></i>
											Utilisateurs
										</a>
									</li>
									<li>
										<a href="table_conges.php">
											<i class="menu-icon icon-table"></i>
											Congés
										</a>
									</li>
									<li>
										<a href="table_spectacles.php">
											<i class="menu-icon icon-table"></i>
											Spectacles
										</a>
									</li>
									<li>
										<a href="table_artistes.php">
											<i class="menu-icon icon-table"></i>
											Artistes
										</a>
									</li>
									<li>
										<a href="afficherAchat.php">
											<i class="menu-icon icon-table"></i>
											Billets
										</a>
									</li>
									<li>
										<a href="AjouterProduit.php">
											<i class="menu-icon icon-table"></i>
											Produits
										</a>
									</li>
								</ul></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.php"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.php"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.php"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="../../Controller/logoutController.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>


<hr>
				<div class="span9">
					
					<div class="content">
						<!-- <div class="module"> -->
							<div class="module-head">
								<center><h3>Table Spectacles</h3></center>
							</div>
                            
							<div class="module-body table">	
							
			<div class="module-body table">	
				
				<form method="POST" enctype="multipart/form-data" onsubmit="return ctrlSaisie();">
					  <div style="position: absolute;">	
					
						<label for="titre"> Titre:</label>	
						<input type="text" id="titre" name="titre" value="<?php echo $_SESSION['titre'];?>" >
					<p id="input1"></p>
					<label for="date">Date:</label>
					<input type="datetime-local" id="date" name="date" value="<?php echo $_SESSION['date'];?>">
					<p id="input2"></p>
					<label for="duration">Durée:</label>
					<input type="text" id="duration" name="duration" value="<?php echo $_SESSION['duration'];?>">
					<p id="input3"></p>

					<label for="adresse">Adresse:</label>
					<input type="text" id="adresse" name="adresse"value="<?php echo $_SESSION['adresse'];?>">
					<p id="input4"></p>
						<label for="resto" >Resto à Proximité:</label>
					<input type="text" id="resto" name="resto" value="<?php echo $_SESSION['resto'];?>"> 
					<p id="input5"></p>

					<label for="gare">Gare à Proximité:</label>
					<input  type="text" id="gare" name="gare"value="<?php echo $_SESSION['gare'];?>"> 
					<p id="input6"></p>

					<label for="hotel">Hotel à Proximité:</label>
					<input  type="text" id="hotel" name="hotel"value="<?php echo $_SESSION['hotel'];?>"> 
					<p id="input7"></p>

				</div>

                  <div  style="float:right;" style="position: relative;">				

				  
					<label for="imgLand">Img Landscape:</label>
					<input type="file" id="imgLand" name="imgLand" accept="image/*">
					<p id="input8"></p>

					
					<label for="imgPort">Img Portait:</label>
					<input type="file" id="imgPort" name="imgPort" accept="image/*">
					<p id="input9"></p>
					
					<label for="plan">Prix:</label>
					<input  type="text" id="plan" name="plan" value="<?php echo $_SESSION['plan'];?>"> 
					<p id="input14"></p>

					<label for="video" >Lien Video:</label>
					<input type="text" id="video" name="video" value="<?php echo $_SESSION['video'];?>">
					<p id="input10"></p>

					<label for="carte">Lien Carte:</label>
					<input type="text" id="carte" name="carte" value="<?php echo $_SESSION['carte'];?>">
					<p id="input11"></p>

					<label for="desc" >Description:</label>
					<textarea type="text" id="desc" name="desc"> <?php echo $_SESSION['description'];?></textarea>
					<p id="input12"></p>

					<label for="realisateurs">Realisateurs:</label>
					<textarea type="text" id="realisateurs" name="realisateurs"><?php echo $_SESSION['realisateurs'];?> </textarea>
					<p id="input13"></p>

					<!--<label style="color:red;"for="id"> Tu es entrain de modifier l'identifiant:</label>	-->
						<input type="text" id="idS" name="idS" value=" <?php echo $_SESSION['idSpec'];?>" readonly>
			
<br>
<br>
<br>

					<input name="button" type="submit"value="Modifier" style="position:relative;"  style="right: 7%;" class="regButton">
			<input name="button" type="submit"value="Ajouter" style="position:relative;" class="regButton">		
		</form>	
		</div>
			<br><br><br>
			<br><br><br><br>
			<br><br><br><br><br>
			<br><br><br>
			<br><br><br>
			<br>
			<br><br><br>
			<br><br><br>
			<br><br><br>
			<div class="dropdown" style="float:left;">
			<br><br>
					<button class="dropbtn" >Trier</button>
					<form method='POST'>
					<div class="dropdown-content" style="left:0;">
					  <button type="submit" name="triDate" value="date" class="regButton">Date</button>
					  <br><br><br>
					  <button type="submit" name="triAlpha" value="alpha" class="regButton">Alphabétique</button>
					</div>
				  </div>	
				  </form>
				</div>

		  

		<br><br><br><br>
		<p style="color:red;" > 
		<?php 
		if (isset($_SESSION['message']))
		{
			echo $_SESSION['message'];
			$_SESSION['message']='';
		}
				?></p>
					<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
					<thead>
						<tr>
							<th>Titre</th>
							<th>Date</th>
							<th>Durée</th>
							<th>Adresse</th>
							<!-- <th>Hotels Proche</th>
							<th>Restaurant Proche</th>
							<th>Gare Proche</th> -->
							<th>Prix</th>
						<th>Les Realisateurs</th>
							<th colspan="2">	<form class="example" method="POST" style="margin:auto;max-width:300px">
								<input   name="rechercheId" style="height: 42px;" type="text" placeholder="Search..">
								<button   name="btnRecherche" type="submit"><i class="fa fa-search"></i></button>
							  </form></th>
						</tr>
					</thead>
					<tbody>
                        
<?php afficher();?>
				</tbody>
					<tfoot>
						<tr>
							<th>Titre</th>
							<th>Date</th>
							<th>Durée</th>
							<th>Adresse</th>
							<!-- <th>Hotels Proche</th>
							<th>Restaurant Proche</th>
							<th>Gare Proche</th> -->
							<th>Prix</th>
						<th>Les Realisateurs</th>
							<th colspan="2"><form class="example" method="POST" style="margin:auto;max-width:300px">
								<input   name="rechercheId" style="height: 42px;" type="text" placeholder="Search..">
								<button   name="btnRecherche" type="submit"><i class="fa fa-search"></i></button>
							  </form></th>
						</tr>
					</tfoot>
				</table>
			</div>					
			<br>
		<br>
<hr>
			<h3>Table Commentaires</h3>
			
	
			<p style="color:red;" > 
		<?php 
			echo $_SESSION['messageComment'];
				?></p>
		  </div>

		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
				<th>Nom De L'Utilisateur</th>
					<th>Nom Du Spectacle</th>
					<th>Date</th>
					<th>Commentaire</th>
					<th>Suppression</th>
					<th>Choisir</th>
				</tr>
			</thead>
			<tbody>
			<?php afficherComment();?>
</tbody>
			<tfoot>
				<tr>
				<th>Nom De L'Utilisateur</th>
					<th>Nom Du Spectacle</th>
					<th>Date</th>
					<th>Commentaire</th>
					<th>Suppression</th>
					<th>Choisir</th>
				</tr>
			</tfoot>
		</table>
	</div>			
		</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 
		
			<b class="copyright">&copy; 2022 The Globe - Alliance</b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- <script src="scripts/datatables/jquery.dataTables.js"></script> -->
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>