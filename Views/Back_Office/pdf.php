
<?php

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

require('fpdf/fpdf.php');
  
class PDF extends FPDF {
  
    // Page header
    function Header() {
    
        // Set font family to Arial bold 
        $this->SetFont('Arial','B',20);

        $this->Cell(80);

        $this->Cell(10,20,'Liste Des Produits!');
          
        // Line break
        $this->Ln(30);
    }
  
    // Page footer
    function Footer() {
          
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
          
        // Arial italic 8
        $this->SetFont('Arial','I',8);
          
        // Page number
        $this->Cell(0,10,'Page ' . 
            $this->PageNo() . '/{nb}',0,0,'C');
    }
}
  
// Instantiation of FPDF class
$pdf = new PDF();
  
// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
foreach($listeproduit as $produit){
    $pdf->Cell(0, 10, '<?php echo $produit['nom_produit'] ?>' );
}
//$pdf->Output("ListeDesProduits.pdf","D");
$pdf->Output();
?>




