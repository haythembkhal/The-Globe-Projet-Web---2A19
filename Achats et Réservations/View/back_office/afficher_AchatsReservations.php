<?php
    session_start();
    include '../../Controller/AchatsC.php';
    //include '../../Controller/ReservationC.php';

    $AchatC = new AchatC();
    $listeAchats=$AchatC->afficherAchat();

    /*$ReservationC = new ReservationC();
    $listeReservation=$ReservationC->afficherReservation();*/
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
							<!--<form class="form-horizontal row-fluid">
								<br>
								<div class="module-head">
									<h3>Achat :</h3>
								</div>
								<br>
								<div class="control-group">
									<label class="control-label" for="idClient">ID Client</label>
									<div class="controls">
										<input type="text" id="idClient" placeholder="Veuillez saisir l'ID Client" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="idSpectacle">ID Spectacle</label>
									<div class="controls">
										<input type="text" id="idSpectacle" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="prixTotal">Prix Total</label>
									<div class="controls">
										<div class="input-append">
											<input type="text" id="prixTotal" placeholder="0.000" class="span8"><span class="add-on">DT</span>
										</div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="dateAchat">Date Achat</label>
									<div class="controls">
										<input type="date" id="dateAchat" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="adresseEmail">Adresse Email</label>
									<div class="controls">
										<input type="email" id="adresseEmail" placeholder="Veuillez saisir l'adresse email" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="nbrPlaces">Nombre Places</label>
									<div class="controls">
										<input type="number" id="nbrPlaces" step="1" min="1" max="20" class="span8">
									</div>
								</div>

								<br>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn">Ajouter Achat</button>
										<button type="submit" class="btn">Modifier Achat</button>
									</div>
								</div>
							</form>

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
							</form> -->

							<br>

							<div class="module-head">
								<h3>Données Achats et Réservations</h3>
							</div>
							<div class="module-body">

								<div class="module">
									<div class="module-head">
										<h3>Table Achats</h3>
									</div>
									<div class="module-body table">
										<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%" id="tableA">
											<thead>
												<tr class="center">
													<th class="center">ID Achat</th>
													<th class="center">ID Client</th>
													<th class="center">ID Spectacle</th>
													<th class="center">Prix Total</th>
													<th class="center">Date Achat</th>
													<th class="center">Adresse Email</th>
													<th class="center">Nombre Places</th>
													<th class="center">Opérations sur table</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    foreach($listeAchats as $Achat){
                                                ?>
												<tr class="center">
													<td class="center"><?php echo $Achat['idAchat']; ?></td>
													<td class="center"><?php echo $Achat['idClient']; ?></td>
													<td class="center"><?php echo $Achat['idSpectacle']; ?></td>
													<td class="center"><?php echo $Achat['prixTotal']; ?></td>
													<td class="center"><?php echo $Achat['dateAchat']; ?></td>
													<td class="center"><?php echo $Achat['adresseEmail']; ?></td>
													<td class="center"><?php echo $Achat['nbrePlaces']; ?></td>
                                                    <td class="center">
														<a href="supprimer_AchatsReservations.php?idAchat=<?php echo $Achat['idAchat']; ?>">Supprimer</a>
													</td>
													<!--<<td class="center">
                                                        <form method="POST" action="supprimer_AchatsReservations.php">
                                                            <input type="submit" name="supprimer" value="supprimer" class="btn">
                                                            <input type="hidden" value=<?php //echo $Achat['idAchat'];?> name="idAchat">
                                                        </form>	
													</td>-->
												</tr>
                                                <?php
                                                    }
                                                ?>

											</tbody>
											<tfoot>
												<tr class="center">
													<th class="center">ID Achat</th>
													<th class="center">ID Client</th>
													<th class="center">ID Spectacle</th>
													<th class="center">Prix Total</th>
													<th class="center">Date Achat</th>
													<th class="center">Adresse Email</th>
													<th class="center">Nombre Places</th>
													<th class="center">Opérations sur table</th>
												</tr>
											</tfoot>
										</table>
									</div>

								</div><!--/.module-->
								<br>
								<br>
								<div class="module">
									<div class="module-head">
										<h3>Table Réservations</h3>
										</div>
										<div class="module-body table">
										<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
											<thead>
												<tr class="center">
													<th  class="center">ID Réservation</th>
													<th class="center">ID Achat</th>
													<th class="center">Numéro Siège</th>
													<th class="center">Opérations sur table</th>
												</tr>
											</thead>
											<tbody>
                                                <!--<?php
                                                    //foreach($listeReservation as $Reservation){
                                                ?>
												<tr class="center">
													<td class="center"><?php //echo $Reservation['idReservation']; ?></td>
													<td class="center"><?php //echo $Reservation['idAchat']; ?></td>
													<td class="center"><?php //echo $Reservation['numSiege']; ?></td>
													<td class="center">
														<a href="supprimer_Reservation.php?idReservation=<?php //echo $adherent['idReservation']; ?>">Supprimer</a>
													</td>
												</tr>
                                                <?php 
                                                    //}
                                                ?>-->
											</tbody>
											<tfoot>
												<tr class="center">
													<th  class="center">ID Réservation</th>
													<th class="center">ID Achat</th>
													<th class="center">Numéro Siège</th>
													<th class="center">Opérations sur table</th>
												</tr>
											</tfoot>
										</table>
									</div>
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