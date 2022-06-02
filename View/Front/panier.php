<?php
include_once '../../Controller/panierC.php';
session_start();
$pannier = new PanierC();
$prix_produit="";
$nom_produit="";
$image_produit="";
$listeProdut="";
$total=0;
    if (isset($_POST['pannier'])) {
        if (!empty($_POST['pannier'])) 
		{
			
			
			$id_produit=$_POST["pannier"];
			$produit=$pannier->rechercherProduit($id_produit);
			foreach ($produit as $prod)
			{
				$prix_produit=$prod["prix_produit"];
				$nom_produit=$prod["nom_produit"];
				$image_produit=$prod["image_produit"];
				
			}
			$Newpanier=new Panier($nom_produit,$image_produit,$prix_produit,$_SESSION["id_client"]);
			
			
			$pannier->ajouterPannier($Newpanier);
			
	
									
		}
		else
		{
			
		}
					
	}
	else
	{
					
	}


		
			

	if (isset($_POST['commander'])) {
        
			$pannier->supprimerPannier($_SESSION["id_client"]);
		

	}		
		
			
	$listeProduit=$pannier->afficherPannier($_SESSION["id_client"]);	

foreach ($listeProduit as $pro)
{
$total+=$pro["prix"];
}	
       
    

?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Globe| About</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
		<!-- header -->
		<header id="site-header" class="w3l-header fixed-top" >
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
				<div class="container">
					<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index_with_profil.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.php">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<!-- <span class="navbar-toggler-icon"></span> -->
						<span class="fa icon-expand fa-bars"></span>
						<span class="fa icon-close fa-times"></span>
					</button>
	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index_with_profil.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about_profile.php">About</a>
							</li>
		
							
							<li class="nav-item active show-title">
								<a class="nav-link" href="Boutique_profil.php">Boutique</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="contact_profil.php">Contact</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="my_profile.php">My profile</a> <!--add by me for add login-->
						</li>
						</ul>
	
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
										<ul class="search-items">
											<li><a href="genre.php">Action</a></li>
											<li><a href="genre.php">Drama</a></li>
											<li><a href="genre.php">Family</a></li>
											<li><a href="genre.php">Thriller</a></li>
											<li><a href="genre.php">Commedy</a></li>
											<li><a href="genre.php">Romantic</a></li>
											<li><a href="genre.php">Tv-Series</a></li>
											<li><a href="genre.php">Horror</a></li>
											<li><a href="genre.php">Action</a></li>
											<li><a href="genre.php">Drama</a></li>
											<li><a href="genre.php">Family</a></li>
											<li><a href="genre.php">Thriller</a></li>
											<li><a href="genre.php">Commedy</a></li>
											<li><a href="genre.php">Romantic</a></li>
											<li><a href="genre.php">Tv-Series</a></li>
											<li><a href="genre.php">Horror</a></li>
										</ul>
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
			<!--//nav-->
		</header>
		<!-- //header -->
	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="http://localhost/Alliance/View/Front/Boutique_profil.php#popSection">Boutique</a>>>Panier</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
	<!-- /about-->
	
		<!--grids-sec1-->
		<section class="w3l-team" id="team">
			<div class="grids-main py-5">
				<div class="container py-lg-4">
					<div class="headerhny-title">
						<h3 class="hny-title" id="artiste">My Products</h3>
					</div>
					<section class="w3l-grids" id="projects2">
							<div class="grids-main py-5">
							<div class="container py-lg-4">
								<div class="w3l-populohny-grids">
									
									
									<?php foreach($listeProduit as $produit) { ?>
									
									<div class="item vhny-grid">
									<div class="box16 mb-0">
									<a href="#">
									<figure>
									<img class="img-fluid" src="<?php echo $produit['image'];?>" alt="">
									<center>
										<a class="author-book-title">
											
											
										</a>
										</center>	
									</figure>
									
									
										</a>
									</div>
									<strong><?php echo $produit['nom']; ?></h6></strong>
									<h6 class="post text-right"><span class="fa"></span><?php echo $produit['prix']; ?> DT</h6>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				<h3 style="color:yellow;">TOTAL: <strong ><?php echo $total;?> DT</strong></h3>
	
		            <div class="ready-more mt-4">
					<form action="" method="POST">
					<input type="hidden" name="commander">
						<center><button type="submit" class="btn read-button">Commander<span class="fa fa-angle-double-right ml-2" aria-hidden="true"></span></button></center><br>
						</form>
						<center><a href="Boutique_profil.php" class="btn read-button">Continuer mes Achats<span class="fa fa-angle-double-right ml-2" aria-hidden="true"></span></a></center>
					</div>
	
			</div>
		</section>
		<!--//grids-sec1-->
		<!--/testimonials-->

<!--//testimonials-->
		<!--grids-sec2-->
		
		<!--grids-sec2-->
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
										<li><a href="index_with_profil.php">Spectacles</a></li>
										<li><a href="index_with_profil.php">Cinemas</a></li>
										<li><a href="index_with_profil.php">Comédies</a></li>
										<li><a href="index_with_profil.php">Theatres</a></li>
										<li><a href="index_with_profil.php">Festivals</a></li>
										<li><a href="contact_profil.php">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index_with_profil.php">Home</a> </li>
										<li><a href="about_profile.php">About</a> </li>		
										<li><a href="Boutique_profil.php">Boutique</a> </li>
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
	<!--//footer-66 -->
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
