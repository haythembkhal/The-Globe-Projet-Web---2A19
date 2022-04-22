<?php  

include_once "config.php";
include_once 'C:\xampp\htdocs\Artistes\Model\Categorie.php'; 
//include_once '..\Model\Categorie.php'; 

/**
 * 
 */

class categorieC
{
	
	
	 function ajoutercategorie($cat)
        {
			// $sql="INSERT INTO categories (nom, description) 
			// VALUES (:nom,:description)";
			// $db = config::getConnexion();
			// try{
			// 	$query = $db->prepare($sql);
			// 	$query->execute([
			// 		'nom' => $cat->getnomCt(),
			// 		'description' => $cat->getdescription()
   //              ]);		
   //      }
   //      catch (Exception $e){
   //          echo 'Error: '.$e->getMessage();
   //      }

            $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO categories (nom, description) 
            VALUES (:nom,:description)'
            );
            $query->execute([
                'nom' => $cat->getnomCt(),
               'description' => $cat->getdescription()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
}


      function afficherCategorie(){
            $sql="SELECT * FROM categories";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }



  function deletecategorie($ID){

        $sql="DELETE FROM categories WHERE ID=:ID";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':ID', $ID);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
    }



    function recuperercategorie($ID){
            $sql="SELECT * from categories where ID=$ID";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();

                $adherent=$query->fetch();
                return $adherent;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


    function updatecategorie($cate,$ID){

        try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE categories SET 
                       
                        nom= :nom, 
                        description= :description  
                        
                    WHERE ID= :ID'
                );
                $query->execute([
                    'nom' => $cate->getnomCt(),
                    'description' => $cate->getdescription(),
                    'ID' => $ID  
                    
                 

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }


    function afficherArtistesF($ID)
    {
        try {
           $db = config::getConnexion();
            $query = $db->prepare(
                'SELECT * FROM artiste WHERE categories = :ID');
            $query->execute([
                'ID' => $ID
            ]);
            return $query->fetchAll();
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}
?>