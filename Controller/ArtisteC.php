<?php 

include_once "config.php";
include_once 'C:\xampp\htdocs\Artistes\Model\Artiste.php'; 



/**
 * 
 */
class ArtisteC 
{
	
	function ajouterArtiste($art)
	{
		// code...
		           $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO artistes (nom, nationalite, genre, age, description) VALUES (:nom,:nationalite, :genre, :age, :description)'
            );
            $query->execute([
                'nom' => $art->getnomArt(),
               'nationalite' => $art->getnation(),
               'genre'=> $art->getgenre(),
               'age'=> $art->getage(),
               'description'=> $art->getdescrip()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}


	     


         function deleteartiste($id){

        $sql="DELETE FROM artistes WHERE id=:id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id', $id);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMessage());
            }
    }

    function recupererartiste($id){
            $sql="SELECT * from artistes where id=$id";
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


            function updateartiste($art,$id){

        try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE artistes SET 
                       
                        nom= :nom, 
                        nationalite= :nationalite,
                        genre= :genre,
                        age= :age,
                        description= :description
                        
                    WHERE id= :id'
                );
                $query->execute([
                    'nom' => $art->getnomArt(),
                    'nationalite' =>$art->getnation(),
                    'genre' =>$art-> getgenre(),
                    'age' =>$art-> getage(),
                    'description' => $art->getdescrip(),
                    'id' => $id 
                    
                 

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }


  function afficherArtistes(){
            $sql="SELECT * FROM artistes";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }


}


      


 ?>