<?php

//include_once "../../config.php";

$db = new PDO('mysql:host=localhost;dbname=the_globe','root','');


require("../../fpdf/fpdf.php");

// Connexion à la BDD (à personnaliser)
//$link = mysqli_connect('localhost','login','mot_de_passe','nom_base');
// Si base de données en UTF-8, utiliser la fonction utf8_decode pour tous les champs de texte à afficher

// extraction des données à afficher dans le sous-titre (nom du voyageur et dates de son voyage)
//$requete = "SELECT * FROM artistes WHERE id='1'";
//$result = mysqli_query($requete);
// tableau des résultats de la ligne > $data_voyageur['nom_champ']
//$data_voyageur = mysqli_fetch_array($result);
//mysqli_free_result($result);

 /* function afficherArtistes(){
            $sql="SELECT * FROM artistes";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }


        $LitesArtistes=afficherArtistes();

include_once '../../Model/Artiste.php';

  class PDF extends FPDF
  {
  	
  		// Header
	function Header() {
		// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
		$this->Image('logob.png',80,100);
		// Saut de ligne 20 mm
		$this->Ln(20);

		// Titre gras (B) police Helbetica de 11
		$this->SetFont('Helvetica','B',11);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(230,230,230);
 		// position du coin supérieur gauche par rapport à la marge gauche (mm)
		$this->SetX(70);
		// Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok	
		$this->Cell(60,8,'ARTISTES',0,1,'C',1);
		// Saut de ligne 10 mm
		$this->Ln(10);		
	}
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
  }



$pdf = new PDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(230,230,230);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
//$pdf->Cell(75,6,'DU '.$data_voyageur['date_deb'].' AU '.$data_voyageur['date_fin'],0,1,'L',1);		
//$pdf->Cell(75,6,strtoupper(utf8_decode($data_voyageur['prenom'].' '.$data_voyageur['nom'])),0,1,'L',1);				
$pdf->Ln(10); // saut de ligne 10mm	



// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(183); // Couleur du fond RVB
	$pdf->SetFillColor(221); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(60,8,'nom',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(70); 
	$pdf->Cell(60,8,'nationalite',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(130); 
	$pdf->Cell(30,8,'genre',1,0,'C',1);
    // position de la colonne 4 (190 = 70+60)
	$pdf->SetX(160); 
	$pdf->Cell(60,8,'categories',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 70;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);


$position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
//$requete2 = "SELECT * FROM artistes WHERE id='1'";
//$result2 = mysqli_query($requete2);

foreach ($LitesArtistes as $data_visit) 
	// code...
{
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(60,8,utf8_decode( $data_visit['nom']),1,'C');
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(70); 
	$pdf->MultiCell(60,8,utf8_decode(  $data_visit['nationalite']),1,'C');
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(130); 
	$pdf->MultiCell(30,8,$data_visit['genre'],1,'C');
    // position abcisse de la colonne 4 (190 = 130+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(160); 
	$pdf->MultiCell(30,8,$data_visit['categories'],1,'C');


	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 8; 
}
//mysqli_free_result($LitesArtistes);


// Nouvelle page PDF
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',11);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();
$pdf->Cell(500,20,utf8_decode('Plus rien à vous dire ;-)'));


$pdf->Output('artistesPdf.pdf','I'); // affichage à l'écran
// Ou export sur le serveur
// $pdf->Output('F', '../test.pdf');
?>

*/


   class PDF extends FPDF{
function header(){
    //$this->Image('logob.png',80,100);
    $this->SetFont('Arial','B',24);
    $this->Cell(276,5,'Liste des Artistes',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,13,'Le Choix vient de Papa God',0,0,'C');
    $this->Ln(20);
}
function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
    $this->SetFont('Times','B',16);
    $this->Cell(20,10,'id',1,0,'C');
    $this->Cell(40,10,'Nom',1,0,'C');
    $this->Cell(30,10,'nationalite',1,0,'C');
    $this->Cell(20,10,'genre',1,0,'C');
    $this->Cell(20,10,'age',1,0,'C');
    $this->Cell(60,10,'description',1,0,'C');
    $this->Cell(30,10,'categories',1,0,'C');
    $this->Ln();
}
function viewTable($db){
    $this->SetFont('Times','',12);
    $liste = $db->query('SELECT * FROM artistes');
    while($data = $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->id,1,0,'C');
        $this->Cell(40,10,$data->nom,1,0,'C');
        $this->Cell(30,10,$data->nationalite,1,0,'C');
        $this->Cell(20,10,$data->genre,1,0,'C');
        $this->Cell(20,10,$data->age,1,0,'C');
        $this->Cell(60,10,$data->description,1,0,'C');
        $this->Cell(30,10,$data->categories,1,0,'C');
        $this->Ln();
    }

}

   }
   $pdf = new PDF();
   $pdf->AliasNbPages();
   $pdf->AddPage('L','A4',0);
   $pdf->headerTable();
   $pdf->viewTable($db);
   $pdf->Output();


?>