<?php
    include '../../Controller/ReservationC.php';
    $ReservationC = new ReservationC();
    $ReservationC->supprimerReservation($_GET["idReservation"]);
    header('Location:afficherReservation.php');
?>