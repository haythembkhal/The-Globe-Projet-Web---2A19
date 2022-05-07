<?php
include 'userC.php';
include '../../Model/temoignage.php';

class temoignageC{
	
	function ajouterTemoignage($newTemoignage){
		$db = config::getConnexion();

        try {
            
            $query = $db->prepare(
                'INSERT INTO temoignage (message,client) 
                    VALUES (:message,:client)'
            );
            $query->execute([
                'message' => $newTemoignage->getMessage(),
                'client' => $newTemoignage->getClient(),
                
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}
	
	function afficherTemoignage(){
		$db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM temoignage'
            );
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
	}
	
	 function supprimerTemoignage($userId){

        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'DELETE FROM temoignage WHERE id_temoignage = :userId'
            );
            $query->execute([
                'userId' => $userId
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	
}
?>