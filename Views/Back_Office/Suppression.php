<?php

	include_once '../../Model/Produit.php';
    include_once '../../Model/Categorie.php';
	include_once '../../Controller/CRUD.php';
	
	$ProduitCRUD=new ProduitCRUD();
    $CategorieCRUD=new CategorieCRUD();

	$ProduitCRUD->SupprimerProduit($_GET["id_produit"]);
    $CategorieCRUD->SupprimerCategorie($_GET["id_cat"]);
	
	header('Location:Ajout.php');
	
?>