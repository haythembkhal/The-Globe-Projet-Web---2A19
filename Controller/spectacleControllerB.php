<?php 
//include_once '../../config.php'; config est déja appéle dans notificationC
include_once '../../Model/spectacleModelB.php';
include_once '../../Controller/notificationC.php';

config::getConnexion();
session_start();
$_SESSION['titre']="";
$_SESSION['adresse']="";
$_SESSION['duration']="";
$_SESSION['date']="";
$_SESSION['resto']="";
$_SESSION['hotel']="";
$_SESSION['gare']="";

$_SESSION['idSpec']="";
$_SESSION['video']="";
$_SESSION['carte']="";
$_SESSION['description']="";
$_SESSION['realisateurs']="";
$_SESSION['plan']="";
// $_SESSION['imgLand']=$_POST["imgLand"];
// $_SESSION['imgPort']=$_POST["imgPort"];

function afficher (): void {  //Implementation de recherche a linteurieur
        try{
          $result=1;
          if(isset($_POST['triDate']))
          {
            $query= config::$pdo->query('SELECT * FROM spectacles ORDER BY dateSpec');
            $list=$query->fetchAll();         
          }
          else if(isset($_POST['triAlpha']))
          {
            $query= config::$pdo->query('SELECT * FROM spectacles ORDER BY titre');
            $list=$query->fetchAll(); 
          }
          else if(isset($_POST['rechercheId'])&& $_POST['rechercheId']=="")
          {
            $query= config::$pdo->query('SELECT * FROM spectacles');
            $list=$query->fetchAll();
          }
          else if(isset($_POST['rechercheId']) && $_POST['rechercheId']!="")
          {
            $query= config::$pdo->prepare('SELECT COUNT(*) FROM spectacles where LOWER(titre) like LOWER("%":id"%")');
            $query->bindParam(':id',$_POST['rechercheId']);
            $query->execute();
            $list=$query->fetch();

            $var=array_values($list)[0]; // Outputs: Apple
            // echo $var;
            if($var==0)
            { $result=0;
            //  $query= config::$pdo->query('SELECT * FROM spectacles');
              //$list=$query->fetchAll();
            }
            else
            { $query= config::$pdo->prepare('SELECT * FROM spectacles where LOWER(titre) like LOWER("%":id"%")');
            $query->bindParam(':id',$_POST['rechercheId']);
            $query->execute();
            $list=$query->fetchAll();
            }
          }
          else
            {
              $query= config::$pdo->query('SELECT * FROM spectacles');
              $list=$query->fetchAll();
            }
         
        }
        catch(PDOException $e){
        echo $e->getMessage();
        }
        if($result==0)
        {
          echo'<p>PAS DE RESULTAT</p>';
        }
        else if($result==1){
         foreach($list as $spectacle){?>
            <tr class="odd gradeX">
                <td><?= $spectacle['titre'] ?></td>  
                <td><?= $spectacle['dateSpec']?></td>
                <td><?= $spectacle['duration']?></td>
                <td><?= $spectacle['adresse']?></td>
                <!-- <td><$spectacle["hotel"]</td> -->
                <!-- <td>< $spectacle["resto"]</td> -->
                <!-- <td> $spectacle["gare"]</td> -->
                <!-- <td>$spectacle['description'] </td>   -->
                <td><?= $spectacle['plan'] ?></td>
                <td><?= $spectacle['realisateurs']?></td>
                  
                <td>  <form method="POST">
                <input type="hidden" id="delete" name="delete" value="<?php 
                echo $spectacle['spectacleId'];?>"> 
                <button type="submit" value="Supprimer"><ion-icon name="trash-outline"></ion-icon>Supprimer</button></form></td>  
                <td> <form method="POST">            <input type="hidden" id="idSpec" name="idSpec" value="<?php 
                echo $spectacle['spectacleId'];?>"> 
                <input type="hidden" id="titre" name="titre" value="<?php 
                echo $spectacle['titre'];?>">

                  <input type="hidden" id="date" name="date" value="<?php 
                echo $spectacle['dateSpec'];?>"> 

                  <input type="hidden" id="duration" name="duration" value="<?php 
                echo $spectacle['duration'];?>"> 

                  <input type="hidden" id="adresse" name="adresse" value="<?php 
                echo $spectacle['adresse'];?>"> 

                  <input type="hidden" id="hotel" name="hotel" value="<?php 
                echo $spectacle['hotel'];?>">

                  <input type="hidden" id="gare" name="gare" value="<?php 
                    echo $spectacle['gare'];?>">

                <input type="hidden" id="resto" name="resto" value="<?php 
                    echo $spectacle['resto'];?>"> 

                  <input type="hidden" id="realisateurs" name="realisateurs" value="<?php 
                echo $spectacle['realisateurs'];?>"> 

                  <input type="hidden" id="d" name="d" value="<?php 
                echo $spectacle['description'];?>"> 

                  <input type="hidden" id="carte" name="carte" value="<?php 
                echo $spectacle['carte'];?>"> 

                <input type="hidden" id="video" name="video" value="<?php 
                echo $spectacle['video'];?>"> 

                  <input type="hidden" id="plan" name="plan" value="<?php 
                echo $spectacle['plan'];?>"> 
                
                  <input type="hidden" id="imgPort" name="imgPort" value="<?php 
                    echo $spectacle['imgportrait'];?>"> 
                <input type="hidden" id="imgLand" name="imgLand" value="<?php 
                    echo $spectacle['imglandscape'];?>"> 

                    <button type="submit" value="1" ><ion-icon name="finger-print-outline"></ion-icon>Selectionner</button>
                    </form></td>
            </tr>
            <?php 
        }
    }
}  
function ajouterSpec($titre,$date,$duration,$adresse,$hotel,$resto,$gare,$description,$realisateurs,$plan,$video,$carte,$imglandscape,$imgportrait) 
    {//il faut rajouter la date
    
        try
        {
        $query= config::$pdo->prepare("INSERT INTO spectacles (titre,dateSpec,duration,adresse,hotel,resto,gare,description,realisateurs,plan,video,carte,imglandscape,imgportrait) VALUES (:titre,:dateSpec,:duration,:adresse,:hotel,:resto,:gare,:description,:realisateurs,:plan,:video,:carte,:imglandscape,:imgportrait)");
            $query->bindParam(':titre', $titre);
            $query->bindParam(':dateSpec', $date);
            $query->bindParam(':duration',$duration);
            $query->bindParam(':adresse', $adresse);
            $query->bindParam(':hotel', $hotel);
            $query->bindParam(':resto', $resto);
            $query->bindParam(':gare', $gare);

            $query->bindParam(':description', $description);
            $query->bindParam(':realisateurs', $realisateurs);
            $query->bindParam(':plan', $plan);
            $query->bindParam(':video', $video);
            $query->bindParam(':carte', $carte);
            $query->bindParam(':imglandscape', $imglandscape);
            $query->bindParam(':imgportrait', $imgportrait);

            $query->execute();

            $_SESSION['message']="Ajout Avec Succes !";
    }
        catch(PDOException $e){
        echo $e->getMessage();
        }
    }
    

    function modifierSpec($specId,$titre,$date,$duration,$adresse,$hotel,$resto,$gare,$description,$realisateurs,$plan,$video,$carte,$imglandscape,$imgportrait) 
    {
        $query= config::$pdo->prepare(" UPDATE spectacles set titre=:titre,dateSpec=:dateSpec,duration=:duration,adresse=:adresse,hotel=:hotel,resto=:resto,gare=:gare,description=:description,realisateurs=:realisateurs,plan=:plan,video=:video,carte=:carte,imglandscape=:imglandscape,imgportrait=:imgportrait where spectacleId=:specId ");
        $query->bindParam(':specId', $specId);
        $query->bindParam(':titre', $titre);
        $query->bindParam(':dateSpec', $date);
        $query->bindParam(':duration',$duration);
        $query->bindParam(':adresse', $adresse);
        $query->bindParam(':hotel', $hotel);
        $query->bindParam(':resto', $resto);
        $query->bindParam(':gare', $gare);

        $query->bindParam(':description', $description);
        $query->bindParam(':realisateurs', $realisateurs);
        $query->bindParam(':plan', $plan);
        $query->bindParam(':video', $video);
        $query->bindParam(':carte', $carte);
        $query->bindParam(':imglandscape', $imglandscape);
        $query->bindParam(':imgportrait', $imgportrait);
        $query->execute();
        if($specId>0)
          $_SESSION['message']="Mis a Jour Avec Succes!";
    }


    function supprimerSpec($delete){
    
        try{
            $query=config::$pdo->prepare('DELETE FROM spectacles where spectacleId = :id');
            $query->bindParam(':id',$delete);
            $query->execute();
            $_SESSION['message']="Suppression Avec Succes!";
            // header("location:http://localhost/Projet%20Web%20Alliance/frontoffice/View/accuiel.php");

        }
            catch(PDOException $e){
            echo $e->getMessage();
            }?>

       <?php }



