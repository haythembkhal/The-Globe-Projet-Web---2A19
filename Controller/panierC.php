<?php

include_once 'C:/xampp/htdocs/Alliance/config.php';
include_once '../../Model/panier.php';



class PanierC{

function afficherPannier($userId){
        $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM panier where client=:userID'
            );
			$query->execute(['userID'=>$userId]);
			
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	
function rechercherProduit($id){
	$db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM produits where id_produit=:id_prod'
            );
			$query->execute(['id_prod'=>$id]);
			
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
}

     function ajouterPannier($newPannier){
        $db = config::getConnexion();

        try {
            
            $query = $db->prepare(
                'INSERT INTO panier (nom,image,prix,client) 
                    VALUES (:nom,:image,:prix,:client)'
            );
            $query->execute([
                'nom' => $newPannier->getNom(),
                'image' => $newPannier->getImage(),
                'prix' => $newPannier->getPrix(),
                'client' => $newPannier->getClient()
				
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	
	function supprimerPannier($userId){

        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'DELETE FROM panier WHERE client = :userId'
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