<?php 



include_once  "C:/xampp/htdocs/Artistes/Controller/CategorieC.php"; 

$list=null;
$categoriesC = new categorieC();
$categori = $categoriesC->afficherCategorie();

if(isset($_POST['categories']))
{
	$list = $categoriesC->afficherArtistesF($_POST['categories']);
    //var_dump($list);
//die;
} 





 ?>


 <!--<!DOCTYPE html>-->
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Bonnet</title>
 </head>
 <body>

  <div class="from-contenair">
  	 <form action="" method="POST">
  	 	<div class="row">
  	 	<div class="col-25">
  	 		<label>Rechercher</label>
  	 	</div>
  	 	<div class="col-75">
  	 		<select name="categories" id="categories">
  	 			<?php foreach ($categori as $key) { ?>
  	 				<option value="<?php $key['ID'] ?>"<?php if(isset($_POST['rechercher']) && $key['ID'] ==$_POST['categories'])
  	 				{
  	 				?>
  	 				 selected 
  	 				<?php } ?>
  	 				>
  	 				<?=$key['nom']?>
  	 			</option>
  	 			<?php } ?>
  	 		</select>
  	 	</div>
  	 	</div>
  	 	<br>
  	 	<div class="row">
  	 		<input type="submit"  value="Rechercher" name="rechercher">
  	 		
  	 	</div>
  	 	
  	 </form>
  </div>	



  <?php if(isset($_POST['rechercher'])) { ?>

    <section class="contenair">
        <h2>Artistes</h2>
        <div class="shop-items">
            <?php 
            foreach ($list as $art) { ?>
                <div class="shop-items">
                    <strong class="shop-item-title"> <?php echo $art['nom'] ?> </strong>
                    <strong class="shop-item-title"> <?php echo $art['nationalite'] ?> </strong>
                    <strong class="shop-item-title"> <?php echo $art['genre'] ?> </strong>
                    <strong class="shop-item-title"> <?php echo $art['age'] ?> </strong>
                    <strong class="shop-item-title"> <?php echo $art['description'] ?> </strong>    
                </div>
                    <?php } ?>
            
        </div>  
    </section>
    <?php 
 }
 ?>
 </body>
 </html>