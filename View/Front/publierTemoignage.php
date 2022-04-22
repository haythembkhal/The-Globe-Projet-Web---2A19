<?php
session_start();
include '../../Controller/temoignageC.php';

if (isset($_POST['temoignage'])) {
        if (!empty($_POST['temoignage'])) {
            $temoignage = new Temoignage(
                $_POST['temoignage'],
               $_SESSION["id_client"]
            );
			
			
			$t=new TemoignageC();
			$t->ajouterTemoignage($temoignage);
			$_SESSION["temoignage"]=$_POST["temoignage"];
			header('location:my_profile.php');
		}
		
}


?>