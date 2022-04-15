<?php
	include '../Controller/crud_func.php';
	$CongeC=new CongesC();
	$CongeC->supprimerConge($_GET["id_conge"]);
	header('Location:AFficher.php');
?>