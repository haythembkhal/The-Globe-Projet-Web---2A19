<?php
session_start();
	require_once "configGoogle.php";
	include '../../Controller/userC.php';
	$db = config::getConnexion();

	if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['lastname'] = $userData['familyName'];
	$_SESSION['firstname'] = $userData['givenName'];
	$_SESSION['password'] = $userData['password'];
/*	var_dump($_SESSION['picture']);
	die;*/
	
	$_SESSION['ville'] = "Defau"; //pas de ville récupérer avec google
	$_SESSION["loggedIn"] =true;
	$_SESSION["type"]="CUSTOMER PROFILE";
	$_SESSION['temoignage']="";
	 $customer = new User(
                $_SESSION['firstname'],
                $_SESSION['lastname'],
                $_SESSION['ville'],
                $_SESSION['email'],
                MD5($_SESSION['password'])
            );
			
			$client=new ClientC();
	$client->ajouterClient($customer);

	
	$sql = "SELECT * from client WHERE email = :email";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'email' => $_SESSION["email"]
				
            ]);
		$user = $query->fetch();
        $count = $query->rowCount();
		
		if($count>0)
		{
		
		$_SESSION["id_client"] = $user["id_client"];
		
		$client->userConnecter($_SESSION["id_client"]);
		
		echo '<script type="javascript">window.alert("Welcome")</script>';
		}

		}
	 catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
	header('Location:http://localhost/Alliance/View/Front/index_with_profil.php');
	exit();
?>