<form action="" method="GET">

    <input class="btn" type="submit" value="Filtrer par :"> 
    <?php
    $con = mysqli_connect("localhost","root","","the_globe");

    $categorie_query = "SELECT * FROM categories";
    $categorie_query_run  = mysqli_query($con, $categorie_query);

    if(mysqli_num_rows($categorie_query_run) > 0)
    {
        foreach($categorie_query_run as $categorielist)
        {
            $checked = [];
            if(isset($_GET['categorie']))
            {
                $checked = $_GET['categorie'];
            }
    ?>
    <input type="checkbox" name="categorie[]" value="<?=  $categorielist['id_cat']; ?>" 
        <?php  if(in_array($categorielist['id_cat'], $checked)){ echo "checked"; } ?>
    />
    <?= $categorielist['nom_cat']; ?>
    <?php
    
            }
        }
        else
        {
            echo "No categorie Found";
        }
    ?>


<?php
$products = "SELECT * FROM produits";
$products_run = mysqli_query($con, $products);
if(isset($_GET['categorie']))
{
    $categoriechecked = [];
    $categoriechecked = $_GET['categorie'];
    foreach($categoriechecked as $rowcategorie)
    {
        $products = "SELECT * FROM produits WHERE categorie_produit IN ($rowcategorie)";
        $products_run = mysqli_query($con, $products);
        mysqli_num_rows($products_run) > 0;
    }
}
?>
</form>
