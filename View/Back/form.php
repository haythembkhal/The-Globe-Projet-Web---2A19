<?php
//session_start();
 //  include 'C:/xampp/htdocs/Projet/View/Back/table_utilisateurs.php';
	//include '../../Controller/userC.php';
	include_once '../../Controller/notificationC.php';
	$notification=new notificationC();
	include_once '../../Controller/messageC.php';
$message=new MessageC();
$count=0;

$count_message=$message->nombreNouveauMessage();
 
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications
    $error = "";
    $success = 0;
    // create employe
    $employe= null;

    // create an instance of the controller
    $emp = new EmployeC();
    if (isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $employe = new User(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['ville'],
                $_POST['email'],
                MD5($_POST['password']),"ballamoussa.jpg"
            );
            $success = 1;
			
			/*$nom=$emp->afficherEmploye();
			var_dump($nom);
			die;*/
			

			$emp->ajouterEmploye($employe);
			
			header('Location:table_utilisateurs.php');
			
        } 
		else 
		{
            $error = "Missing information";
        }
    }
	
	
	
		//die;
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

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">

									

									<br />

									<form class="form-horizontal row-fluid" action="form.php" method="POST" name="formulaire" onsubmit="return verif()">
									
								
										<div class="control-group">
											<label class="control-label" for="basicinput">FirstName</label>
											<div class="controls">
												<input type="text" id="firstname" placeholder="Type firstname here..." class="span8" name="firstname">
											<span id="error_firstname" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">LastName</label>
											<div class="controls">
												<input type="text" id="lastname" placeholder="Type lastname here..." class="span8"  name="lastname">
												<span id="error_lastname" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">ville</label>
											<div class="controls">
												<input type="text" id="ville" placeholder="Type ville here..." class="span8" name="ville">
												<span id="error_ville" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Adresse email</label>
											<div class="controls">
												<input type="mail" id="email" placeholder="Type mail here..." class="span8" name="email">
												<span id="error_email" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" id="password" placeholder="Type password here..." class="span8" name="password">
												<span id="error_password" style="color: red; font-size: 0.75em;"></span>
											</div>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Confirm Password</label>
											<div class="controls">
												<input type="password" id="passwordConfim" name="passwordConfim" oncopy="return false" onpaste="return false" oncut="return false" placeholder="Type password here..." class="span8">
												<span id="error_passwordConfirm" style="color: red; font-size: 0.75em;"></span>
											</div>
										</div>

										


										

										

										

										

										

										

										
										

										<div class="control-group">
											<div class="controls">
											
											<input type="submit" class="btn-success" value="Submit">
												
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
			 

		<b class="copyright">&copy; 2022 THE GOBLE - ALLIANCE </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	
	
</body>