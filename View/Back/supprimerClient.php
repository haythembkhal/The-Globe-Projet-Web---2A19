<?php


 
 include '../../Controller/userC.php';
   $error = "";
    $success = 0;
    // create employe
    $customer= null;

    // create an instance of the controller
    $client= new ClientC();
 //suppression
 if (isset($_POST['clientID']))
 {
	 $userId=$_POST['clientID'];
	//var_dump($userId); 
	//die;
	 $client->supprimerClient($userId);
	 header('location:table_utilisateurs.php');	 
 }
 

?>