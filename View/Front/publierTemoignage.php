<?php
session_start();

include '../../Controller/notificationC.php';
$notificationC=new notificationC();
if (isset($_POST['temoignage'])) {
        if (!empty($_POST['temoignage'])) {
            $temoignage = new Temoignage(
                $_POST['temoignage'],
               $_SESSION["id_client"]
            );
			
			
			$t=new TemoignageC();
			$t->ajouterTemoignage($temoignage);
			$_SESSION["temoignage"]=$_POST["temoignage"];
			$message_notification="PUBLICATION:".$_SESSION["firstname"]." ".$_SESSION["lastname"]." "."vient de publier un temoignage";			
								$etat=0;//non lu
								$notif=new Notification($message_notification,$etat);
						$notificationC->ajouterNotification($notif);
			header('location:my_profile.php');
		}
		
}
else
{
$_SESSION['temoignage']="";
}


?>