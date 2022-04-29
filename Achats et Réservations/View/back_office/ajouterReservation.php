<?php
    include_once '../../Controller/ReservationC.php';
	include_once '../../Controller/AchatC.php';
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
											Achats
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
					<a href="afficherAchat.php"><button class="btn-success">Retour à la liste des Achats</button></a>
                    <div id="error">
                        <?php echo $error; ?>
                    </div>
                    <?php
                            if (isset($_POST['idAchat'])){
                                $Achat = $AchatC->recupererAchat($_POST['idAchat']);
                            }
                    ?>
						<div class="module">
                            <div>
                                <div class="module-head">
                                        <h3>Ajouter Reservation</h3>
                                </div> 
                                <div>
                                    <form name="formReservation" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
                                        <br>
                                        <div class="module-head">
                                            <h3>Réservation :</h3>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">ID Achat</label>
                                            <div class="controls">
                                                <input type="text" id="idAchat" placeholder="Veuillez saisir l'ID Achat" class="span8" name="idAchat" value="<?php echo $Achat['idAchat']; ?>" readonly>
                                                <p> <span class="error" id="erroridA" style="color:red"></span></p>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Numéro Siège</label>
                                            <div class="controls">
                                                <input type="text" id="numSiege" placeholder="Veuillez saisir l'ID Spectacle" class="span8" name="numSiege">
                                                <p> <span class="error" id="errornumS" style="color:red"></span></p>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="submit" class="btn-success" id="btnAjouter" value="Ajouter" >
                                                <input type="reset" class="btn-warning" id="btnAnnuler" value="Annuler">
                                                <!--<form method="POST" action="Modifier_AchatsReservations.php">
                                                    <input type="submit" class="btn" id="btnM" value="Modifier"></button>
                                                </form>-->
                                            </div>
                                        </div>
                                    </form>
                                        <script>
                                        function validateForm()
                                        {
                                            var idAchat= document.forms["formReservation"]["idAchat"].value;
                                            var numSiege= document.forms["formReservation"]["numSiege"].value;

                                            try{
												if(idAchat == ""){
													throw "le champ ID Achat ne peut pas être vide";
												}
												else if(idAchat == 0){
													throw "Veuillez choisir une valeur > 0";
												}
												throw "";
											}
											catch(err){
												document.getElementById('erroridA').innerHTML=err;
											}
											
											try{
												if(numSiege == ""){
													throw "le champ numéro siège ne peut pas être vide";
												}
												else if(numSiege == 0){
													throw "Veuillez choisir une valeur > 0";
												}
												throw "";
											}
											catch(err){
												document.getElementById('errornumS').innerHTML=err;
											}

                                        }
                                    </script>
                                </div>    
                            </div>
                            <br>
							
						</div><!--/.module-->

					<br />
						
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