<?php

session_start();
include'../config.php';


$db = config::getConnexion();
$error = "bonjour";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email =$_POST['email'];
	
	$sql = "SELECT * from client WHERE email = :email";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'email' => $email
            ]);
		$user = $query->fetch();
        $count = $query->rowCount();
		
		if($count>0)
		{
		
		$password= $user["password"];
		$destinataire = $_POST["email"];
						$sujet = "[THE GLOBE][RECUPERATION PASSWORD]";
						$headers = "From:theglobe.alliance2022@gmail.com\n";
						$headers .="Content-Type: text/html; charset=iso-8859-1\n";
						$message = "<html>Hello <strong>".$_POST["lastname"]."</strong>,<br><br>
	 
THere is your password recovery key: ".$password."<br>Please use it to initialize your password.<br><br>

If you are having trouble logging into your account, contact us at theglobe.alliance2022@gmail.com.<br><br>

Cordially,<br>
<strong>The Globe team</strong></html> ";
							  

							 if(mail($destinataire,$sujet,$message,$headers))
							 {
								 header('location:../View/Front/updatePassword.php');
							 }
		
		//echo '<script type="javascript">window.alert("Welcome")</script>';
		
	
		
		}
		else
		{

			
			header('location:../View/Front/sign_in.php?error=1');
		}
				
		
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
	
	///////////////////////on passe aussi à la vérification dans la table des emloyes
	
	
}
?>
