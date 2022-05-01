<?php
session_start();

	include '../../Controller/notificationC.php';
	require_once 'autoload.php';	
	require_once "configGoogle.php";

	if (isset($_SESSION['access_token'])) {
		//header('Location: login.php');
		//exit();
	}
	$loginURL = $gClient->createAuthUrl();


if (isset($_POST['submit'])&& isset($_POST['g-recaptcha-response']))
{
$recaptcha = new \ReCaptcha\ReCaptcha("6Le8QIcfAAAAAC6DvruNqN23RQ97sUwV6Cf77RMl");
$resp = $recaptcha->verify($_POST["g-recaptcha-response"]);
                 
if ($resp->isSuccess()) {
    var_dump("valide");
	die;
} else {
    $errors = $resp->getErrorCodes();
	var_dump("Invalide");
	die;
}
}




    $error = "";
	$captcha=0;
    $success = 0;
    // create employe
    $customer= null;
	$notificationC=new notificationC();
	
	
	
	$userOnline=0;
    // create an instance of the controller
    $client = new ClientC();
	
    if (isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['password'])&&isset($_POST['g-recaptcha-response'])) {
        if (!empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['password'])) 
		{
			$recaptcha = new \ReCaptcha\ReCaptcha("6Le8QIcfAAAAAC6DvruNqN23RQ97sUwV6Cf77RMl");
            $resp = $recaptcha->verify($_POST["g-recaptcha-response"]);
				if ($resp->isSuccess())
				{
					
		    $customer = new User(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['ville'],
                $_POST['email'],
                MD5($_POST['password']),
            );
            $success = 1;
			
					if($client->rechercherEmail($_POST['email'])==NULL)
						{
						$error=0;
						$client->ajouterClient($customer);
						$destinataire = $_POST["email"];
						$sujet = "[THE GLOBE][SIGN UP]";
						$headers = "From:theglobe.alliance2022@gmail.com\n";
						$headers .="Content-Type: text/html; charset=iso-8859-1\n";
						$message = '<html>Hello <strong>'.$_POST["lastname"].'</strong>,<br><br>
	 
Thank you for joining the globe platform.<br>
We would like to confirm that your account has been successfully created.<br> 
To access your account, click on the <a href="https://localhost/Projet/View/Front/sign_in.php">link</a> below.<br><br>

If you are having trouble logging into your account, contact us at theglobe.alliance2022@gmail.com.<br><br>

Cordially,<br>
<strong>The Globe team</strong></html> ';
							  

							 mail($destinataire,$sujet,$message,$headers);
							 //envoyer une notification
							 $message_notification="INSCRIPTION:Une personne vient de s'inscrire sur le site."." "."Son nom est"." ".$_POST['lastname'];			
								$etat=0;//non lu
								$notif=new Notification($message_notification,$etat);
						$notificationC->ajouterNotification($notif);
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
					$captcha=1;
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
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
				 <label><b>Ville</b></label>
                <input type="text" placeholder="ville " name="ville" id="ville">
				<span id="error_ville" style="color: red; font-size: 0.75em;"></span>
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
				<div class="g-recaptcha" data-sitekey="6Le8QIcfAAAAABsQzy-o34pz_-3rHGASIRiIfeWD"></div>
				<span id="error" style="color: red; font-size: 0.75em;"><?php if($captcha==1){ echo"Authentification captcha failed...";$captcha=0;}else{echo"";}?></span><br>
				
			
                <input type="submit" id='submitButton' value='SUBMIT' >
				<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger" style="width:400px; height:50px"><br>
				<a id="sign_in" href="sign_in.php">I have an Account/Sign_In</a>
             
			
            </form>
		
			<script>
        function verif(){
			var firstname = document.getElementById('firstname');
		var lastname = document.getElementById('lastname');
        var ville = document.getElementById('ville');
        var email = document.getElementById('email');
        var password = document.getElementById('password');
        var buttonSubmit = document.getElementById('submitButton');
		
       // var errorMessage = document.getElementById('errorMessage');
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       // var errorMessageUserType = document.getElementById('error_userType');
        var errorMessageFirstname = document.getElementById('error_firstname');
		var errorMessageLastname = document.getElementById('error_lastname');
		var errorMessageville = document.getElementById('error_ville');
		var errorMessageEmail = document.getElementById('error_email');
        var errorMessagePassword = document.getElementById('error_password');
var test=0;
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
				
			if(firstname.value.length==0)
			{
				errorMessageFirstname.innerHTML="Oups!This field cannot empty!";
			}
			else
			{
				errorMessageFirstname.innerHTML="";
				test++;
			}
			if(ville.value.length==0)
			{
				errorMessageville.innerHTML="Oups!This field cannot be empty!";
				
			}
			else
			{
				errorMessageville.innerHTML="";
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
        </div>
    </body>
</html>

