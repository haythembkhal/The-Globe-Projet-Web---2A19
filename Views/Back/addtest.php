<?php


include_once "../../Controller/CategorieC.php";

$control = new CategorieC();

if(isset($_POST['nom']) && isset($_POST['Description']))
{
	echo "cest bon";
	$nouvelleCategorie = new Categorie($_POST['nom'],$_POST['Description']);
	$control->ajoutercategorie($nouvelleCategorie);
	echo "ok";
}

?>