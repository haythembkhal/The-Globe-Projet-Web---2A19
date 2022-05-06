
<?php

require_once('fpdf/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=the_globe','root','');

   class PDF extends FPDF{
function header(){

    $this->SetFont('Arial','B',24);
    $this->Cell(276,5,'Liste des commandes',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,13,'Coup de Chef',0,0,'C');
    $this->Ln(20);
}
function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
    $this->SetFont('Times','B',12);
    $this->Cell(20,10,'nom_produit',1,0,'C');
    $this->Cell(50,10,'categor',1,0,'C');
    $this->Cell(60,10,'quantite_produit',1,0,'C');
    $this->Cell(20,10,'prix_produit',1,0,'C');
    $this->Cell(30,10,'image_produit',1,0,'C');
    $this->Ln();
}
function viewTable($db){
    $this->SetFont('Times','',10);
    $liste = $db->query('SELECT * FROM produits');
    while($data = $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->nom_produit,1,0,'C');
        $this->Cell(50,10,$data->categorie_produit,1,0,'C');
        $this->Cell(60,10,$data->quantite_produit,1,0,'C');
        $this->Cell(20,10,$data->prix_produit,1,0,'C');
        $this->Cell(40,10,$data->image_produit,1,0,'C');
        $this->Ln();
    }

}

   }

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


  
// Instantiation of FPDF class
$pdf = new PDF();
  
// Define alias for number of pages
$pdf = new PDF();
   $pdf->AliasNbPages();
   $pdf->AddPage();
   $pdf->headerTable();
   $pdf->viewTable($db);
   $pdf->Output();
?>




