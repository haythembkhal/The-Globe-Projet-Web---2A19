<?php
	include '../../Controller/ArtisteC.php';
	$ArtisteC=new ArtisteC();
	$ArtisteC->deleteartiste($_GET["id"]);
	header('Location:table_artistes.php');
?>