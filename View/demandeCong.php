<?php
    include '../Controller/crud_func.php';
    $CongeC = new CongesC;
    $listeConge = $CongeC->afficherConges();
	$typeC = new typeC;
	$listetypeC = $typeC->affichertypeC();
	$listetype = $typeC->affichertypeC();
	
	$error ="";
	$Conge = NULL;
	$CongeA = new CongesC();
    if (
        isset($_POST["id_Employe"]) &&
        isset($_POST["type_conge"]) &&		
        isset($_POST["date_deb"]) &&
        isset($_POST["date_fin"]) 
    ) {
        if (
            !empty($_POST["id_Employe"]) && 
            !empty($_POST['type_conge']) &&
            !empty($_POST["date_deb"]) && 
            !empty($_POST["date_fin"]) 
        ) {
            $Conge = new Conges(NULL,
                $_POST['id_Employe'],
                $_POST['type_conge'],
                $_POST['date_deb'], 
                $_POST['date_fin'],
                NULL
            );
            $CongeA->ajouterConge($Conge);
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
										<a href="Afficher.php">
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
										<a href="demandeCong.php">
											<i class="icon-inbox"></i>
											Demande de Congé
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
                        <div class="module_form">
                            <div class="module-head">
                                <h2>Demande de congé</h2>
                            </div>
                            <form name="form_conge" onsubmit="return checkFormcong()" action="" method="POST">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <label>                                  </label>
                                                <label for="id_Employe"> Votre identifiant : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="id_Employe" id="id_Employe" placeholder="Id_Employé" maxlength="20">
                                                <p>
                                                    <span class="error" id="erroridC" style="color:red"></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>                                  </label>
                                                <label for="type_conge"> Type : </label>
                                            </td>
                                            <td>
                                            <select type="range" name="type_conge" id="type_conge">
                                                <option selected disabled>Type Congé</option>
                                            <?php
                                                foreach($listetype as $typeC){
                                            ?>
                                                <option value="<?php echo $typeC['id_typeC'] ?>"><?php echo $typeC['Name'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>                                  </label>
                                                <label for="date_deb"> Date : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="date_deb" id="date_deb" placeholder="Du"onfocus="this.type = 'date'">
                                                <input type="text" name="date_fin" id="date_fin" placeholder="Au" onfocus="this.type = 'date'" >
                                                <p>
                                                 <span class="error" id="errorDA" style="color:red"></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="module-head">
                                    <input type="submit" value="Envoyer">
								    <input type="Reset" value="Effacer">
                                    <span class="success" id="success" style="color:green"></span>
                                    </div>
                                </form>
                                <script>
							        function checkFormcong()
                                        {
                                            var id_Employe= document.forms["form_conge"]["id_Employe"].value;
                                            var date_deb= document.forms["form_conge"]["date_deb"].value;
											var date_fin= document.forms["form_conge"]["date_fin"].value;
											
											
                                            var today = new Date();
                                            var dd = String(today.getDate()).padStart(2, '0');
                                            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January = 0
                                            var yyyy = today.getFullYear();
                                            today = yyyy + '-' + mm + '-' + dd;

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
                                            if(date_deb == "" && date_fin == "")
                                            {
                                                document.getElementById('errorDA').innerHTML="Veuillez choisir une date";  
                                                return false;
                                            }else if(date_deb>date_fin)
                                            {
                                                document.getElementById('errorDA').innerHTML="La date du début doit être < à la date de fin";
                                                return false;
                                            }
                                            else if(date_deb<today)
                                            {
                                                document.getElementById('errorDA').innerHTML="La date du début doit être > à la date d'aujourd'hui";
                                                return false;
                                            }
											else
											{
												document.getElementById('errorDA').innerHTML="";
											}
                                            alert("Votre demande a été bien reçu!");
                                        }
								</script>
                        </div>
                    </div>
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