<?php

	include_once '../../Model/Produit.php';
	include_once '../../Controller/ProduitCRUD.php';
	
	$ProduitCRUD=new ProduitCRUD();

	$ProduitCRUD->SupprimerProduit($_GET["id_produit"]);

	header('Location:AjouterProduit.php');
	
?>
