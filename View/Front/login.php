<?php
//session_start();
 //  include 'C:/xampp/htdocs/Projet/View/Back/table_utilisateurs.php';
	include '../../Controller/userC.php';
 

    $error = "";
    $success = 0;
    // create employe
    $customer= null;
	$userOnline=0;
    // create an instance of the controller
    $client = new ClientC();
    if (isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $customer = new User(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['username'],
                $_POST['email'],
                $_POST['password'],
            );
            $success = 1;
			
			/*$nom=$emp->afficherEmploye();
			var_dump($nom);
			die;*/
			
			
			
if($client->rechercherEmail($_POST['email'])==NULL)
{
	$error=0;
		$client->ajouterClient($customer);
		header('Location:sign_in.php');
	
}
else
{
	//header('Location:login.php?erro=2');
	$error=1;
}

		
			

			
		
			
			
        } 
		else 
		{
            $error = "Missing information";
        }
    }
	
	
	
		//die;
?>

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST" onsubmit="return verif()">
                <h1>Sign Up</h1>

                <div>
				<span id="error" style="color: red; font-size: 0.75em;"><?php if($error==1){ echo"An account is already using this email. Use another.";$error=0;}else{echo"";}?></span><br>
				<label><b>Firstname</b></label>
                <input type="text" placeholder="Firstname" name="firstname" id="firstname">
				<span id="error_firstname" style="color: red; font-size: 0.75em;"></span>
				
				</div>
				 <div>
				 <label><b>LastName</b></label>
                <input type="text" placeholder="lastname " name="lastname" id="lastname">
				<span id="error_lastname" style="color: red; font-size: 0.75em;"></span>
				 </div>
				
				 <div>
				 <label><b>UserName</b></label>
                <input type="text" placeholder="username " name="username" id="username">
				<span id="error_username" style="color: red; font-size: 0.75em;"></span>
				 </div>
				 
				<div>
				<label><b>Email</b></label>
                <input type="mail" placeholder="contact@example.com" name="email" id="email">
				<span id="error_email" style="color: red; font-size: 0.75em;"></span>
				</div>
				
				<div>
				<label><b>Password</b></label>
                <input type="password" placeholder="password" name="password" id="password">
				<span id="error_password" style="color: red; font-size: 0.75em;"></span>
				</div>
				<br>
				
			
                <input type="submit" id='submitButton' value='SUBMIT' >
				<a id="sign_in" href="sign_in.php">I have an Account/Sign_In</a>
             
			
            </form>
		
			<script>
        function verif(){
			var firstname = document.getElementById('firstname');
		var lastname = document.getElementById('lastname');
        var userName = document.getElementById('username');
        var email = document.getElementById('email');
        var password = document.getElementById('password');
        var buttonSubmit = document.getElementById('submitButton');
		
       // var errorMessage = document.getElementById('errorMessage');
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       // var errorMessageUserType = document.getElementById('error_userType');
        var errorMessageFirstname = document.getElementById('error_firstname');
		var errorMessageLastname = document.getElementById('error_lastname');
		var errorMessageUsername = document.getElementById('error_username');
		var errorMessageEmail = document.getElementById('error_email');
        var errorMessagePassword = document.getElementById('error_password');
var test=0;
       // buttonSubmit.addEventListener('click', (event) => {

           // errorMessage.innerHTML = "";

          /*  if (userType.value == 'select')
                errorMessageUserType.innerHTML = "Select a user Type";
            else
                errorMessageUserType.innerHTML = "";*/


          /*  if (userType.value.length == 'select' || userName.value.length == 0 || email.value.length == 0 || password.value.length == 0)
                errorMessage.innerHTML = '<br>You have to fill ALL the required data';
            else
                errorMessage.innerHTML = "";*/
				
			if(firstname.value.length==0)
			{
				errorMessageFirstname.innerHTML="Oups!This field cannot empty!";
			}
			else
			{
				errorMessageFirstname.innerHTML="";
				test++;
			}
			if(username.value.length==0)
			{
				errorMessageUsername.innerHTML="Oups!This field cannot be empty!";
				
			}
			else
			{
				errorMessageUsername.innerHTML="";
				test++;
			}			
			if(lastname.value.length==0)
			{
				errorMessageLastname.innerHTML="Oups!This field cannot empty!";;
			}
			else
			{
				errorMessageLastname.innerHTML="";
				test++;
			}
			
			if(password.value.length==0)
			{
				errorMessagePassword.innerHTML = 'Oups!This field cannot empty!';
			}
			else
			{
				errorMessagePassword.innerHTML = "";
				test++;
			}

            if (password.value.length > 0 && password.value.length < 8)
                errorMessagePassword.innerHTML = 'Your password should have AT LEAST 8 caracters';
            else
			{
				 errorMessagePassword.innerHTML = "";
				 test++;
			}
			


            if (!emailRegex.test(email.value) || email.value.length ==0)
                errorMessageEmail.innerHTML = 'Oups!Enter a valid email adress';
            else
			{
				errorMessageEmail.innerHTML = "";
				test++;
			}
			if(test==6)
				return true;
			else
				return false;
/*
            if (errorMessageEmail.innerHTML == "" && errorMessagePassword.innerHTML == ""&& errorMessageFirstname.innerHTML == "" && errorMessageLastname=="")
                return true;
			else 
				return false;*/
       // });


		}
		function validateForm()
		{
		return verif();
		}
       /* function onLoad() {

            var url = window.location.href;
            var regexError1 = /error=1/;
            var regexError2 = /error=2/;
            var regexError3 = /error=3/;
            var errorMessage = document.getElementById('errorMessage');
            var userName = document.getElementById('userName');
            var error_userName = document.getElementById('error_userName');

            error_userName.innerHTML = "";
            errorMessage.innerHTML = "";

            if (regexError3.test(url)) {
                error_userName.innerHTML = "This user Name is already taken. choose another one please.";
                errorMessage.innerHTML = "An account has already being created with this email<br>Login instead or a create an account with a new email";
            }
            else if (regexError2.test(url))
                error_userName.innerHTML = "This user Name is already taken. choose another one please.";
            else if (regexError1.test(url))
                errorMessage.innerHTML = "An account has already being created with this email<br>Login instead or a create an account with a new email";
        }
*/
    </script>
        </div>
    </body>
</html>

