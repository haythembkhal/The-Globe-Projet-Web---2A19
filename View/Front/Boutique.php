<?php

include_once '../../Model/Produit.php';
include_once '../../Model/Categories.php';
include_once '../../Controller/ProduitCRUD.php';
include_once '../../Controller/CategorieCRUD.php';

$ProduitCRUD = new ProduitCRUD();
$listeproduit=$ProduitCRUD->AfficherProduit();
$listeproduit1 = $ProduitCRUD->AfficherProduit();
$listeproduit2 = $ProduitCRUD->AfficherProduit();

$CategorieCRUD = new CategorieCRUD();
$listecategorietype=$CategorieCRUD->AfficherCategorie();

$error = "";

$Produit = null;

$Produits = new ProduitCRUD();

	if (
		isset($_POST['nom_produit']) &&		
		isset($_POST['categorie_produit']) &&
		isset($_POST['quantite_produit']) && 
		isset($_POST['prix_produit']) 
		&&
		isset($_POST['image_produit']) 

	) {
		if (
			!empty($_POST['nom_produit']) &&
			!empty($_POST['categorie_produit']) && 
			!empty($_POST['quantite_produit']) && 
			!empty($_POST['prix_produit'])
			&&
			!empty($_POST['image_produit'])

		) {

			$Produit = new Produit(
				null,
				$_POST['nom_produit'],
				$_POST['categorie_produit'], 
				$_POST['quantite_produit'],
				$_POST['prix_produit'],
				$_POST['image_produit']
			);

			$Produits->AjouterProduit($Produit);
			header('Location:AjouterProduit.php');
		}
		else{
			$error = "Missing information";
		}
}

if(isset($_POST['Trie']))
{  
	$Trier = filter_input(INPUT_POST, 'Trie', FILTER_SANITIZE_STRING);
	if ($Trier == "Prix croissant")
	{
		$listeproduit1 = $ProduitCRUD->TriePrixASC();
	}
	else
	{
		$listeproduit1 = $ProduitCRUD->TriePrixDESC();
	}
}
else{
	$error = "Missing information";
}
	   
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Globe| Boutique</title>
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
</head>

<body>
	<header id="site-header" class="w3l-header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link show-title" href="Boutique.php">Boutique</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="login.php">Sign up</a> <!--add by me for add login-->
						</li>
						<li class="nav-item">
							<a class="nav-link" href="sign_in.php">Sign in</a> <!--add by me for add login-->
						</li>
					</ul>
				</div>
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
	<section class="w3l-albums py-5"></section>

	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="owl-three owl-carousel owl-theme">
				<?php foreach($listeproduit as $produit): ?>
					<div class="item vhny-grid">
						<div class="box16">
							<figure>
								<img class="img-fluid rounded team-image" src="<?php echo $produit['image_produit']; ?>" >
							</figure>
							<div  class="box-content">
								<h4>
									<span> </span>
									<h6 class="post text-right"><span class="fa"></span><?php echo $produit['prix_produit']; ?> DT</h6>
								</h4>
							</div>
						</div>
						<br>
						<center><h6><a><?php echo $produit['nom_cat'];?></a></h6></center>
						<center><h2><a class="title-gd"><?php echo $produit['nom_produit']; ?></a></h2></center>
					</div>	
				<?php endforeach; ?>
				</div>

				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="button-center  text-center mt-3" style="position:relative; left:795px; top:4px;">
							<a href="#projects2" class="btn-center view-button"> Show all <span aria-hidden="true" ></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
		<div class="container py-lg-4">
			<div class="headerhny-title">
				<center><h1 class="hny-title">Our Products<h1><center>
			</div>
			<br>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<br>
				<button type="submit" class="btn-center view-button" for="Trie" >Trier par :</button>
				<select type="range" name="Trie" id="Trie">
					<option selected disabled>choisir...</option>
						<option>Prix croissant</option>
						<option>Prix décroissant</option>
				</select>
			</form>    
		
							
							<section class="w3l-grids" id="projects2">
							<div class="grids-main py-5">
							<div class="container py-lg-4">
								<div class="w3l-populohny-grids">
									
									
									<?php foreach($listeproduit1 as $produit): ?>
									
									<div class="item vhny-grid">
									<div class="box16 mb-0">
									<a href="#">
									<figure>
									<img class="img-fluid" src="<?php echo $produit['image_produit'];?>" alt="">
									<center>
										<a class="author-book-title">
											
											
										</a>
										</center>	
									</figure>
									
									
										</a>
									</div>
									<strong><?php echo $produit['nom_cat']; echo " "; echo $produit['nom_produit']; ?></h6></strong>
									<h6 class="post text-right"><span class="fa"></span><?php echo $produit['prix_produit']; ?> DT</h6>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</section>
				
			
		</div>


	<!-- footer-66 -->
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
							<p>&copy; 2022 The Globe. All rights reserved | Designed by Alliance</p>
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
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-team').owlCarousel({
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
					items:2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items:4,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay:true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 6,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- for tesimonials carousel slider -->
<script>
	$(document).ready(function () {
		$(".owl-clients").owlCarousel({
			loop: true,
			margin:40,
			responsiveClass: true,
			responsive: {
				0: {
					items:1,
					nav: true
				},
				736: {
					items: 2,
					nav: false
				},
				1000: {
					items:3,
					nav: true,
					loop: false
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>