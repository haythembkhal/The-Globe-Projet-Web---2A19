

	<?php //if($showcookie) { ?>
<!--<div class="cookie-alert">
   En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<br /><a href="php/accept_cookie.php">OK</a>
</div>-->
<?php //} ?>



<?php

//include_once "C:/xampp/htdocs/Artistes/config.php";
include_once "../../Controller/ArtisteC.php";

$control= new ArtisteC();


 
 function getNameCategorie($num){
    $db = config::getconnexion();

    try {
        $query = $db->query(
            "SELECT nom FROM categories where ID=$num"
        );
        return $query->fetch();

    } catch (PDOException $e) {
        $e->getMessage();
        }
}

function getArtistes(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
            "SELECT * FROM artistes"
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
        }
}

function countArtist(){

    $db = config::getConnexion();
    
    $Query = "SELECT count(*) AS nb FROM artistes ";
    
    try {
        $res = $db->query($Query);
        $data = $res->fetch();
        $nb = $data['nb'];
        return $nb;
            
    } catch (PDOException $e) {
            $e->getMessage();
    }
    
}



$LitesArtistes=getArtistes();
//$art=$LitesArtistes->getArtistes();


if(isset($_GET['search'])) {
      if(!empty($_GET['search'])){
      //$search = htmlspecialchars($_GET['search']);
      $search = $_GET['search'];
	  $LitesArtistes= $control->rechercherartist($search);
      //$art=$LitesArtistes->rechercherartist($search);
  }
}



?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Afficher Artistes</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="about.php">About</a>
						</li>
						
						<li class="nav-item active ">
							<a class="nav-link" href="artistes.php">Artistes</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="Boutique.php">Boutique</a>
						</li>
						
					</ul>
					<div><form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="" method="GET" name="FormRechercher">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                    name="search"
                    id="search"
                  />
                  <button type="submit" class="btn btn-primary mr-2">
                        Rechercher
                      </button>
                </form>
</div>

					<!--/search-right-->
					<!--/search-right-->
					<!--<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search Artist <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						search popup -->
						<!--<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="GET" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
				
							</div>
							<a class="close" href="#close">×</a>
						</div>-->
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
	<!-- main-slider -->


	<!-- //mid-slider-->
	<!--/tabs-->
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">

									<?php  
										foreach($LitesArtistes as $Artis){


										?>


									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#">

													<img src="assets/images/<?php echo $Artis['image']; ?>" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message"> <!--Categories-->
												<p> <?php $test=getNameCategorie($Artis['categories']); echo $test['nom']; ?> </p>


												<a class="author-book-title" href="#"><?php echo $Artis['nom']; ?></a>


												<h4> <span class="post"> <?php echo $Artis['nationalite']; ?></span>

													<a href="#"><span class="post fa fa-heart text-right"> <?php echo $Artis['likess']; ?></span></a>

													<p> Age:<?php echo $Artis['age']; ?> ans</p>
													
												</h4>

												<br>

												<div class="message"> <h5>
													<p> Genre:<?php echo $Artis['genre']; ?></p>
													
												</h5>
												</div>
											</div>
											 <!-- <form name="likes"  method="POST" action="">
                                   <input type="hidden" name="varname" value="'.$row['name'].'" >
                                   <p> -->
									<a href="../../Controller/likes.php?id=<?php echo $Artis['id']; ?>">
                                   	 <button value="" class="btn btn-primary mr-2" style="width:75%;height:45px;display:inline"onmouseover=" this.style.color=')">Like
                                   	 </button>
                                   	</a>
                                   	 <!-- </p>
                                    
                                    </form> -->
										</div>

 <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
   <!-- <link rel="stylesheet" href="./style.css" />-->
    
	
    <script src="assets/js/index.js" defer></script>

									</div>
									<?php }  ?>

									<!--//set3-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<section>
	<div class="w3l-ab-grids py-5">
		<div class="container py-lg-4">
			
			<div class="w3l-counter-stats-info text-center">
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">65</p>
							<h4>Prestaions</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">165</p>
							<h4>Spectacles</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter"><?php $nb=countArtist(); echo $nb; ?></p>
							<h4>Artistes
							</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">5063</p>
							<h4>Year of Use</h4>

						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- //tabs-->
	<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-about">
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.php"><img class="img-fluid" src="assets/images/banner1.jpg"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.php"><img class="img-fluid" src="assets/images/banner2.jpg"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.php"><img class="img-fluid" src="assets/images/banner3.jpg"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.php"><img class="img-fluid" src="assets/images/banner4.jpg"
											alt=""></a>
								</div>
							</div>
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Movies</h6>
									<ul>
										<li><a href="#">Movies</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">English Movies</a></li>
										<li><a href="#">Tailor</a></li>
										<li><a href="#">Upcoming Movies</a></li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index.php">Home</a> </li>
										<li><a href="about.php">About</a> </li>
										<li><a href="#">Tv Series</a> </li>
										<li><a href="#">Blogs</a> </li>
										<li><a href="#">Login</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li><a href="genre.php">Asia</a></li>
										<li><a href="genre.php">France</a></li>
										<li><a href="genre.php">Taiwan</a></li>
										<li><a href="genre.php">United States</a></li>
										<li><a href="genre.php">Korea</a></li>
										<li><a href="genre.php">United Kingdom</a></li>
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
							<p>&copy; 2020 ProShowz. All rights reserved | Designed by <a
									href="https://w3layouts.com">W3layouts</a></p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
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
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
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
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 40,
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
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					margin: 20,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
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