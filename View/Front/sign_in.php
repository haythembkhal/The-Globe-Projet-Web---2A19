
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
		<link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
    <body>
	<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="http://localhost/Alliance/Controller/loginController.php" method="POST">
               <div><h1>CONNEXION</h1></div>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				<span id="login_error" style="color: red; font-size: 0.75em;"></span>
                <input type="submit" id='submit' value='LOGIN' class="btn btn-warning" >
                 <center><a id="sign_in" href="resetPassword.php">I forgot my password</a><br></center>
				 <center><a id="sign_in" href="login.php">Create an Account</a>	<center>			 
			
            </form>
        </div>
    </body>
	
<script>
            var url = window.location.href;
            var regexError1 = /error=1/;
          
            var loginError = document.getElementById('login_error');

            if (regexError1.test(url)) {
                loginError.innerHTML = "There was a problem Logging in.<br>Check your email and password please!";
            }
            
            else
                loginError.innerHTML = "";  
</script>
</html>

