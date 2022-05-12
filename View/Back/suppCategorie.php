<?php
	include '../../Controller/CategorieC.php';
	$categorieC=new CategorieC();
	$categorieC->deletecategorie($_GET["ID"]);
	header('Location:table_artistes.php');  
?>