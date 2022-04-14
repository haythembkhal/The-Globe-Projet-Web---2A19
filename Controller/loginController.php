<?php

session_start();
include'../config.php';


$db = config::getConnexion();
$error = "bonjour";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email =$_POST['email'];
	$password =$_POST['password']; //crypter le password
	
	$sql = "SELECT * from client WHERE email = :email AND password = :password";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'email' => $email,
				'password' => $password
            ]);
		$user = $query->fetch();
        $count = $query->rowCount();
		
		if($count>0)
		{
		$_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
		$_SESSION["username"] = $user['username'];
		$_SESSION["email"] = $user["email"];
		$_SESSION["password"] = $user["password"];
		$_SESSION["id_client"] = $user["id_client"];
		$_SESSION["loggedIn"] =true;
		$_SESSION["type"]="CUSTOMER PROFILE";
		
	
		header('location:../View/Front/index_with_profil.php');
		}
		else
		{
			$_SESSION["loggedIn"] =false;
			//$error = ' <div class="alert alert-danger" role="alert">Wrong Username or Password ! :)</div> ';
			
			$sql = "SELECT * from employe WHERE email = :email AND password = :password";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'email' => $email,
				'password' => $password
            ]);
		$user = $query->fetch();
        $count = $query->rowCount();
		
		if($count>0)
		{
		$_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
		$_SESSION["username"] = $user['username'];
		$_SESSION["email"] = $user["email"];
		$_SESSION["password"] = $user["password"];
		$_SESSION["id_employe"] = $user["id_employe"];
		$_SESSION["loggedIn"] =true;
		$_SESSION["type"]="EMPLOYE PROFILE";
		
	
		header('location:../View/Front/index_with_profil.php');
		}
		else
		{
			
			$_SESSION["loggedIn"] =false;
			
			header('location:../View/Front/sign_in.php?error=1');
			//header('location:index_with_profil.php');
			//$error = ' <div class="alert alert-danger" role="alert">Wrong Username or Password ! :)</div> ';
		}
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}

		}
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
	
	///////////////////////on passe aussi à la vérification dans la table des emloyes
	
	
}
?>
