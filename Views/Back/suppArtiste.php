<?php
	include 'C:/xampp/htdocs/Artistes/Controller/ArtisteC.php';
	$ArtisteC=new ArtisteC();
	$ArtisteC->deleteartiste($_GET["id"]);
	header('Location:AfficherCategorie.php');
?>