<?php
include '../../Controller/temoignageC.php';
include '../../Model/notification.php';

class notificationC{
	
	function ajouterNotification($newNotification){
		$db = config::getConnexion();

        try {
            
            $query = $db->prepare(
                'INSERT INTO notification (message,etat,date_notification) 
                    VALUES (:message,:etat,now())'
            );
            $query->execute([
                'message' => $newNotification->getMessage(),
				'etat'	=> $newNotification->getEtat()
                
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}
	
	function afficherNotification(){
		$db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM notification order by id_notification desc'
            );
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
	}
	
	 
 function readAll(){

        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE notification SET etat=1'
            );
            $query = $query->execute();
           // $_SESSION['ville'] = $newville;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
	
	function nouvelleNotification(){
		$db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM notification where etat=0'
            );
			$query->execute();
			$result=$query->rowCount();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
	}
	
}
?>