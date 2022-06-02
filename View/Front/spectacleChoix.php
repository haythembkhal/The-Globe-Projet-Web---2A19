<?php 
include_once 'C:/xampp/htdocs/Alliance/Controller/spectacleControllerF.php';
include_once 'C:/xampp/htdocs/Alliance/Controller/specStatistique.php';
//include_once '‪C:/xampp/htdocs/Alliance/Controller/ajout_commentaire.php';
include_once 'C:/xampp/htdocs/Alliance/config.php';
// session_start();
error_reporting(E_ALL & ~E_NOTICE);
$db = config::getConnexion();
if($_SESSION["loggedIn"]!=true)
{
	var_dump("essai");
	
	header('location:http://localhost/Alliance/View/Front/sign_in.php');
	exit;
}

				$sql = "SELECT * from spectacles WHERE spectacleId=:id";
	try {
		$query = $db->prepare($sql);
		 $query->execute([
                'id' =>  $_GET['specId']
				
            ]);
		$spectacle = $query->fetch();
		
       
			}
			catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}	
$_SESSION["idSpectacle"]=$_GET['specId'];
$spec=$spectacle['spectacleId'];
$titre=$spectacle["titre"];
$date=$spectacle["dateSpec"];
$duree=$spectacle["duration"];
$adresse=$spectacle["adresse"];
$resto=$spectacle["resto"];
$gare=$spectacle["gare"];
$hotel=$spectacle["hotel"];
$description=$spectacle["description"];
$realisateurs=$spectacle["realisateurs"];
$prix=$spectacle["plan"];
$video=$spectacle["video"];
$carte=$spectacle["carte"];
$imgportrait=$spectacle["imgportrait"];
$imglandscape=$spectacle["imglandscape"];


//mettre vus dans la base
try
{
	$query= config::$pdo->prepare("INSERT INTO vu (idSpec,vu) VALUES (:specId,1)");
	$query->bindParam(':specId', $spectacle['spectacleId']);
	$query->execute();


	$query= config::$pdo->prepare("SELECT COUNT(*) from vu where idSpec=:idSpec");
	$query->bindParam(':idSpec', $spec);
	$query->execute();
   $list=$query->fetch(); 
}
catch(PDOException $e){
echo $e->getMessage();
}


?> 

<!Doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Globe | Spectacles
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link rel="stylesheet" href="SpectacleCSS.css">
	<!-- Template CSS -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
    <!-- <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	Template CSS -->

    <!-- I MAY NEED THE ABOvE STYLE -->

<script>	
function afficherRes() {
	var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
	if(document.getElementById("spectacleDate").innerText < today)
	{
    	document.getElementById("spectacleReservation").setAttribute("style","pointer-events: none;");
		document.getElementById("spectacleReservation").innerHTML="Date Dépassée";
	}
}
	</script>

<script>


function ctrlComment(event)
{
    // CONTROL DE SAISIE COMMENTAIRE
var comment=document.getElementById("comment").value;
// return false;
if(comment=="")
{
	commmentControl.innerHTML="Il faut saisir des données";
	return false;
}

}
</script>

</head>

