<?php

    include_once '../../Model/Categories.php';
    include_once '../../Controller/CategorieCRUD.php';
	
	$CategorieCRUD=new CategorieCRUD();

	$CategorieCRUD->SupprimerCategorie($_GET["id_cat"]);
	
	header('Location:AjouterCategorie.php');
	
?>