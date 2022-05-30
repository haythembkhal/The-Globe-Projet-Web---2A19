<?php

include_once 'C:/xampp/htdocs/Alliance/config.php';
include_once '../../Model/message.php';




class MessageC{

function afficherMessage(){
        $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM message'
            );
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	function nombreNouveauMessage(){
		$db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * from message'
            );
			$query->execute();
			$result=$query->rowCount();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
	}

     function ajouterMessage($newMessage){
        $db = config::getConnexion();

        try {
            
            $query = $db->prepare(
                'INSERT INTO message (message,date,etat,client) 
                    VALUES (:message,now(),:etat,:client)'
            );
            $query->execute([
                'message' => $newMessage->getMessage(),
                'etat' => $newMessage->getEtat(),
                'client' => $newMessage->getClient()
				
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	

}

?>