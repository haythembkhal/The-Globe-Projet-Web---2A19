
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="http://localhost/Alliance/Controller/updatePasswordController.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>
				
				 <label><b>Key</b></label>
                <input type="text" placeholder="Entrer votre cle" name="key" required>

                <label><b>New Password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				<span id="login_error" style="color: red; font-size: 0.75em;"></span>
                <input type="submit" id='submit' value='CONFIRM' >
               
				 <a id="sign_in" href="login.php">Create an Account</a>				 
			
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
                loginError.innerHTML = "This password is not valid";
            else
                loginError.innerHTML = "";  
</script>
</html>

