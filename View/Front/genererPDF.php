<?php
    require_once('fpdf.php');
    include_once '../../Model/Achat.php';
    //include_once '../../../View/front_office/assets/images/petit logo.png'
    
    
    class PDF extends FPDF
    {
        function header()
        {
            //logo
            $this->Image('../../View/front_office/assets/images/petit logo.png');
            //font
            $this->SetFont('Helvetica', 'B', 20);
            //emplacement
            $this->Cell(80);
            //titre
            $this->Cell(30, 10, 'FACTURE');
            //$this>Ln(20);

        }

        function footer()
        {
            //position at 1.5cm from bottom
            $this->SetY(-15);
            $this->SetFont('Helvetica', 'I', 8);
            //page number
            $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');


        }
    }
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica', '', 12);
    $pdf->Cell(0, 10, '', 0, 1);
    $pdf->Cell(0, 10, 'Identifiant Spectacle : '.'2', 0, 1);
    $pdf->Cell(0, 10, 'Identifiant Client : '.'3', 0, 1);
    
    $pdf->output();
?>