<?php
/*
    include_once '../../Model/Produit.php';
    include_once '../../Model/Categorie.php';
	include_once '../../Controller/ProduitCRUD.php';
	include_once '../../Controller/CategorieCRUD.php';
	
	$ProduitCRUD = new ProduitCRUD();
	$listeproduit=$ProduitCRUD->AfficherProduit(); 

    $CategorieCRUD = new CategorieCRUD();
	$listecategorietype=$CategorieCRUD->AfficherCategorie();

    $error = "";

    $Produit = null;

    $Produits = new ProduitCRUD();

    if (
		isset($_POST['nom_produit']) &&		
        isset($_POST['categorie_produit']) &&
		isset($_POST['quantite_produit']) && 
        isset($_POST['prix_produit']) &&
        isset($_POST['image_produit'])
    ) {
        if (
			!empty($_POST['nom_produit']) &&
            !empty($_POST['categorie_produit']) && 
			!empty($_POST['quantite_produit']) && 
            !empty($_POST['prix_produit']) &&
            !empty($_POST['image_produit']) 
        ) {
            $Produit = new Produit(
                null,
				$_POST['nom_produit'],
                $_POST['categorie_produit'], 
				$_POST['quantite_produit'],
                $_POST['prix_produit'],
                $_POST['image_produit']
            );

            $Produits->AjouterProduit($Produit);
            header('Location:AjouterProduit.php');
        }
        else
            $error = "Missing information";
        
    }

                                        
//$conn = mysqli_connect("localhost", "root", "", "the_globe");

if (isset($_POST['submit_aj'])) {

$image_produit = $_FILES["image_produit"]["name"];

$tmp_image_produit= $_FILES["image_produit"]["tmp_name"];  

$error = $_FILES["image_produit"]["error"];

$tabExtension = explode('.', $image_produit);
$extension = strtolower(end($tabExtension));

$extensions = ['jpg', 'png', 'jpeg', 'gif'];

$folder = "Uploads/".$image_produit;

if(in_array($extension, $extensions) && $error == 0){

move_uploaded_file($tmp_image_produit, $folder);

//$query =("INSERT INTO produits (nom_produit, categorie_produit, quantite_produit, prix_produit, image_produit) VALUES ('$nom_produit', '$categorie_produit', '$quantite_produit', '$prix_produit', '$image_produit");

//mysqli_query($conn, $query);

echo
"
<script>
  alert('Image uploaded successfully');
</script>
";

}else{
    echo
    "
    <script>
        alert('Failed to upload image');
    </script>
    ";
    }
}*/

include_once '../../config.php';
include_once '../../Model/Produit.php';
include_once '../../Controller/ProduitCRUD.php';

?>

