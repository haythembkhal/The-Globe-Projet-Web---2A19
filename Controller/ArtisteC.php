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
                'INSERT INTO artistes (nom, nationalite, genre, age, description) 
            VALUES (:nom,:nationalite, :genre, :age, :description)'
            );
            $query->execute([
                'nom' => $art->getnomArt(),
               'nationalite' => $art->getnation(),
               'genre'=> $art->getgenre();
               'age'=> $art->getage();
               'description'=>getdescrip()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}


	     /* function afficherCategorie(){
            $sql="SELECT * FROM adherent";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }*/


         function deleteartiste($id){

        $sql="DELETE FROM artistes WHERE ID=:id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':ID', $id);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
    }

    function recuperercartiste($Id){
            $sql="SELECT * from artistes where ID=$Id";
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


            function updatecategorie($art,$id){

        try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE artistes SET 
                       
                        nom= :nom, 
                        nationalite= :nationalite,
                        genre= :genre,
                        age= :age,
                        description= :description
                        
                    WHERE ID= :Id'
                );
                $query->execute([
                    'nom' => $cate->getnomArt(),
                    'nationalite' =>$art->getnation(),
                    'genre' =>$art-> getgenre(),
                    'age' =>$art-> getage(),
                    'description' => $art->getdescription(),
                    'ID' => $Id 
                    
                 

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }
}





 ?>