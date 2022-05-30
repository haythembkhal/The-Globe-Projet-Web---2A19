<?php 
include_once 'C:/xampp/htdocs/Alliance/config.php';

session_start();
$_SESSION['stat']="";
$test="test";
//config::getConnexion();
$db = config::getConnexion();

function ajoutComment($idSpec,$Comment)
{
        $query= config::$pdo->prepare(" INSERT INTO comments (commentaire,spectacleId,dateCommentaire,username,userid)VALUES (:commentaire,:specId,now(),:username,:userid)");
		$query->bindParam(':commentaire',$Comment);
		$query->bindParam(':specId', $idSpec);
		$query->bindParam(':username', $_SESSION["firstname"]);
		$query->bindParam(':userid', $_SESSION["id_client"]);
		$query->execute();
}


    if(isset($_POST["S"]) && isset($_POST["C"]))
    {
    ajoutComment($_POST["S"],$_POST["C"]); //LE PROBLEME EST AU NIVEAU DE CETTE FONCTION, ON ARRIVE A 
	$_SESSION['stat']="Ajout Avec Succes !";
	header("location:http://localhost/Alliance/View/Front/spectacleChoix.php?specId=".$_SESSION["idSpectacle"]);
					
    }
	else
	{
		var_dump($test);
	die;
	
	}

?>