<body onload=afficherRes(); style="overflow-x: hidden;">

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index_with_profil.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
				 <!-- if logo is image enable this    -->
						<!-- <a class="navbar-brand" href="#index_with_profil.html"> -->
							<!-- <img src="C:\Users\hayth\Desktop\Projet Web Module Spectacle\assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:45px;" /> -->
						<!-- </a>  -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="http://localhost/Alliance/View/Front/index_with_profil.php">Home</a>
						</li>
						<li class="nav-item" >
							<a class="nav-link" href="about_profile.php">About</a>
						</li>
						
							
							<li class="nav-item">
								<a class="nav-link" href="Boutique_profil.php">Boutique</a>
							</li>

						<li class="nav-item">
							<a class="nav-link" href="contact_profil.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="my_profile.php">My Profile</a> <!--add by me for add login-->
						</li>
					</ul>


				</div>

                		<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>


				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
	</header>

	<!-- //header -->
   
    <div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="http://localhost/Alliance/View/Front/index_with_profil.php#popSection">Spectacles</a> » Informations</span>
			</div>
		</nav>
	</div>
	<!--/tabs-->
	
	<section id="rightAllignement">
    <section>
        <!-- I NEED TO CENTER ALL OF THIS -->
        <div>
            <img id="spectacleImage"  src="<?php echo $imgportrait; ?>" alt="click to watch video">
            <!-- <span class="fa fa-play video-icon" aria-hidden="true"></span> -->
            <!-- I NEED TO MAKE THESE HYPERLINKS TO OTHER PARTS OF THE WEBPAGE -->
          </div>
          <aside> 
		  <p id="spectacleTitle" class="spectacleInfo spectacleHeader"> <b> <?php echo $titre; ?></b> </p>
			<p id="spectacleTime" class="spectacleInfo "> <ion-icon name="time-outline"></ion-icon> <?php echo $duree; ?></p>
              <p id="spectacleDate" style="color:black;" class="spectacleInfo "> <ion-icon name="calendar-number-outline"></ion-icon><?php echo $date ?></p>
				<p id="spectacleTheatre"style="color:black;" class="spectacleInfo"><ion-icon name="eye-outline"></ion-icon> Nombre de Vus: <?php $var=array_values($list)[0]; echo $var;?> </p>
              <a id="spectacleLocation" style="color:black;"class="spectacleInfo" href="#map"><ion-icon name="map-outline"></ion-icon><?php echo $adresse ?></a> 
              <p id="spectacleVideo" style="color:black;" class="spectacleInfo" href="#videoPopup">  <ion-icon name="ticket-outline"></ion-icon> Prix: <?php echo $prix ?> </p>
              <a id="spectacleComment" style="color:black;" class="spectacleInfo" href="#respond"> <ion-icon name="heart-half-outline"></ion-icon> Cliquer pour evaluer et commenter</a> 
             <form action="http://localhost/Alliance/View/Front/achat_billet.php" method="POST"> 
			  <button id="spectacleReservation"style="color:black;" type="submit" class="spectacleInfo">  <ion-icon name="ticket-outline"></ion-icon> Reserver  <ion-icon name="ticket-outline"></ion-icon> </button>
			  </form>
          </aside>
    </section>
	<br><br>
    <section>
<hr>
    <div id="paragraphStructure">
        <h1 class="spectacleHeader">
            Description:
        </h1>
            <p> 
			<?php echo $description; ?>
            </p>

			
    </div>
	<aside id="videoPopup">
		<h1 class="spectacleHeader">Petit Avant-Gout..</h1>
		
		<iframe width="500" height="290" src="<?php echo $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		<br>
	</aside>
	
</section>
    <hr>
   <section>
	<div id="paragraphStructure2">
    <h1 class="spectacleHeader">Realisateurs:</h1>
		      <p>
		<?php echo $realisateurs; ?>
        </p>
    </div>
    </section>
<hr>
<section id="map">
   <h1 class="spectacleHeader">Localisation:</h1>
   <br>
  
<iframe src="<?php echo $carte; ?>" id="stay22-widget" width="1100" height="400" frameborder="0"></iframe>
<br>
<h3 class="locationDetails" style="color:#4b4c4d;">Adresse: <?php echo $adresse; ?></h3>
<h5 class="locationDetails" style="color:#4b4c4d;"> Restaurants à Proximité: <?php echo $resto; ?></h5>
<h5 class="locationDetails" style="color:#4b4c4d;">Hotels à Proximité: <?php echo $hotel; ?></h5>
<h5 class="locationDetails" style="color:#4b4c4d;"> Station à Proximité: <?php echo $gare; ?> </h5>

