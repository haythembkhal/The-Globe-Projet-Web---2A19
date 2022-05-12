<?php

    include_once '../../Model/Categories.php';
	include_once '../../Controller/CategorieCRUD.php';
	
	$CategorieCRUD = new CategorieCRUD();

	$listecategorie=$CategorieCRUD->AfficherCategorie(); 

    $error = "";

    $Categorie = null;

    $Categories = new CategorieCRUD();

    if (
		isset($_POST['nom_cat'])
    ) {
        if (
			!empty($_POST['nom_cat'])
        ) {
            $Categorie = new Categorie(
                null,
				$_POST['nom_cat']
            );
            $Categories->AjouterCategorie($Categorie);
            header('Location:AjouterCategorie.php');
        }
        else
            $error = "Missing information";
    }   
    
    if(isset($_POST['RechercheNom']))
    {
        $listecategorie = $CategorieCRUD->RechercherCategorie($_POST['RechercheNom']);
    }
    else{
        $error = "Missing information";
    }

    require_once('fpdf/fpdf.php');

    $db = new PDO('mysql:host=localhost;dbname=the_globe','root','');
    
       class PDF extends FPDF{
    
        function header(){
            $this->SetFont('Arial','B',24);
            $this->Cell(0,10,'Liste des categories',0,0,'C');
            $this->Ln();
            $this->SetFont('Times','',20);
            $this->Cell(0,10,'The GLOBE',0,0,'C');
            $this->Ln(20);
        }
    
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    
        function headerTable(){
            $this->SetFont('Times','B',12);
            $this->Cell(40,10,'nom',1,0,'C');
            $this->Ln();
        }
    
        function viewTable($db){
            $this->SetFont('Times','',10);
            $liste = $db->query('SELECT * FROM categorie');
            while($data = $liste->fetch(PDO::FETCH_OBJ)){
                $this->Cell(40,10,$data->nom_cat,1,0,'C');
                $this->Ln();
            }
        }
    
       }
    
      
       // Instantiation of FPDF class
       $pdf = new PDF();
      
       $pdf->AliasNbPages();
       $pdf->AddPage();
       $pdf->headerTable();
       $pdf->viewTable($db);
       $pdf->Output("ListeDesCategorie.pdf","D");
    
?>




