<?php
	//session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("628499597845-l3coghh60agtepodv7lcdldkd3snnrq7.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("The Globe");
	$gClient->setRedirectUri("http://localhost/Projet/View/Front/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