//////////////////////////////////////////////////////////////

if(isset($_POST["idSpec"]) && isset($_POST["titre"]) && isset($_POST["date"]) 
&& isset($_POST["adresse"]) && isset($_POST["duration"]) && isset($_POST["hotel"]) 
&& isset($_POST["resto"]) && isset($_POST["gare"]) && isset($_POST["d"])&& 
isset($_POST["realisateurs"])&& isset($_POST["video"])
&& isset($_POST["carte"])&& isset($_POST["d"]) 
&& isset($_POST["realisateurs"]) && isset($_POST["plan"])  && isset($_POST["carte"]) 
&& isset($_POST["video"])  && isset($_POST["imgLand"]) && isset($_POST["imgPort"]))
{

    $_SESSION['idSpec']=$_POST["idSpec"];
    $_SESSION['titre']=$_POST["titre"];
    $_SESSION['adresse']=$_POST["adresse"];
    $_SESSION['duration']=$_POST["duration"];
    $_SESSION['date']=$_POST["date"];
    $_SESSION['resto']=$_POST["resto"];
    $_SESSION['hotel']=$_POST["hotel"];
    $_SESSION['gare']=$_POST["gare"];

    
    $_SESSION['video']=$_POST["video"];
    $_SESSION['carte']=$_POST["carte"];
    $_SESSION['description']=$_POST["d"];
    $_SESSION['realisateurs']=$_POST["realisateurs"];


    $_SESSION['plan']=$_POST["plan"];
    // $_SESSION['imgLand']=$_POST["imgLand"];
    // $_SESSION['imgPort']=$_POST["imgPort"];
    
}   


