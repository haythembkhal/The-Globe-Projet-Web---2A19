<?php
 include '../../Controller/temoignageC.php';


    $temoignage= new temoignageC();
	
 //suppression
 if (isset($_POST['delete']))
 {
	 $temoignageId=$_POST['id'];
	//var_dump($userId); 
	//die;
	 $temoignage->supprimerTemoignage($temoignageId);
	 header('location:table_utilisateurs.php');	 
 }

?>