</section>



<section>

    <div id="respond">

    <h3 class="spectacleHeader">Laisser Un Commentaire</h3>
	<br>
	
    <form method="POST" action="http://localhost/Alliance/Controller/ajout_commentaire.php" id="commentform" onsubmit="return ctrlComment(event);">
	<div class="row">
        <div class="col-2"> 		
		<img src="<?php echo $_SESSION["picture"];?>" width="70" class="rounded-circle mt-2"> </div></div>
	<h6><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?></h6>	  
	<p style="color:red;"><?php echo $_SESSION['stat']; ?></p>
      <textarea placeholder="Ecrire ici..." name="C" id="comment" rows="10" tabindex_with_profil="4"></textarea>
	<p id="commmentControl"></p>
	  <!-- <input type="hidden" name="clientId" value="$_SESSION['id_client']"/>   -->
<input type="hidden" name="S" value="<?php echo $spectacle['spectacleId']; ?>"/> <!-- 1 represents spectacle id -->
      <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
      <input id="commentButton" name="envoi" type="submit" value="Envoyer" />
	   <a href="http://localhost/Alliance/View/Front/espaceComment.php?specId=<?php echo $spec; ?>" 
  target="popup" 
  onclick="window.open('http://localhost/Alliance/View/Front/espaceComment.php?specId=<?php echo $spec; ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
  Voir Les Commentaires
</a>

 
    </form>

  </div>

  <aside style="bottom: 260px; left: 800px; position:relative;">
  <img src="<?php echo $imgportrait; ?>" alt="img" style="width:20%;" >


<script src="https://use.fontawesome.com/fe459689b4.js"></script>
<form method="POST">
<button class="btn" name="liked" value="liked"style="width: 40px; float:left; height:40px; color:green; margin:10px;" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
  <?php avisLiked($spec); ?>
<input type="hidden" name="liked" value="liked">
<input type="hidden" name="specIdent" value=<?php echo $spectacle['spectacleId'];?>>
</form>

<form method="POST">
    
  <button class="btn" name="disliked" value="disliked" style="width: 40px; float:left; height:40px; color:red; margin:10px" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>
  <?php avisDisliked($spec); ?>  
  <input type="hidden" name="liked" value="disliked">
<input type="hidden" name="specIdent" value=<?php echo $spectacle['spectacleId'];?>>
</form>
  </aside>

</section>
	</section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!--footer-->
<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							
								
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Spectacles</h6>
									<ul>
										<li><a href="index.php">Spectacles</a></li>
										<li><a href="index.php">Cinemas</a></li>
										<li><a href="index.php">Comédies</a></li>
										<li><a href="index.php">Theatres</a></li>
										<li><a href="index.php">Festivals</a></li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index.php">Home</a> </li>
										<li><a href="about.php">About</a> </li>		
										<li><a href="Boutique.php">Boutique</a> </li>
										<li><a href="sign_in.php">Sign In</a></li>
										<li><a href="login.php">Sign Up</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li>Tunisia</li>
										<li>Cameroon</li>
										<li>Guinea</li>
										<li>United States</li>
										<li>Morocco</li>
										<li>Algeria</li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Newsletter</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Your Email Address" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>Enter your email and receive the latest news, updates and special offers from us.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2020 The Globe. All rights reserved | Designed by Alliance</p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="https://www.facebook.com"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="https://www.Google.com"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
</body>
</html>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<!-- responsive tabs -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/easyResponsiveTabs.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>  
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>


<!-- script for first banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding:280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding:40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding:60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding:80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>




<!-- script for second owlcarousel -->

<script>
	$(document).ready(function () {
		$('.owl-four').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 2,
					nav: true
				}
			}
		})
	})
</script>

<!-- no clue what this does but it looks important  -->
<script src="assets/js/bootstrap.min.js"></script>



<!-- //script -->
<!-- /mid-script -->
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>





