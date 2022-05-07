<?php 
include_once 'C:/xampp/htdocs/Alliance/config.php';

session_start();
$_SESSION['status']="";
$test="test";
//config::getConnexion();
$db = config::getConnexion();
function ajouterComment(/*$user,*/$commentaire,$specId) 
    {//il faut rajouter la date
    
        try
        {
        $query= config::$pdo->prepare("INSERT INTO comments (commentaire,spectacleId,dateCommentaire,username) VALUES (:commentaire,:specId,now(),:username)");
            $query->bindParam(':commentaire', $commentaire);
            $query->bindParam(':specId', $specId);
			 $query->bindParam(':username', $_SESSION["firstname"]);
            $query->execute();
            $_SESSION['status']="Ajout Avec Succes !";

    }
        catch(PDOException $e){
        echo $e->getMessage();
        }
}

    if(isset($_POST["S"]) && isset($_POST["C"]))
    {
    ajouterComment($_POST["C"],$_POST["S"]);
	
	$_SESSION['status']="Ajout Avec Succes !";
	
	header("location:http://localhost/Alliance/View/Front/spectacleChoix.php");
					
    }
	else
	{
		var_dump($test);
	die;
	
	}

?>
