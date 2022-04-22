

<?php

include_once "C:/xampp/htdocs/Artistes/config.php";

$db = config::getconnexion();

function afficherArtistes(){
	 try {
        $query = $db->query(
            "SELECT * FROM artistes"
        );
		$LitesArtistes=$query->fetchAll();

    	} 
    catch (PDOException $e) { 
        $e->getMessage();
        }

	foreach($LitesArtistes as $Artis){?>
	<div class="item vhny-grid">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="<?php echo $Artis['nom'];?>" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column text-center">
									<h3 class="name-pos"><a href="#url"><?php echo $Artis['nom'];?></a></h3>
									
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
										<a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div><?php
					}
}?>
										