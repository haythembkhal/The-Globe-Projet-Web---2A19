<?php 
include_once '../../configDatabase.php';
config::getConnexion();
class SpectaclesC{

public function afficher() 
{
        try{
            $query= config::$pdo->query('SELECT * FROM spectacles');
            $list=$query->fetchAll();
        }
        catch(PDOException $e){
        echo $e->getMessage();
        }
		
		$var=0;
         foreach($list as $spectacle){
			 if($var==0){
			 ?>
	<div class="item vhny-grid">
						<div class="box16">
						<a href="http://localhost/Module%20Spectacle/View/FrontOffice/spectacleChoix.php?specId=<?php
						 echo $spectacle['spectacleId'];?>&description=<?php echo $spectacle['description'];?>
						 &hotel=<?php echo $spectacle['hotel'];?>&resto=<?php echo $spectacle['resto'];?>&gare=
						 <?php echo $spectacle['gare'] ?>&imgportrait=<?php echo $spectacle['imgportrait'];?>
						 &realisateurs=<?php echo $spectacle['realisateurs'];?>&video=<?php echo $spectacle['video'];?>
						 &carte=<?php echo $spectacle['carte'];?>&imglandscape=<?php echo $spectacle['imglandscape'];?>
						 &plan=<?php echo $spectacle['plan'];?>&titre=<?php echo $spectacle['titre']; ?>
						 &dateSpec=<?php echo $spectacle['dateSpec'];?>&duration=<?php echo $spectacle['duration'];?>
						 &adresse=<?php echo $spectacle ['adresse'];?>">


								<figure>
									<img class="img-fluid" src=" <?php echo $spectacle['imglandscape'];?>" alt="">

								</figure>
								<div class="box-content">
									<h3 class="title"><?php echo $spectacle['titre'];?></h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $spectacle['duration'];?>

										</span>
									</h4>
								</div>
							</a>
						</div>
					<?php }
					if($var==1)
					{?>
						<div class="box16 mt-4">
						<a href="http://localhost/Module%20Spectacle/View/FrontOffice/spectacleChoix.php?specId=<?php
						 echo $spectacle['spectacleId'];?>&description=<?php echo $spectacle['description'];?>
						 &hotel=<?php echo $spectacle['hotel'];?>&resto=<?php echo $spectacle['resto'];?>&gare=
						 <?php echo $spectacle['gare'] ?>&imgportrait=<?php echo $spectacle['imgportrait'];?>
						 &realisateurs=<?php echo $spectacle['realisateurs'];?>&video=<?php echo $spectacle['video'];?>
						 &carte=<?php echo $spectacle['carte'];?>&imglandscape=<?php echo $spectacle['imglandscape'];?>
						 &plan=<?php echo $spectacle['plan'];?>&titre=<?php echo $spectacle['titre']; ?>
						 &dateSpec=<?php echo $spectacle['dateSpec'];?>&duration=<?php echo $spectacle['duration'];?>
						 &adresse=<?php echo $spectacle ['adresse'];?>">

								<figure>
									<img class="img-fluid" src=" <?php echo $spectacle['imglandscape'];?>" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title"><?php echo $spectacle['titre'];?></h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $spectacle['duration'];?>
										</span>
									</h4>
								</div>
							</a>
						</div>
					</div>
                        
            <?php 
					}
					if($var==0)
						$var++;
					else if($var==1)
						$var--;

        }
    }
}?>


  