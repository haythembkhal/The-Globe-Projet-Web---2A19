<?php

session_start();
include'../config.php';


$db = config::getConnexion();
$error = "bonjour";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email =$_POST['email'];
	$key =$_POST['key'];
		
	
	$sql = "SELECT * from client WHERE email = :email AND password = :password";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'email' => $email,
				'password' => $key
            ]);
		$user = $query->fetch();
        $count = $query->rowCount();
		
		if($count>0)
		{
			$taille=strlen($_POST['password']);
			
		if($taille>=8)
		{
			$password=MD5($_POST["password"]);
			$sql='UPDATE client SET password= :password where email = :email';
			try{
				$query = $db->prepare($sql);
		 $query->execute([
                'email' => $email,
				'password' => $password
            ]);
			header('location:../View/Front/index_with_profil.php');
			}
			 catch (Exception $e) {
		       die('Erreur: ' . $e->getMessage());
	       }
		   
		$_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
		$_SESSION["ville"] = $user['ville'];
		$_SESSION["email"] = $user["email"];
		$_SESSION["password"] = $password;
		$_SESSION["id_client"] = $user["id_client"];
		$_SESSION["loggedIn"] =true;
		$_SESSION["type"]="CUSTOMER PROFILE";
			
			
		}
		else
		{
			$_SESSION["loggedIn"] =false;
			header('location:../View/Front/updatePassword.php?error=2');
		}
	
		
		}
		else
		{
			
			$_SESSION["loggedIn"] =false;
			header('location:../View/Front/updatePassword.php?error=1');
				
			
		}
	} 
	 catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
}
	
	///////////////////////on passe aussi à la vérification dans la table des emloyes
	
?>
