<?php


 
 include '../../Controller/userC.php';
   $error = "";
    $success = 0;
    // create employe
    $customer= null;

    // create an instance of the controller
    $client= new ClientC();
	$client_afficher=new ClientC();
 //suppression
 if (isset($_POST['clientID']))
 {
	 $userId=$_POST['clientID'];
	//var_dump($userId); 
	//die;
	 $client->supprimerClient($userId);
	 header('location:table_utilisateurs.php');	 
 }
 //faffichage
 if (isset($_POST['readClient']))
 {
	 $userId=$_POST['readClient'];
	//var_dump($userId); 
	//die;
	 $client_afficher=$client->rechercherClient($userId);
	 //header('location:table_utilisateurs.php');
 foreach($client_afficher as $e)
	 {
		 $firstname=$e['firstname'];
		 $lastname=$e['lastname'];
		 $ville=$e['ville'];
		 $email=$e['email'];
		 $password=$e['password'];
		 $userID=$e['id_client'];
		
	 }	 
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
									Tasks
									<b class="label orange pull-right">19</b>
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
											Cong�s
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
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
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
								<h3>Affichage Client</h3>
							</div>
							<div class="module-body">

									

									<br />

									<form class="form-horizontal row-fluid" >
									
								
										<div class="control-group">
											<label class="control-label" for="basicinput">FirstName</label>
											<div class="controls">
												<input type="text" id="firstname" placeholder="Type firstname here..." class="span8" name="firstname" value=<?php echo $firstname;?> >
											
											</div>
											
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">LastName</label>
											<div class="controls">
												<input type="text" id="lastname" placeholder="Type lastname here..." class="span8"  name="lastname" value=<?php echo $lastname;?>>
												
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">ville</label>
											<div class="controls">
												<input type="text" id="ville" placeholder="Type ville here..." class="span8" name="ville" value=<?php echo $ville;?>>
												<span id="error_ville" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Adresse email</label>
											<div class="controls">
												<input type="mail" id="email" placeholder="Type mail here..." class="span8" name="email" value=<?php echo $email;?>>
												
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" id="password" placeholder="Type password here..." class="span8" name="password" value=<?php echo $password;?>>
												
											</div>
											
										</div>
										
									

										


										

										

										

										

										

										

										
										

										<div class="control-group">
											<div class="controls">
											
											<a href="table_utilisateurs.php"><input type="button" class="btn-success" value="Back"></a>
												
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
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

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	
	
</body>