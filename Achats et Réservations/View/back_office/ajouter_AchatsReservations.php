<?php
include_once '../../Model/Achat.php';
include '../../Controller/AchatsC.php';

$error = "";

//create Achat
$Achat = null;

//create an instance of the controller
$AchatC = new AchatC();

if(
	isset($_POST["idAchat"]) &&
	isset($_POST["idClient"]) &&
	isset($_POST["idSpectacle"]) &&
	isset($_POST["prixTotal"]) &&
	isset($_POST["dateAchat"]) &&
	isset($_POST["adresseEmail"]) &&
	isset($_POST["nbrePlaces"])
	)
	{
		if (
			!empty($_POST["idAchat"]) &&
			!empty($_POST["idClient"]) &&
			!empty($_POST["idSpectacle"]) &&
			!empty($_POST["prixTotal"]) &&
			!empty($_POST["dateAchat"]) &&
			!empty($_POST["adresseEmail"]) &&
			!empty($_POST["nbrePlaces"])
			)
			{
				$Achat = new Achat(
					$_POST['idAchat'],
					$_POST['idClient'],
					$_POST['idSpectacle'],
					$_POST['prixTotal'],
					$_POST['dateAchat'],
					$_POST['adresseEmail'],
					$_POST['nbrePlaces']
				);

				$AchatC->ajouterAchat($Achat);
				header('Location:afficher_AchatsReservations.php');
			}
			else
				$error = "Missing information";
	}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
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
			  		The GLOBE
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
										<a href="table_Achats_Reservations.html">
											<i class="menu-icon icon-table"></i>
											Achats et Réservations
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


				<div class="span9">
					<div class="content">
						
						<div class="module">
							<form name="formAchat" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
								<br>
								<div class="module-head">
									<h3>Achat :</h3>
								</div>
								<br>
								<div class="control-group">
									<label class="control-label" for="idAchat">ID Achat</label>
									<div class="controls">
										<input type="text" id="idAchat" placeholder="Veuillez saisir l'ID Achat" class="span8">
                                        <p> <span class="error" id="erroridA" style="color:red"></span></p>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="idClient">ID Client</label>
									<div class="controls">
										<input type="text" id="idClient" placeholder="Veuillez saisir l'ID Client" class="span8">
                                        <p> <span class="error" id="erroridC" style="color:red"></span></p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="idSpectacle">ID Spectacle</label>
									<div class="controls">
										<input type="text" id="idSpectacle" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
                                        <p> <span class="error" id="erroridS" style="color:red"></span></p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="prixTotal">Prix Total</label>
									<div class="controls">
										<div class="input-append">
											<input type="number" id="prixTotal" placeholder="0.000" class="span8"><span class="add-on">DT</span>
                                            <p> <span class="error" id="errorP" style="color:red"></span></p>
										</div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="dateAchat">Date Achat</label>
									<div class="controls">
										<input type="date" id="dateAchat" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
                                        <p> <span class="error" id="errorDA" style="color:red"></span></p>
                                    </div>
								</div>

								<div class="control-group">
									<label class="control-label" for="adresseEmail">Adresse Email</label>
									<div class="controls">
										<input type="email" id="adresseEmail" placeholder="abc123@exemple.com" class="span8">
                                        <p> <span class="error" id="errorAE" style="color:red"></span></p>
                                    </div>
								</div>

								<div class="control-group">
									<label class="control-label" for="nbrePlaces">Nombre Places</label>
									<div class="controls">
										<input type="number" id="nbrePlaces" step="1"  placeholder="0" class="span8">
                                        <p> <span class="error" id="errorNP" style="color:red"></span></p>
                                    </div>
								</div>

								<br>
								<div class="control-group">
									<div class="controls">
										<input type="submit" class="btn" id="btnA" value="Ajouter">
										<button><a href="afficher_AchatsReservations.php">Annuler</a></button>
										<!--<form method="POST" action="Modifier_AchatsReservations.php">
											<input type="submit" class="btn" id="btnM" value="Modifier"></button>

										</form>-->
									</div>

								
								</div>
							</form>

                            <script>
                                function validateForm()
                                {
									var idAchaat= document.forms["formAchat"]["idAchat"].value;
                                    var idClient= document.forms["formAchat"]["idClient"].value;
                                    var idSpectacle= document.forms["formAchat"]["idSpectacle"].value;
                                    var prixTotal= document.forms["formAchat"]["prixTotal"].value;
                                    var dateAchat= document.forms["formAchat"]["dateAchat"].value;
                                    var adresseEmail= document.forms["formAchat"]["adresseEmail"].value;
                                    var nbrePlaces= document.forms["formAchat"]["nbrePlaces"].value;

									var today = new Date();
									var dd = String(today.getDate()).padStart(2, '0');
									var mm = String(today.getMonth() + 1).padStart(2, '0'); //January = 0
									var yyyy = today.getFullYear();
                                    

									if(idAchat == "")
									{
										document.getElementById('erroridA').innerHTML="le champ ID Achat ne peut pas être vide";  
    									return false;
									}

									if(idClient == 0)
									{
										document.getElementById('erroridA').innerHTML="Veuillez choisir une valeur > 0";  
    									return false;
									}

                                    if(idClient == "")
									{
										document.getElementById('erroridC').innerHTML="le champ ID Client ne peut pas être vide";  
    									return false;
									}

									if(idClient == 0)
									{
										document.getElementById('erroridC').innerHTML="Veuillez choisir une valeur > 0";  
    									return false;
									}

									if(idSpectacle == "")
									{
										document.getElementById('erroridS').innerHTML="le champ ID Spectacle ne peut pas être vide";  
    									return false;
									}

									if(idSpectacle == 0)
									{
										document.getElementById('erroridS').innerHTML="Veuillez choisir une valeur > 0";  
    									return false;
									}

									if(prixTotal == 0)
									{
										document.getElementById('errorP').innerHTML="Le champ Prix Total ne peut pas être vide";  
    									return false;
									}

									if(dateAchat == "")
									{
										document.getElementById('errorDA').innerHTML="Veuillez choisir une date";  
    									return false;
									}

									if(dateAchat>today)
									{
										document.getElementById('errorDA').innerHTML="La date d'achat doit être < à la date d'aujourd'hui";  
    									return false;
									}

									if(adresseEmail == "")
									{
										document.getElementById('errorAE').innerHTML="Veuillez saisir votre Adresse Email";  
    									return false;
									}

									function checkEmail(email) 
									{
            						 	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            							 return re.test(email);
        							}

									if(!checkEmail(adresseEmail))
									{
										document.getElementById('errorAE').innerHTML="l'adresse mail doit correspondre au format : abc123@exemple.com";  
    									return false;
									}

									if(nbrePlaces == "")
									{
										document.getElementById('errorNP').innerHTML="Veuillez choisir un Nombre de Places";  
    									return false;
									}

									if(nbrePlaces == 0)
									{
										document.getElementById('errorNP').innerHTML="Le nombre de places doit être > 0";  
    									return false;
									}

                                }
                            </script>

							<form class="form-horizontal row-fluid">
								<br>
								<div class="module-head">
									<h3>Réservation : </h3>
								</div>
								<br>

								<div class="control-group">
									<label class="control-label" for="basicinput">ID Achat</label>
									<div class="controls">
										<input type="text" id="basicinput" placeholder="Veuillez saisir l'ID Achat" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Num Siège</label>
									<div class="controls">
										<input type="text" id="basicinput" placeholder="Veuillez saisir le numéro de la place" class="span8">
									</div>
								</div>

								<br>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn">Ajouter Réservation</button>
										<button type="submit" class="btn">Modifier Réservation</button>
									</div>
								</div>
							</form>

							<br>

					<br />
					<div class="module">
						
					</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	

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