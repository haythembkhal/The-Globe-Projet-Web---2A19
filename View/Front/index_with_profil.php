<?php 
include '../../Controller/spectacleControllerF.php';
session_start();

$spectacle= new SpectaclesC();
$listespectacle=$spectacle->afficherSpectacle();
//$_SESSION["loggedIn"]=false;
$_SESSION['status']=""; //POUR LES COMMENTAIRES DE HAYTHEM
 $_SESSION["idSpectacle"]="";
 $_SESSION["temoignage"]="";

?>

<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Globe | Home</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<!-- <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet"> -->
	<!-- Template CSS -->
	<script src="../../View/Front/affichage.js">  
</script>
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Alliance/View/Front/index_with_profil.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
					<!-- <h1><a class="navbar-brand" href="index.php"><span class="fa fa-play icon-log"		aria-hidden="true"></span>						ProShowz </a></h1> -->
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
							<li class="nav-item active show-title" >
								<a class="nav-link" href="index_with_profil.php">Home</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="about_profile.php">About</a>
							</li>
		
							
							<li class="nav-item">
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
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
			    <?php foreach($listespectacle as $spec){ ?>
				<div class="item" style="background: url(<?php echo $spec["imglandscape"];?>) no-repeat center;background-size: cover;
  min-height: 500px;
  position: relative;
  z-index: 0;
  display: grid;
  align-items: center;
  border-radius: 6px;
  -webkit-border-radius: 6px;
  -o-border-radius: 6px;
  -ms-border-radius: 6px;
  -moz-border-radius: 6px;">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<h3><?php echo $spec["annonce"];?></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
					
							</div>
						</div>
					</li>
				</div>
				<?php } ?>
				<!--
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<h3>La Tendance Francaise</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<h3> Une Ambiance De Fou</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<h3> Rire Comme Jamais</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
		
							</div>
						</div>
					</li>
				</div>-->
			</div>
		</div>
	</section>
	<!-- //banner-slider-->


<!-- main slider -->
	<section class="w3l-grids">
		<div id="spectaclesSection" class="grids-main py-4">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<h3 class="hny-title">Spectacles</h3><br>
					
					<div class="search-right">
						<a href="#recherche"  title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="recherche" class="pop-overlay">
							<div class="popup">
								<form method="post" class="search-box">
									<input type="search" id="search_box"placeholder="Taper...Des Mots Cléfs..." name="recherche"
										 autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Realisateur Populaire:</h3>
									<ul class="search-items">
										<li><a onclick="first();"id="first">Will Smith</a></li>
										<li><a onclick="second();" id="second">BTS</a></li>
										<li><a onclick="third();" id="third">PNL</a></li>

									</ul>
								</div>
							</div> 
							<a class="close" href="#close">×</a>
							</form>
						</div>
				</div><br>

				<div class="owl-four owl-carousel owl-theme">
				
<?php $spectacle->afficher(); ?>
			
				</div>
			</div>
		</div>
	</section>
<!-- main slider -->

	<!--mid-slider -->
	<section id="popSection" class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Musique</span>
									<h3>PNL Tournée Deux Frères</h3>
									<p>2022 ‧ Musique ‧ 2h 30m</p>
							
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Comedy</span>
									<h3>Will Smith</h3>
									<p>2022 ‧ Comedy ‧ 1h 30m</p>
						
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Family</span>
									<h3>Disney On Ice</h3>
									<p>2022 ‧ Comedy/Family ‧ 3h </p>
							
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //mid-slider-->
	
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
