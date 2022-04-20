<?php
include_once '..\..\configDatabase.php';

config::getConnexion();
function avisLiked()
{
        try{
            
            $query= config::$pdo->query("SELECT COUNT(*) FROM avis where opinion='liked'");
            $liked=$query->fetch();
            $liked=array_values($liked)[0]; 

            $query= config::$pdo->query("SELECT COUNT(*) FROM avis");
            $total=$query->fetch();
            $total=array_values($total)[0];
      
            $result=($liked/$total)*100;
            $resultDbl=number_format($result, 1);            }
        catch(PDOException $e){
        echo $e->getMessage();
        }?>
        <span style="width: 40px; float:left; height:40px; color:green; margin:10px"><?php echo $resultDbl;?>%</span>
<?php
}

function avisDisliked() 
{
  try{
      
      $query= config::$pdo->query("SELECT COUNT(*) FROM avis where opinion='disliked'");
      $disliked=$query->fetch();
      $disliked=array_values($disliked)[0];
      
      $query= config::$pdo->query("SELECT COUNT(*) FROM avis");
      $total=$query->fetch();
      $total=array_values($total)[0];

      $result=($disliked/$total)*100;
      $resultDbl=number_format($result, 1);
    }
  catch(PDOException $e){
  echo $e->getMessage();
  }?>
  <span style="width: 40px; float:left; height:40px; color:red; margin:10px"><?php echo $resultDbl;?>%</span>
<?php
}

function ajouterAvis($avis)
{
  $query= config::$pdo->prepare("INSERT INTO avis (opinion) VALUE (:avis)");
  // $query->bindParam(':idEval', $idEval);
  // $query->bindParam(':spectacleId', $spectacleId);
  $query->bindParam(':avis', $avis);
  $query->execute();
}
if(isset($_POST['disliked']))
{
  $avis=$_POST['disliked'];
  ajouterAvis($avis);
}
if(isset($_POST['liked']))
{
  $avis=$_POST['liked'];
  ajouterAvis($avis);
}
?>