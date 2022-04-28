<?php
    include '../Controller/crud_func.php';
    $CongeC = new CongesC;
    $listeConge = $CongeC->afficherConges();
	$typeC = new typeC;
	$listetypeC = $typeC->affichertypeC();
	$listetype = $typeC->affichertypeC();
	$typeM = $typeC->recuperertypeC($_POST['id_typeC']);
	

	
	$error ="";
	$typecA = NULL;
	$typecA = new typeC();
	if (
        isset($_POST["typeC"]) &&
		isset($_POST["maxC"])
    ) {
        if (
            !empty($_POST["typeC"]) && 
			!empty($_POST['maxC'])) 
        {
            $typeCA = new type_cong(NULL,
						$_POST['typeC'],
						$_POST['maxC']
					);
			$typeC->modifiertypeC($typeCA, $_POST['id_typeC']);
			header('Location:Afficher.php');
		}
		else
			$error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">
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
							<div class="module-head">
								<h3>Tables congés</h3>
							</div>
							<table class="table table-striped table-bordered table-condensed">
								<thead>
								  <tr>
									  <th>Employé</th>
									  <th>Type congés</th>
									  <th>Date début</th>
									  <th>Date fin</th>
									  <th>Etat</th>
									  <th width="160px">Action</th>
								  </tr>
								</thead>
								<tbody>
                                <?php
                                    foreach($listeConge as $Conge){
                                ?>
								<tr>
									<td><?php echo $Conge['employes']; ?></td>
                                    <td><?php echo $Conge['Name']; ?></td>
                                    <td><?php echo $Conge['date_deb']; ?></td>
                                    <td><?php echo $Conge['date_fin']; ?></td>
                                    <td>
										<?php
											 //echo $Conge['etat'];
											 if(strval($Conge['etat']) == '1')
											 {
												 echo("Refusé");
											 }
											 elseif(strval($Conge['etat']) == '0')
											 {
												 echo('Accepté');
											 }
											 elseif(strval($Conge['etat']) == '')
											 {
												 echo("Non traité");
											 }
									 	?>
									</td>
                                    <td width="100px">
                                        <form method="POST" action="">
                                            <input type="submit" name="Modifier" value="Modifier">
                                            <input type="hidden" value=<?PHP echo $Conge['id_conge']; ?> name="id_conge">
                                        </form>
										<a href="supprimerConge.php?id_conge=<?php echo $Conge['id_conge']; ?>"><button>Supprimer</button></a>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
								</tbody>
							  </table>
							</div>
						</div><!--/.module-->
						<div class="module_form">
							<div class="module-head">
								<h3>Modifier type de congé</h3>
							</div>
							<form action="" method="POST">
								<input type="text" name="typeC" id="typeC" placeholder="Type" maxlength="20" value="<?php echo $typeM['Name'] ?>">
								<input width="50px" type="Number" name="maxC" id="maxC" placeholder="Durré max du congé en jours" value="<?php echo $typeM['Max'] ?>">
								<input type="hidden" value=<?PHP echo $_POST['id_typeC']; ?> name="id_typeC">
								<br>
								<input type="submit" value="Envoyer">
								<input type="Reset" value="Effacer">
							</form>
							<a href="Afficher.php"><button>Annuler</button></a>
						</div>
						<div class="module">
							<div class="module-head">
								<h3>Types de congés</h3>
							</div>
							<table class="table table-striped table-bordered table-condensed">
								<thead>
								  <tr>
									  <th>Type</th>
									  <th>Durée max</th>
									  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
								<?php
                                    foreach($listetypeC as $typeC){
                                ?>
								<tr>
									<td><?php echo $typeC['Name']; ?></td>
                                    <td>
										<?php
											 //echo $Conge['etat'];
											 if(strval($typeC['Max']) == '')
											 {
												 echo("Non définie");
											 }
											 else
											 {
												echo $typeC['Max'];
												echo ' jours';
											 }
									 	?>
									 </td>
                                    <td width="160px">
                                        <form method="POST" action="modifierConge.php">
                                            <input type="submit" name="Modifier" value="Modifier">
                                            <input type="hidden" value=<?PHP echo $typeC['id_typeC']; ?> name="id_typeC">
                                        </form>
										<a href="supprimertypeC.php?id_typeC=<?php echo $typeC['id_typeC']; ?>"><button>Supprimer</button></a>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
								</tbody>
							  </table>
							</div>
						</div><!--/.module-->


					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
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