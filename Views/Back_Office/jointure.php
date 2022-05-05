<?php
public function AfficherProduit($id_cat)
{
    try
    {
        $pdo = getConnexion();
        $query = $pdo->prepare(
           // 'SELECT * FROM produits where categorie_produit = :id_cat'
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



searchProduits.php

<?php
require_once '../../Contorller/CategorieCRUD.php';

$CategorieCRUD = new CategorieCRUD();

$Categories = $CategorieCRUD->AfficherCategorie();

if(isset($_POST['categorie']) && isset($_POST['search']))
{
    $list = $CategorieCRUD->AfficherProduit($_POST['categorie']);
}
?>


