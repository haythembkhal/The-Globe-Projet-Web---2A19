<?php
                                                
//$conn = mysqli_connect("localhost", "root", "", "the_globe");

if (isset($_POST['submit_aj'])) {

$image_produit = $_FILES["image_produit"]["name"];

$tmp_image_produit= $_FILES["image_produit"]["tmp_name"];  

$error = $_FILES["image_produit"]["error"];

$tabExtension = explode('.', $image_produit);
$extension = strtolower(end($tabExtension));

$extensions = ['jpg', 'png', 'jpeg', 'gif'];

$folder = "image/".$image_produit;

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
}
?>