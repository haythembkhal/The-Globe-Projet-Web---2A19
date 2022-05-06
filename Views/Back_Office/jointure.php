<?php
public function AfficherProduit($id_cat)
{
    try
    {
        $pdo = getConnexion();
        $query = $pdo->prepare(
           'SELECT * FROM produits where categorie_produit = :id_cat'
        );
        $query->execute([
            'id_cat' => $id_cat
        ]);
        return $query->fetchAll();
    }
    catch (PDOException $e)
    {
        die('Erreur:'. $e->getMessage());
    }
}
?>


//controller
searchProduits.php

<?php

require_once '../../Contorller/ProduitCRUD.php';

$ProduitCRUD = new ProduitCRUD();

$Produits = $ProduitCRUD->AfficherProduit();

if(isset($_POST['nom_produit']) && isset($_POST['search']))
{
    $list = $ProduitCRUD->AfficherProduit($_POST['nom_produit']);
}
?>


