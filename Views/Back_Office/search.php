<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","the_globe");
if(count($_POST)>0) {
$rech=$_POST[rech];
$result = mysqli_query($conn,"' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>nom</td>
<td>categorie</td>
<td>quantite</td>
<td>prix</td>
<td>image</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row['nom_produit'];?></td>
<td><?php echo $row['categorie_produit']; ?></td>
<td><?php echo $row['quantite_produit']; ?></td>
<td><?php echo $row['prix_produit']; ?></td>
<td><?php echo $row['image_produit']; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
