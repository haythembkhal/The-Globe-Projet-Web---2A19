<?php

	include '../../Controller/ProduitCRUD.php';
	
	$ProduitCRUD=new ProduitCRUD();

	$ProduitCRUD->SupprimerProduit($_GET["id_produit"]);
	
	header('Location:AfficherProduit.php');
?>