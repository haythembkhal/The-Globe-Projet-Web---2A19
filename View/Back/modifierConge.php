<?php
    include '../../Controller/crud_func.php';
	include_once '../../Controller/notificationC.php';
	include_once '../../Controller/messageC.php';
	$notification=new notificationC();
 $message=new MessageC();
$count=0;

$count_message=$message->nombreNouveauMessage();
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications
    $CongeC = new CongesC;
    $listeConge = $CongeC->afficherConges();
	$typeC = new typeC;
	$listetypeC = $typeC->affichertypeC();
	$listetype = $typeC->affichertypeC();
	$CongeM = $CongeC->recupererConge($_POST['id_conge']);
	

	
	$error ="";
	$Conge = NULL;
	$CongeA = new CongesC();
	if (
        isset($_POST["id_Employe"]) &&
		isset($_POST["type_conge"]) &&		
        isset($_POST["date_deb"]) &&
		isset($_POST["date_fin"]) &&
        isset($_POST["etat"])
    ) {
        if (
            !empty($_POST["id_Employe"]) && 
			!empty($_POST['type_conge']) &&
            !empty($_POST["date_deb"]) && 
			!empty($_POST["date_fin"])) 
         {
            $Conge = new Conges(NULL,
                $_POST['id_Employe'],
				$_POST['type_conge'],
                $_POST['date_deb'], 
				$_POST['date_fin'],
                $_POST["etat"]
            );
            $CongeA->modifierConge($Conge, $_POST['id_conge']);
			header('Location:table_conges.php');
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
	<title>The Globe| Admin</title>
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



	<div class="wrapper">
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


				<div class="span9">
					<div class="content">
						<div class="module_form">
							<div class="module-head">
								<h3>Modifier un Congés</h3>
							</div>
							<form name="form_conge" onsubmit="return checkformcong()" action="" method="POST">
								<input type="text" name="id_Employe" id="id_Employe" value="<?php echo $CongeM['employes'] ?>" placeholder="Id_Employé" maxlength="20">
								<select type="range" name="type_conge" id="type_conge">
									<?php
										foreach($listetype as $typeC){
											if($CongeM['type_conge'] == $typeC['id_typeC'])
											{
									?>
											<option selected value="<?php echo $typeC['id_typeC'] ?>"><?php echo $typeC['Name'] ?></option>
									<?php
											}
											else
											{
									?>
											<option value="<?php echo $typeC['id_typeC'] ?>"><?php echo $typeC['Name'] ?></option>
									<?php
											}
										}
									?>
								</select>
								<p> <span class="error" id="erroridC" style="color:red"></span></p>
								<input width="50px" type="date" name="date_deb" id="date_deb" value="<?php echo $CongeM['date_deb'] ?>" placeholder="Date début du congé">
								<input type="date" name="date_fin" value="<?php echo $CongeM['date_fin'] ?>" id="date_fin" placeholder="Date fin du congé">
								<p> <span class="error" id="errorDA" style="color:red"></span></p>
                                <input type="radio" value="1" name="etat"> Rejeté
                                <input type="radio" value="0" name="etat"> Accepté
								<br>
                                <input type="hidden" value=<?PHP echo $_POST['id_conge']; ?> name="id_conge">
                                <br>
								<input type="submit" class="btn-warning" value="Modifer">
								<input type="Reset" class="btn-danger"value="Effacer">
							</form>
                            <a href="table_conges.php"><button>Annuler</button></a>
							<script>
							function checkFormcong()
                                        {
                                            var id_Employe= document.forms["form_conge"]["id_Employe"].value;
                                            var date_deb= document.forms["form_conge"]["date_deb"].value;
											var date_deb= document.forms["form_conge"]["date_fin"].value;

                                            /*var today = new Date();
                                            var dd = String(today.getDate()).padStart(2, '0');
                                            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January = 0
                                            var yyyy = today.getFullYear();
                                            today = yyyy + '-' + mm + '-' + dd;*/

                                            try{
												if(id_Employe == ""){
													throw "le champ ID Client ne peut pas être vide";
												}
												else if(id_Employe == 0){
													throw "Veuillez choisir une valeur > 0";
												}
												throw "";
											}
											catch(err){
												document.getElementById('erroridC').innerHTML=err;
											}
                                            if(date_deb == "")
                                            {
                                                document.getElementById('errorDA').innerHTML="Veuillez choisir une date";  
                                                return false;
                                            }else if(date_deb>date_fin)
                                            {
                                                document.getElementById('errorDA').innerHTML="La date du début doit être < à la date de fin";  
                                                return false;
                                            }
											else
											{
												document.getElementById('errorDA').innerHTML="";
											}

                                        }
								</script>
						</div>
					</div>
					<div class="content">

						
						<div class="module_form">
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
                                            <input type="submit" class="btn-warning" name="Modifier" value="Modifier">
                                            <input type="hidden" value=<?PHP echo $Conge['id_conge']; ?> name="id_conge">
                                        </form>
										<a href="supprimerConge.php?id_conge=<?php echo $Conge['id_conge']; ?>"><button class="btn-danger">Supprimer</button></a>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
								</tbody>
							  </table>
							</div>
						</div><!--/.module-->
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
                                            <input type="submit" class="btn-warning" name="Modifier" value="Modifier">
                                            <input type="hidden" value=<?PHP echo $typeC['id_typeC']; ?> name="id_typeC">
                                        </form>
										<a href="supprimertypeC.php?id_typeC=<?php echo $typeC['id_typeC']; ?>"><button class="btn-danger">Supprimer</button></a>
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
			 

			<b class="copyright">&copy; 2022 THE GOBLE - ALLIANCE </b> All rights reserved.
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