<?php
include "../../Controller/AchatsC.php";
$db = config::getConnexion();
$idAchat=isset($_POST['idAchat']) ? $_POST['idAchat'] : NULL;
$idClient= $_POST['idClient'];
$idSpectacle= $_POST['idSpectacle'];
$prixTotal= $_POST['prixTotal'];
$dateAchat= $_POST['dateAchat'];
$adresseEmail= $_POST['adresseEmail'];
$nbrePlaces= $_POST['nbrePlaces'];
$AchatC=new AchatC();
$AchatC->modifierAchat($idAchat,$idClient,$idSpectacle,$prixTotal,$dateAchat,$adresseEmail, $nbrePlaces);
header("Location:afficher_AchatsReservations.php");   
?>