<?php

include_once '../../Model/Produit.php';
include_once '../../Model/Categorie.php';
include_once '../../Controller/ProduitCRUD.php';
include_once '../../Controller/CategorieCRUD.php';

$ProduitCRUD = new ProduitCRUD();
$listeproduit=$ProduitCRUD->AfficherProduit();
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
		$listeproduit2 = $ProduitCRUD->TriePrixASC();
	}
	else
	{
		$listeproduit2 = $ProduitCRUD->TriePrixDESC();
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
	<title>The Globe</title>
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
</head>

<body>
	<header id="site-header" class="w3l-header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1>
					<a class="navbar-brand" href="#Boutique.html">
						<img src="assets/images/petit logo.png" alt="Your logo" title="Your logo"
							style="height: 50px;;" />
					</a>
				</h1>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link show-title" href="Boutique.html">Boutique</a>
						</li>
					</ul>
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
				<div class="headerhny-title">
					<center><h1 class="hny-title">Nos Produits</h1></center>
					<br>
				</div>
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
									<span class="post text-right"><span class="fa"></span><?php echo $produit['prix_produit']; ?> DT</span>
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
							<a href="#projects" class="btn-center view-button"> Voir tout <span aria-hidden="true" ></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="headerhny-title">
				<center><h1 class="hny-title">Nos Catégories<h1><center>
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
			<div id="projects2">
				<table class="table table-bordered">
					<tr>
					</tr>
					<tr>
						<?php foreach($listeproduit2 as $produit): ?>
						<td>
							<div class="message">
								<h6>
									<?php echo $produit['nom_cat'];?>
								</h6>
								<a class="author-book-title">
									<?php echo $produit['nom_produit']; ?>
								</a>
							</div>
							<img  class="img-fluid rounded team-image" src="<?php echo $produit['image_produit'];?>" class="img-fluid" alt="author image">
							<h4>
								<span class="post">
									<span class="fa"> </span>
									<?php echo $produit['prix_produit']; ?> DT
								</span>
								<span class="post fa fa-heart text-right">
								</span>
							</h4>
						</td>
						<?php endforeach; ?>
					</tr>
					<tr>
					</tr>
				</table>
			</div>
		</div>
	</section>

	<div class="below-section">
		<div class="container">
			<div class="copyright-footer">
				<div class="columns text-lg-left">
					<p>&copy; 2022 the globe All rights reserved </p>
					<p>  </p>
				</div>
			</div>
		</div>
	</div>

	
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
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding: 280,
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
					stagePadding: 40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding: 60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding: 80,
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
<!-- //script -->
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
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
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
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
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
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

</body>

</html>