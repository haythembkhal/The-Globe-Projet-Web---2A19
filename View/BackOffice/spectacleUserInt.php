<?php 
//class definition
include_once '..\..\Controller\BackOffice\spectacleControllerB.php';
include_once '..\..\Controller\BackOffice\commentaireControllerB.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Globe Admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="backendCSS.css">


<script>

function ctrlSaisie(event)
{
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
}

</script> 
</head>
<body style="background-color:white;">

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
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

					<form class="navbar-search pull-left input-append" >
						<input type="text" class="span3">
						<button class="btn" type="submit">
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



	<!-- <div class="wrapper"> -->
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
										<a href="http://localhost/Website%20Project/View/BackOffice/spectacleUserInt.php">
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
											Partenaires
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

<hr>
				<div class="span9">
					
					<div class="content">
						<!-- <div class="module"> -->
							<div class="module-head">
								<h3>DataTables</h3>
							</div>
                            
							<div class="module-body table">	
							
			<div class="module-body table">	
				<h3>Table Spectacles</h3>
				<form method="POST" enctype="multipart/form-data" onsubmit="return ctrlSaisie();">
					  <div style="position: absolute;">	
					
						<label for="titre"> Titre:</label>	
						<input type="text" id="titre" name="titre" value="<?php echo $_SESSION['titre'];?>" required>
					<p id="input1"></p>
					<label for="date">Date:</label>
					<input type="datetime-local" id="date" name="date" value="<?php echo $_SESSION['date'];?>"required>
					<p id="input2"></p>
					<label for="duration">Durée:</label>
					<input type="text" id="duration" name="duration" value="<?php echo $_SESSION['duration'];?>"required>
					<p id="input3"></p>

					<label for="adresse">Adresse:</label>
					<input type="text" id="adresse" name="adresse"value="<?php echo $_SESSION['adresse'];?>"required>

						<label for="resto" >Resto à Proximité:</label>
					<input type="text" id="resto" name="resto" value="<?php echo $_SESSION['resto'];?>"required> 

					<label for="gare">Gare à Proximité:</label>
					<input  type="text" id="gare" name="gare"value="<?php echo $_SESSION['gare'];?>"required> 
					
					<label for="hotel">Hotel à Proximité:</label>
					<input  type="text" id="hotel" name="hotel"value="<?php echo $_SESSION['hotel'];?>"required> 
				</div>

                  <div  style="float:right;" style="position: relative;">				

					<!-- <label for="plan">Plan de la salle:</label> -->
					<!-- <input type="file" id="plan" name="plan" accept="image/*" > -->
					<input type="hidden" id="plan" name="plan" value="champ non utilisé">


					<label for="imgLand">Img Landscape:</label>
					<input type="file" id="imgLand" name="imgLand" accept="image/*"required>

					
					<label for="imgPort">Img Portait:</label>
					<input type="file" id="imgPort" name="imgPort" accept="image/*"required>

					<label for="video" >Lien Video:</label>
					<input type="text" id="video" name="video" value="<?php echo $_SESSION['video'];?>"required>

					<label for="carte">Lien Carte:</label>
					<input type="text" id="carte" name="carte" value="<?php echo $_SESSION['carte'];?>"required>

					<label for="desc" >Description:</label>
					<textarea type="text" id="desc" name="desc" required> <?php echo $_SESSION['description'];?></textarea>

					<label for="realisateurs">Realisateurs:</label>
					<textarea type="text" id="realisateurs" name="realisateurs" required><?php echo $_SESSION['realisateurs'];?> </textarea>
				
					<label style="color:red;"for="id"> Tu es entrain de modifier l'identifiant:</label>	
						<input type="text" id="idS" name="idS" value=" <?php echo $_SESSION['idSpec'];?>" readonly>
			
<br>
<br>
<br>

					<input name="button" type="submit"value="Modifier" style="position:relative;"  style="right: 7%;" class="regButton">
			<input name="button" type="submit"value="Ajouter" style="position:relative;"  style="right: 7%;" class="regButton">
				</form>	
		</div>
			<br><br><br>
			<br><br><br><br>
			<br><br><br><br><br>
			<br><br><br>
			<br><br><br>
			<br><br><br>
			<br><br><br>
			<div class="dropdown" style="float:left;">
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
							<th>Description</th>
						<th>Liste des Realisateurs</th>
							<th colspan="2">	<form class="example" method="POST" style="margin:auto;max-width:300px">
								<input   name="rechercheId" style="height: 42px;" type="text" placeholder="Search.." name="search">
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
							<th>Description</th>
						<th>Liste des Realisateurs</th>
							<th colspan="2">	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
								<input style="height: 42px;" type="text" placeholder="Search.." name="search">
								<button  type="submit"><i class="fa fa-search"></i></button>
							  </form></th>
						</tr>
					</tfoot>
				</table>
			</div>					
			<br>
		<br>
<hr>
			<h3>Table Commentaires</h3>
			<form method="POST">
					  <div style="position: relative;">	
					
						<label for="titre"> Nom Du Spectacle:</label>	
						<input type="text" id="spec" name="spec" value="<?php echo $_SESSION['titreSpec']?>" readonly>
						
						<label for="titre"> Nom De L'Utilisateur:</label>	
						<input type="text" id="user" name="user" value="<?php echo $_SESSION['idUser']?>" readonly>

						<label for="titre"> Date Postée:</label>	
						<input type="date" id="dateCommentaire" name="dateCommentaire" value="<?php echo $_SESSION['dateComment']?>" readonly>

						<label for="comment"> Commentaire:</label>	
						<textarea type="textbox" id="comment" name="comment" required> <?php echo $_SESSION['commentaire']?> </textarea>
						
						<br>
						<!-- <input type="radio" id="liked" name="avis" value="liked" required><ion-icon name="thumbs-up-outline"></ion-icon> -->
  					  <!-- <input type="radio" id="disliked" name="avis" value="disliked" required> <ion-icon name="thumbs-down-outline"></ion-icon> -->
						<!-- au lieu de radio je vais utiliser un hidden pour le moment, va falloir lenlever apres -->
  					  <input type="hidden" id="temp" name="avis" value="disliked" required> 
<!-- ill need to get rid ofthis -->


						<input type="hidden" id="idEval" name="idEval" value="<?php echo $_SESSION['idEval'];?>"> 
						
						<br> <br> 
						<input name="button" type="submit"value="Modifier" style="position:absolute;"  style="right: 970%;" class="regButton">
					</div>
					</form>
	<br> <br> 	<br> <br> 
	
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
					<th>Liked ou Disliked</th>
					<th colspan="2"> Suppression et Modification</th>
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
					<th>Liked ou Disliked</th>
					<th colspan="2"> Suppression et Modification</th>
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
			 
		<br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br>
			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
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