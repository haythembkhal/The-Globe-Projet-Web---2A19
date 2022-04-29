<?php
//session_start();
//include '../../Controller/userC.php';
//include '../../Controller/temoignageC.php';
include '../../Controller/notificationC.php';
$customer = new ClientC();

$employe = new EmployeC();
$temoignage=new temoignageC();
$notification=new notificationC();
$listeClient="";
$listeEmploye="";
$taille="";
$taille2="";
$message1="";
$message2=""; //utiliser pour préciser le nombre d'elements trouver après la rechercher.



//var_dump($listeClient);
//die;
 

 $listeEmploye = $employe->afficherEmploye();
 $listeClient = $customer->afficherClient();
 $listeTemoignage=$temoignage->afficherTemoignage();
 $count=$notification->nouvelleNotification();//recupérer les nouvelles notifications
 if (isset($_POST['mot_rechercher_client']))
{
	$listeClient=$customer->rechercheAvancee($_POST['mot_rechercher_client']);
	$taille=count($listeClient);
	$message1="element(s) trouver";
	
	
}
else{
$taille="";
$message1="";
}
 if(isset($_POST["name"]))
 {
	 $listeClient=$customer->trierClientParNom();
 }
  if(isset($_POST["ville"]))
 {
	 $listeClient=$customer->trierClientParVille();
 }
 if (isset($_POST['mot_rechercher_employe']))
{
	$listeEmploye=$employe->rechercheAvancee($_POST['mot_rechercher_employe']);
	$taille2=count($listeEmploye);
	$message2="element(s) trouver";
	//header('location:#employe');
	
}
else{
	$taille2="";
	$message2="";
	
	
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

			  	<a class="brand" href="index.php">
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
								<li><a href="../../Controller/logoutController.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

<script>
        function verif(){
		var firstname = document.getElementById('firstname');
		var lastname = document.getElementById('lastname');
        var ville = document.getElementById('ville');
        var email = document.getElementById('email');
        var password = document.getElementById('password');
		var passwordConfirm=document.getElementById('passwordConfim');
        //var buttonSubmit = document.getElementById('submitButton');
		
       // var errorMessage = document.getElementById('errorMessage');
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       // var errorMessageUserType = document.getElementById('error_userType');
        var errorMessageFirstname = document.getElementById('error_firstname');
		var errorMessageLastname = document.getElementById('error_lastname');
		var errorMessageville = document.getElementById('error_ville');
		var errorMessageEmail = document.getElementById('error_email');
        var errorMessagePassword = document.getElementById('error_password');
		var errorMessagePasswordConfirm=document.getElementById('error_passwordConfirm');
		let test=0;
       // buttonSubmit.addEventListener('click', (event) => {

           // errorMessage.innerHTML = "";

          /*  if (userType.value == 'select')
                errorMessageUserType.innerHTML = "Select a user Type";
            else
                errorMessageUserType.innerHTML = "";*/


          /*  if (userType.value.length == 'select' || ville.value.length == 0 || email.value.length == 0 || password.value.length == 0)
                errorMessage.innerHTML = '<br>You have to fill ALL the required data';
            else
                errorMessage.innerHTML = "";*/
if(ville.value.length==0)
			{
				errorMessageville.innerHTML="Oups!This field cannot be empty!";
				
			}
			else
			{
				errorMessageville.innerHTML="";
				test++;
			}			

			
			if(firstname.value.length==0)
			{
				errorMessageFirstname.innerHTML="Oups!This field cannot be empty!";
				
			}
			else
			{
				errorMessageFirstname.innerHTML="";
				test++;
			}
			
			if(lastname.value.length==0)
			{
				errorMessageLastname.innerHTML="Oups!This field cannot be empty!";;
			}
			else
			{
				errorMessageLastname.innerHTML="";
				test++;
			}
			
			
			if(password.value.length==0)
			{
				errorMessagePassword.innerHTML="Oups!this field cannot empty!";
			}
			else
			{
				errorMessagePassword.innerHTML="";
			}

            if (password.value.length > 0 && password.value.length < 8)
                errorMessagePassword.innerHTML = 'Password should have AT LEAST 8 caracters!';
            else
			{
				errorMessagePassword.innerHTML="";
				if(password.value!=passwordConfim.value)
				{
					errorMessagePasswordConfirm.innerHTML="Oups! Verify your password!";
				}
				else
				{
				errorMessagePasswordConfirm.innerHTML = "";
				 test++;
				}
				
				
			}
			

            if (!emailRegex.test(email.value) || email.value.length ==0)
                errorMessageEmail.innerHTML = 'Oups!Enter a valid email adress!';
            else
			{
				errorMessageEmail.innerHTML = "";
				test++;
			}
			if(test==5){
			return true;}
			else{
			return false;}
/*
            if (errorMessageEmail.innerHTML == "" && errorMessagePassword.innerHTML == ""&& errorMessageFirstname.innerHTML == "" && errorMessageLastname=="")
                return true;
			else 
				return false;*/
       // });


		}
		
       /* function onLoad() {

            var url = window.location.href;
            var regexError1 = /error=1/;
            var regexError2 = /error=2/;
            var regexError3 = /error=3/;
            var errorMessage = document.getElementById('errorMessage');
            var ville = document.getElementById('ville');
            var error_ville = document.getElementById('error_ville');

            error_ville.innerHTML = "";
            errorMessage.innerHTML = "";

            if (regexError3.test(url)) {
                error_ville.innerHTML = "This user Name is already taken. choose another one please.";
                errorMessage.innerHTML = "An account has already being created with this email<br>Login instead or a create an account with a new email";
            }
            else if (regexError2.test(url))
                error_ville.innerHTML = "This user Name is already taken. choose another one please.";
            else if (regexError1.test(url))
                errorMessage.innerHTML = "An account has already being created with this email<br>Login instead or a create an account with a new email";
        }
*/
    </script>
	
	


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.php">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.php">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.php">
									<i class="menu-icon icon-tasks"></i>
									Notifications
									<b class="label orange pull-right"><?php echo $count;?></b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Typography </a></li>
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
										<a href="table_billets.php">
											<i class="menu-icon icon-table"></i>
											Billets
										</a>
									</li>
									<li>
										<a href="table_partenaires.php">
											<i class="menu-icon icon-table"></i>
											Partenaires
										</a>
									</li>
								</ul></li>
								

                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.php">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.php">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.php">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="../../Controller/logoutController.php">
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
								<h3>Tables utilisateurs</h3>
							</div>
							<div class="module-body">
								<p>
									<strong>Liste des Clients</strong>
									<div class="pull-left">
									Trier : &nbsp;
									<div class="btn-group">
										<button class="btn">all</button>
										<button class="btn dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<form action="" method="POST">
											
											
											<button  type="submit" name="name" class="btn">Name</button>
											<button  type="submit" name="ville" class="btn">Ville</button>
											<button  type="submit" name="date" class="btn">Date</button>
											
											
											
											
											
											</form>
										</ul>
									</div>
								</div>
									<span style="color: green; font-size: 1em;"><?php echo $taille." ".$message1; ?></span>
									
								</p>
								<p>
								<br>
								<form class="navbar-search pull-left input-append" action="" method="POST">
                        <input type="text" class="span3" name="mot_rechercher_client">
                        <button class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
						
                        </form>
								</p>
								
								<form action="supprimerClient.php" method="POST">
								<table  class="table table-bordered">
								  <thead>
									<tr>								  
									  <th>First Name</th>
									  <th>Last Name</th>
									  <th>ville</th>
									  <th>Email</th>
									  <th>Password</th>
									  <th>Operation</th>									  								
									</tr>
								  </thead>
								  <tbody>
								  <?php 
								  foreach($listeClient as $client) { ?>
									<tr>
									  
									  <td><?php Echo $client['firstname'];?></td>
									  <td><?php Echo $client['lastname'];?></td>
									  <td><?php Echo $client['ville'];?></td>
									  <td><?php Echo $client['email'];?></td>
									  <td><?php Echo $client['password'];?></td>						 
									  <td>
									  <button type="submit" name="readClient" class="" value=<?php echo $client['id_client'];?> >read</button>
									  
									  <button type="submit" name="clientID" class="btn-danger" value=<?php echo $client['id_client'];?>>delete</button>
									 								  
									  </td>
									</tr>
								  <?php } ?>
								  </tbody>
								</table>
								</form>

								<br />
								<!-- <hr /> -->
								<br />

								<p>
									<strong id="employe">Liste des Employes</strong>
									<a href="form.php"><input type="button" class="btn-success btn-lg" value="ADD"></a>
									<span><?php echo $taille2." ".$message2; ?></span>
									<!--<input type="submit"  value='Add' onclick="document.location.href=modifyURL(table_artistes.php)"-->
																		
									
								
								</p>
								<p>
								<form class="navbar-search pull-left input-append" action="" method="POST">
                        <input type="text" class="span3" name="mot_rechercher_employe">
                        <button class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
                        </form>
								</p>
								<form action="formUpdateEmploye.php" method="POST">
								<table  class="table table-bordered">
								  <thead>
									<tr>
									 
									  <th>First Name</th>
									  <th>Last Name</th>
									  <th>ville</th>
									  <th>Email</th>
									  <th>Password</th>
									   <th>Operation</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
								  foreach($listeEmploye as $employe) { ?>
									<tr>
									  
									  <td><?php Echo $employe['firstname'];?></td>
									  <td><?php Echo $employe['lastname'];?></td>
									  <td><?php Echo $employe['ville'];?></td>
									  <td><?php Echo $employe['email'];?></td>
									  <td><?php Echo $employe['password'];?></td>	
									  
									   <td><button type="submit" name="update" class="btn-warning" value=<?php echo $employe['id_employe'];?>>update</button> <button type="submit" name="delete" class="btn-danger" value=<?php echo $employe['id_employe'];?>>delete</button></td>
									</tr>
								  <?php } ?>
									
								  </tbody>
								</table>
								</form>

								<br />
								<!-- <hr /> -->
								<br />

								<p>
									<strong>Liste des Temoignages</strong>
									
									
									
								</p>
								<p>
								<form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
								</p>
								<form action ="supprimerTemoignage.php" method="POST">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th>Message</th>
									  <th>Publier par</th>
									  <th>Operation</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
								     foreach($listeTemoignage as $temoignage) { ?>
									<tr>
									  
									  <td><?php Echo $temoignage['message'];?></td>
									  <td><?php $client=$customer->rechercherClient($temoignage["client"]);foreach($client as $c){echo $c["firstname"]." ".$c["lastname"];}?></td>
									  <input type="hidden" name="id" value=<?php echo $temoignage['id_temoignage']?> >
									<td><button type="submit" name="delete" class="btn-danger">delete</button></td>
									</tr>
								  <?php } ?>
								  </tbody>
								</table>
								</form>
								
							</div>
						</div>

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
</html>