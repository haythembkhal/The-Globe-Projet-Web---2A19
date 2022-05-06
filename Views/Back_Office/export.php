<?php  

$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'the_globe');  
$sql = "SELECT nom_produit, categorie_produit, quantite_produit, prix_produit, image_produit FROM produits";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Nom" . "\t" . "Catégorie" . "\t" . "Quantité" . "\t" . "Prix" . "\t" . "Image" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=ListeDesProduits.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 