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
        $query= config::$pdo->prepare("INSERT INTO comments (commentaire,spectacleId,dateCommentaire,username,userid) VALUES (:commentaire,:specId,now(),:username,:userid)");
            $query->bindParam(':commentaire', $commentaire);
            $query->bindParam(':specId', $specId);
			 $query->bindParam(':username', $_SESSION["firstname"]);
            $query->bindParam(':userid', $_SESSION["id_client"]);
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
	header("location:http://localhost/Alliance/View/Front/spectacleChoix.php?specId=".$_SESSION["idSpectacle"]);
					
    }
	else
	{
		var_dump($test);
	die;
	
	}

?>
