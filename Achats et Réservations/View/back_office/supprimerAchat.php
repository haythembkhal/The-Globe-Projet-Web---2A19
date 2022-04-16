<?php
    include '../../Controller/AchatC.php';
    $AchatC = new AchatC();
    $AchatC->supprimerAchat($_GET["idAchat"]);
    header('Location:afficherAchat.php');
?>