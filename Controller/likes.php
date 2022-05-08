<?php 



include_once "config.php";

include_once "likes.php";

function getArtiste($Id){
    $db = config::getconnexion();

        try {
            $query = $db->query(
            "SELECT * FROM artistes where id='$Id'"
            );
            return $query->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }
}


function updateNumberOfLikes($courseId,$action){
    $course = getArtiste($courseId);
    if($action=="increment")
        $course['likess'] = $course['likess']+1;
    else if($action=="decrement")
        $course['likess'] = $course['likess']-1;
        
        $db = config::getconnexion();
    try{
        $query = $db->prepare(
            'UPDATE artistes SET likess= :likess where id = :id'
        );
        $query = $query->execute([
            'likess' => $course['likess'],
            'id' => $courseId
        ]);
    }catch(PDOException $e){
        $e->getMessage();
    }
}


function likeArtiste($idUser,$IdArtist)
{
    $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'INSERT INTO likes (id_user,id_art) 
                VALUES (:id_user,:id_art) '
            );
            $query->execute([
                'id_user' => $idUser,
                'id_art' => $IdArtist
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
}



if(isset($_GET['id']))
{

likeArtiste("1",$_GET['id']);
updateNumberOfLikes($_GET['id'],"increment");





}

header('Location:../View/Front/Artistes.php');


 ?>