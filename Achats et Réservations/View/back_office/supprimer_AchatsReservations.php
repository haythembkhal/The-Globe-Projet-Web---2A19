<?php
    include '../../Controller/AchatsC.php';

    $AchatC = new AchatC();
    if(isset($_POST["idAchat"])){
        $AchatC->supprimerAchat($_POST["idAchat"]);
        header('Location:afficher_AchatsReservations.php');
    }
?>
