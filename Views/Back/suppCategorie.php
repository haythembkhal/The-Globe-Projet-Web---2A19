<?php
	include 'C:/xampp/htdocs/Artistes/Controller/CategorieC.php';
	$categorieC=new CategorieC();
	$categorieC->deletecategorie($_GET["ID"]);
	header('Location:AfficherCategorie.php');
?>