if (isset($_POST["delete"]))
{
    $spectacle=new SpectaclesC($_POST["delete"],"","","","","","","","","","","","","","");    
    // $spectacle->specId=$_POST["delete"];
    supprimerSpec($spectacle->getId());
}



if(isset($_POST["button"]) && isset($_POST["titre"]) && isset($_POST["date"]) 
&& isset($_POST["adresse"]) && isset($_POST["duration"]) && isset($_POST["hotel"]) 
&& isset($_POST["resto"]) && isset($_POST["gare"]) && isset($_POST["desc"]) 
&& isset($_POST["realisateurs"])  && isset($_POST["carte"]) 
&& isset($_POST["video"])) 
{
    
  
$status=$_POST["button"];

$tempLand=$_FILES['imgLand']['tmp_name'];
$tempPort=$_FILES['imgPort']['tmp_name'];
// $tempPlan=$_FILES['plan']['tmp_name'];

// $plan="assets/images/".$_FILES['plan']['name'];  va etre utiliser dans un futur proche
$plan=$_POST["plan"];

$imgportrait="assets/images/".$_FILES['imgPort']['name'];
$imglandscape="assets/images/".$_FILES['imgLand']['name'];

$spectacle=new SpectaclesC($_POST["idS"],$_POST["titre"],$_POST["date"],$_POST["duration"],$_POST["adresse"],$_POST["hotel"],$_POST["resto"],$_POST["gare"],$_POST["desc"],$_POST["realisateurs"],$plan,$_POST["video"],$_POST["carte"],$imglandscape,$imgportrait);    

// move_uploaded_file($tempPlan,"../../View/FrontOffice/".$plan); va etre utiliser dans un futur proche
move_uploaded_file($tempPort,"../../View/Front/".$imgportrait);
move_uploaded_file($tempLand,"../../View/Front/".$imglandscape);
if($status=="Ajouter") //faut la laisser sinon je vais faire une mise a jour et un ajout en meme tmeps, jaurais pu la mettre dans le 'if' statement
 {            

        ajouterSpec($spectacle->getTitre(),$spectacle->getDate(),$spectacle->getDuration(),$spectacle->getAdresse(),$spectacle->getHotel(),$spectacle->getResto(),$spectacle->getGare(),$spectacle->getDesc(),$spectacle->getReal(),$spectacle->getPlan(),$spectacle->getVideo(),$spectacle->getCarte(),$spectacle->getLand(),$spectacle->getPort());
 }
 
if(isset ($_POST["idS"]))
 {
  if($status=="Modifier")
  {
    // $spectacle->specId=$_POST["idS"];
    modifierSpec($spectacle->getId(),$spectacle->getTitre(),$spectacle->getDate(),$spectacle->getDuration(),$spectacle->getAdresse(),$spectacle->getHotel(),$spectacle->getResto(),$spectacle->getGare(),$spectacle->getDesc(),$spectacle->getReal(),$spectacle->getPlan(),$spectacle->getVideo(),$spectacle->getCarte(),$spectacle->getLand(),$spectacle->getPort());
  }
  // else echo 'error'

 }
}
?>
