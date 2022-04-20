<?php
include_once '..\..\configDatabase.php';
include_once '..\..\Model\BackOffice\commentaireModel.php';

config::getConnexion();
function afficherCommentaire($spec) 
{
        try{    

            $query=config::$pdo->prepare('SELECT * FROM comments  where spectacleId= :id');
            $query->bindParam(':id',$spec);
            $query->execute();

            $list=$query->fetchAll();
        }
        catch(PDOException $e){
        echo $e->getMessage();
        }
		
        foreach($list as $comment){?>
			
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img  style="border-radius: 50%;" src="https://i.imgur.com/J6l19aF.jpg" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h4 class="font-medium"><?php echo $comment['idEval'];?></h4> 
                        <span class="m-b-15 d-block"><?php echo $comment['commentaire'];?></span>
                        <b><div class="comment-footer"> <span class="text-muted float-right"><?php echo $comment['dateCommentaire'];?></span></b> 

                        <form method="POST">                            
                        <button style="background-color:green;"type="button" class="btn btn-success btn-sm">Repondre</button> 
                        <button type="button" class="btn btn-cyan btn-sm" onclick="openForm()">Modifier</button> 
                            <button  style="background-color:red;" name='deleteP'type="submit" value="<?php 
                echo $comment['idEval'];?>" class="btn btn-danger btn-sm">Supprimer</button>  </div>
                <br>          </form>
                <form method="POST"style="display:none;" id="myText"> <textarea style="width:250px;"name="comment" placeholder="Ecrire juste ici...."><?php echo $comment['commentaire'];?>
            </textarea> <br><button onclick="closeForm()">Annuler</button> <button type="submit" name="idEval" value="<?php echo $comment['idEval'];?>">
            Confirmer</button></form>             
                </div>
                </div>
                    <?php
        }
}

//J'ai essaye de reutiliser mes fonctions ma ca n'a abouti a rien
function supprimerCommentaire($delete){
    
    try{
        $query=config::$pdo->prepare('DELETE FROM comments  where idEval = :id');
        $query->bindParam(':id',$delete);
        $query->execute();
    }
        catch(PDOException $e){
        echo $e->getMessage();
        }
}
/////Suppression
if (isset($_POST["deleteP"]))
{
   $comment=new comments($_POST["deleteP"],"");    
supprimerCommentaire($comment->getId());
}

///Modification
function modifierComment($idEval,$commentaire) 
{
    $query= config::$pdo->prepare(" UPDATE comments set commentaire=:commentaire where idEval=:idEval ");
    $query->bindParam(':idEval', $idEval);
    $query->bindParam(':commentaire', $commentaire);
    $query->execute();
}

if(isset($_POST["idEval"]) && isset($_POST["comment"])) 
{
// $comment=$_POST["comment"];
// $idEval=$_POST["idEval"];
// modifierComment($idEval,$comment); 
$comment=new comments($_POST["idEval"],$_POST["comment"]);
modifierComment($comment->getId(),$comment->getComment());
}
?>