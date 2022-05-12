<?php
include_once '../../config.php';
session_start();
config::getConnexion();
$occurence="";
function avisLiked($spec)
{
        try{
            $query= config::$pdo->query("SELECT COUNT(*) FROM avis where opinion='liked' AND spectacleId=$spec");
            $liked=$query->fetch();
            $liked=array_values($liked)[0]; 

            $query= config::$pdo->query("SELECT COUNT(*) FROM avis where spectacleId=$spec");
            $total=$query->fetch();
            $total=array_values($total)[0];      
          try{
            if($total==0)
            {
              throw new Exception("0");
            }
            else
            {
              $result=($liked/$total)*100;
              $resultDbl=number_format($result, 1);?>
              <span style="width: 40px; float:left; height:40px; color:green; margin:10px"><?php echo $resultDbl;?>%</span>
              <?php
            }
            }
            catch(Exception $e)
            {?>        
            <span style="width: 40px; float:left; height:40px; color:green; margin:10px"><?php echo $e->getMessage();?>%</span>
            <?php        
            }
        }
        catch(PDOException $e){
        echo $e->getMessage();
        }
}

function avisDisliked($spec) 
{
  try{
      $query= config::$pdo->query("SELECT COUNT(*) FROM avis where opinion='disliked' and  spectacleId=$spec");
      $disliked=$query->fetch();
      $disliked=array_values($disliked)[0];
      
      $query= config::$pdo->query("SELECT COUNT(*) FROM avis where spectacleId=$spec");
      $total=$query->fetch();
      $total=array_values($total)[0];
    try{
      if($total==0)
      {
        throw new Exception("0");
      }
      else
      {
        $result=($disliked/$total)*100;
        $resultDbl=number_format($result, 1);?>
        <span style="width: 40px; float:left; height:40px; color:red; margin:10px"><?php echo $resultDbl;?>%</span>
        <?php
      }
      }
      catch(Exception $e)
      {?>        
      <span style="width: 40px; float:left; height:40px; color:red; margin:10px"><?php echo $e->getMessage();?>%</span>
      <?php        
      }
    }
  catch(PDOException $e){
  echo $e->getMessage();
  }?>
<?php
}

function ajouterAvis($avis,$spec,$userId)
{
  try{

  //CONTROL DE SAISIE POUR NE PAS EVALUER A MAINTES REPRISES
  $query= config::$pdo->query("SELECT * FROM avis WHERE userId LIKE '$userId' AND spectacleId like '$spec'/*avis INNER JOIN utilisateur where*/ ");
  $occurence=$query->fetch();
  $occurence=array_values($occurence)[0];
  if($occurence=="") //CAS OU utilisateur n'a pas encore donné son avis
  {
  $query= config::$pdo->prepare("INSERT INTO avis (opinion,spectacleId,userId) VALUE (:avis,:spec,'$userId')");
  $query->bindParam(':avis', $avis);
  $query->bindParam(':spec', $spec);
  $query->execute();
  }
  else{
    $query=config::$pdo->query("DELETE FROM avis where userId like '$userId'AND spectacleId like '$spec'");

    $query= config::$pdo->prepare("INSERT INTO avis (opinion,spectacleId,userId) VALUE (:avis,:spec,'$userId')");
    $query->bindParam(':avis', $avis);
    $query->bindParam(':spec', $spec);
    $query->execute();

  }
}
  catch(PDOException $e){
  echo $e->getMessage();
  }
  // $query= config::$pdo->prepare("INSERT INTO avis (opinion,spectacleId) VALUE (:avis,:spec)");
  // $query->bindParam(':avis', $avis);
  // $query->bindParam(':spec', $spec);
  // $query->execute();
}

if(isset($_POST['disliked']))
{
  $avis=$_POST['disliked'];
  $spec=$_POST['specIdent'];
  $userId=$_SESSION['id_client'];//il faut remplacer ca par le vrai identifiant 
  ajouterAvis($avis,$spec,$userId);
}
if(isset($_POST['liked']))
{
  $avis=$_POST['liked'];
  $spec=$_POST['specIdent'];
  $userId=$_SESSION['id_client']; //il faut remplacer ca par le vrai identifiant 
  ajouterAvis($avis,$spec,$userId);
}
?>