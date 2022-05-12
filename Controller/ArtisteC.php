<?php 

include_once "../../config.php";
include_once '../../Model/Artiste.php'; 



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
                'INSERT INTO artistes (nom, nationalite, genre, age, description, categories, image) VALUES (:nom,:nationalite, :genre, :age, :description, :categories, :image)'
            );


            $query->execute([
                'nom' => $art->getnomArt(),
               'nationalite' => $art->getnation(),
               'genre'=> $art->getgenre(),
               'age'=> $art->getage(),
               'description'=> $art->getdescrip(),
               'categories' => $art->getcategories(),
               'image'=> $art->getimage()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
	$tempPort=$_FILES['image']['tmp_name'];
    $imgportrait="assets/images/".$_FILES['image']['name'];
    move_uploaded_file($tempPort,"../../Views/Front/".$imgportrait);
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
                        description= :description,
                        categories= :categories,
                        image= :image,
                        
                        
                    WHERE id= :id'
                );
                $query->execute([
                    'nom' => $art->getnomArt(),
                    'nationalite' =>$art->getnation(),
                    'genre' =>$art-> getgenre(),
                    'age' =>$art-> getage(),
                    'description' => $art->getdescrip(),
                    'categories' => $art->getcategories(),
                    'image'=> $art->getimage(),
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


        function rechercherartist($search)
  {
    $db = config::getConnexion();
try{
              $query= $db->prepare(
                "SELECT * from artistes where nom like '%".$search."%' 
                OR nationalite like '%".$search."%'

                order by id DESC"
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }




 function trierArtist($tri)
  {
       $db = config::getConnexion();

       try {
        //$result=1;
          //if(isset($_POST['triage']))
          
 $query= $db->prepare("SELECT * FROM artistes ORDER BY age ASC ");
           // $list=$query->fetchAll();         
          
           $query->execute();
              $result = $query->fetchALL();
              return $result;  
          
           
       } catch (PDOException $e) {
        $e->getMessage();
           
       }

  }









}




  
    
      


 ?>