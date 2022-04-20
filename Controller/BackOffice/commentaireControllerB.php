<?php
include_once '..\..\configDatabase.php';
include_once '..\..\Model\BackOffice\commentaireModel.php';

config::getConnexion();//do i need this here
$_SESSION['messageComment']="";
$_SESSION['titreSpec']="";
$_SESSION['idUser']="";
$_SESSION['dateComment']="";
$_SESSION['commentaire']="";
$_SESSION['idEval']="";
function afficherComment (): void {
        try{
            $query= config::$pdo->query('SELECT spectacles.titre,dateCommentaire,commentaire,idEval FROM comments INNER JOIN spectacles where spectacles.spectacleId=comments.spectacleId');
            $list=$query->fetchAll();
        }
        catch(PDOException $e){
        echo $e->getMessage();
        }
         foreach($list as $comment){?>  
                <tr class="odd gradeX">
					<td>User</td>
					<td><?=$comment['titre']?></td>
					<td><?= $comment['dateCommentaire'] ?></td>
					<td><?= $comment['commentaire'] ?></td>
                <td>  <form method="POST">
                <input type="hidden" id="deleteC" name="deleteC" value="<?php 
                echo $comment['idEval'];?>"> 
                <button type="submit" value="Supprimer"><ion-icon name="trash-outline"></ion-icon>Supprimer</button></form></td>
 
                <td> <form method="POST">            
      
                <input type="hidden" id="idUser" name="idUser" value="Uknown at the moment"> 

                <input type="hidden" id="titreSpec" name="titreSpec" value="<?php echo $comment['titre']; ?>"> 

                <input type="hidden" id="dateComment" name="dateComment" value="<?php 
                echo $comment['dateCommentaire'];?>">

                  <input type="hidden" id="commentaire" name="commentaire" value="<?php 
                echo $comment['commentaire'];?>"> 

                <input type="hidden" id="idEval" name="idEval" value="<?php 
                echo $comment['idEval'];?>"> 

                    <button type="submit" ><ion-icon name="finger-print-outline"></ion-icon>Selectionner</button>
                    </form></td>
            </tr>
            <?php 
        }
    }





    function modifierComment($idEval,$commentaire) 
    {
        $query= config::$pdo->prepare(" UPDATE comments set commentaire=:commentaire where idEval=:idEval ");
        $query->bindParam(':idEval', $idEval);
        $query->bindParam(':commentaire', $commentaire);
        $query->execute();
        if($idEval!="")
            $_SESSION['messageComment']="Mise a Jour Avec Succes!";
    }


    function supprimerCommentaire($delete){
    
        try{
            $query=config::$pdo->prepare('DELETE FROM comments  where idEval = :id');
            $query->bindParam(':id',$delete);
            $query->execute();
            $_SESSION['messageComment']="Suppression Avec Succes!";
        }
            catch(PDOException $e){
            echo $e->getMessage();
            }
}



if (isset($_POST["deleteC"]))
{
    $comment=new comments($_POST["deleteC"],"");    
    supprimerCommentaire($comment->getId());

}

if(isset($_POST["idEval"]) && isset($_POST["comment"])) 
{
$comment=new comments($_POST["idEval"],$_POST["comment"]);
modifierComment($comment->getId(),$comment->getComment()); 
}


///SELECTIONNER
if(isset($_POST["idUser"]) && isset($_POST["titreSpec"]) && isset($_POST["commentaire"]) 
&& isset($_POST["dateComment"]))
{

// $_SESSION['idUser']=$_POST["idUser"]; //will beused for username
$_SESSION['idUser']="User ID";
$_SESSION['titreSpec']=$_POST["titreSpec"];
$_SESSION['dateComment']=$_POST["dateComment"];
$_SESSION['commentaire']=$_POST["commentaire"];  
$_SESSION['idEval']=$_POST["idEval"];
}
?>
