<?php
include 'formUpdateEmploye.php';
//include 'table_utilisateurs.php';
 if (isset($_POST['first'])&& isset($_POST['last']) && isset($_POST['user']) && isset($_POST['mail']) && isset($_POST['pass'])) {
        if (!empty($_POST['first'])&& !empty($_POST['last']) && !empty($_POST['user']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
            $employe = new User(
                $_POST['first'],
                $_POST['last'],
                $_POST['user'],
                $_POST['mail'],
                $_POST['pass'],
            );
            $success = 1;
			
			/*$nom=$emp->afficherEmploye();
			var_dump($nom);
			die;*/
			
			$userID=$_POST['update1'];
			$emp->updateEmploye($employe,$userID);
			
		    header('location:table_utilisateurs.php');
			
			
        } 
		else 
		{
            $error = "Missing information";
        }
    }
?>