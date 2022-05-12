
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="http://localhost/Alliance/Controller/resetController.php" method="POST">
                <h2 align="center">Recuperation Password</h2>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <span style="color: green; font-size: 0.75em;">Un message contenant la clé de récuperation de votre mot de pass sera envoyé à cette adresse mail. </span>
				<span id="login_error" style="color: red; font-size: 0.75em;"></span>
                <input type="submit" id='submit' value='ENVOYER' >
    
				 <a id="sign_in" href="login.php">Create an  Account</a>				 
			
            </form>
        </div>
    </body>
	
<script>
            var url = window.location.href;
            var regexError1 = /error=1/;
            var regexError2 = /error=2/;
            var loginError = document.getElementById('login_error');

            if (regexError1.test(url)) {
                loginError.innerHTML = "There was a problem Logging in.<br>Check your email and password please!";
            }
            else if (regexError2.test(url))
                loginError.innerHTML = "An email has being sent to you with your new password.<br> Use it to login to your Account";
            else
                loginError.innerHTML = "";  
</script>
</html>

