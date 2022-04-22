<?php
	include '../Controller/crud_func.php';
	$typeC=new typeC();
	$typeC->supprimertypeC($_GET["id_typeC"]);
	header('Location:AFficher.php');
?>