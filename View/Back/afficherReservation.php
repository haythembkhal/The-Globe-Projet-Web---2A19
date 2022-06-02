<?php
    include_once '../../Controller/ReservationC.php';
	include_once '../../Controller/AchatC.php';
	include_once '../../Controller/notificationC.php';

include_once '../../Controller/messageC.php';
$message=new MessageC();
$count=0;

$count_message=$message->nombreNouveauMessage();
$notification=new notificationC();
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications
	$AchatC = new AchatC();

    $error = "";
    $Achat = NULL;

    $ReservationC = new ReservationC();
    $listeReservations = $ReservationC->afficherReservation();

    $error = "";
    $Reservation = NULL;
    $ReservationA = new ReservationC();
    if(
        isset($_POST["idAchat"])&&
        isset($_POST["numSiege"])
    ){
        if (
            !empty($_POST["idAchat"])&&
            !empty($_POST["numSiege"])
        ){
            $Reservation = new Reservation(
                NULL,
                $_POST['idAchat'],
                $_POST['numSiege']
            );
            $ReservationA->ajouterReservation($Reservation);
            header('Location:afficherAchat.php');
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
	<title>The Globe| Admin </title>
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
					<a href="afficherAchat.php"><button class="btn-success">Retour à la liste des Achats</button></a>
						<div class="module">
                            <br>
							<div>
								<div class="module-head">
									<h3>Tables Achats et Réservations</h3>
								</div>
								<div class="module-body">
									<p>
										<strong>Listes des Réservations</strong>
									</p>
									<table class="table table-bordered"  width='100%'>
										<thread>
											<tr>
												<th width='5%' style="text-align: center;">idAchat</th>
												<th width='5%' style="text-align: center;">numSiege</th>
                                                <th width='30%' style="text-align: center;">Opérations</th>
											</tr>
										</thread>
										<tbody>
											<!--ici je vais mettre l'affichage -->
                                            <?php 
                                            foreach($listeReservations as $Reservation){
                                            ?>
											<tr>
											    <td width='5%' style="text-align: center;"><?php echo $Reservation['idAchat']; ?></td>
												<td width='5%' style="text-align: center;"><?php echo $Reservation['numSiege']; ?></td>
												<td width='30%' style="text-align: center;">
                                                    <form method="POST" action="modifierReservation.php">
                                                        <input type="submit" class="btn" name="Modifier" value="Modifier">
                                                        <input type="hidden" value=<?php echo $Reservation['idReservation']; ?> name="idReservation">
                                                    </form>
                                                    <a href="supprimerReservation.php?idReservation=<?php echo $Reservation['idReservation']; ?>"><button class="btn">Supprimer</button></a>
                                                </td>
											</tr>
                                            <?php
                                                }
                                            ?>	
										</tbody>
										<footer>
                                        <tr>
												<th width='5%' style="text-align: center;">idAchat</th>
												<th width='5%' style="text-align: center;">numSiege</th>
                                                <th width='30%' style="text-align: center;">Opérations</th>
											</tr>
										</footer>
									</table>
								</div>

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
			 

			<b class="copyright">&copy; 2022 The Globe - Alliance</b> All rights reserved.
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