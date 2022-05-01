<?php 
include_once 'C:\xampp\htdocs\Alliance\config.php';
session_start();
$_SESSION['status']="";
$test="test";
config::getConnexion();
function ajouterComment(/*$user,*/$commentaire,$specId) 
    {//il faut rajouter la date
    
        try
        {
        $query= config::$pdo->prepare("INSERT INTO comments (commentaire,spectacleId,dateCommentaire) VALUES (:commentaire,:specId,now())");
            $query->bindParam(':commentaire', $commentaire);
            $query->bindParam(':specId', $specId);
            $query->execute();
            $_SESSION['status']="Ajout Avec Succes !";

    }
        catch(PDOException $e){
        echo $e->getMessage();
        }
    }

    if(/*isset($_POST["idUser"])&&*/ isset($_POST["specId"]) && isset($_POST["commentaire"]))
    {
    ajouterComment($_POST["commentaire"],$_POST["specId"]);
	$_SESSION['status']="Ajout Avec Succes !";

	
    }
	else
	{
		var_dump($test);
	die;
	
	}
	
?>