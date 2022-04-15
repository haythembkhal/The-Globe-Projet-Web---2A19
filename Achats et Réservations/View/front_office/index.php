
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
	<title>The GLOBE</title>
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
				<h1>
						<a class="navbar-brand" href="#index.html">
							<img src="assets/images/petit logo.png" alt="Your logo" title="Your logo" style="height: 50px;;" />
						</a> </h1>

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
							<a class="nav-link" href="#infoPerso">Informations Personnelles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#ResPlace">Réservation Places</a>
						</li>
						<li class="nav-item">
								<a class="nav-link" href="#Acheter">Conclure Achat</a>
						</li>
					</ul>
	</header>
	<!-- //header -->
	<!-- main-slider -->
	<section id="infoPerso">
	<form name="formAchat" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
								<br>
								<div class="module-head">
									<h3>Achat :</h3>
								</div>
								<br>
								<div class="control-group">
									<label class="control-label" for="idAchat">ID Achat</label>
									<div class="controls">
										<input type="text" id="idAchat" placeholder="Veuillez saisir l'ID Achat" class="span8">
                                        <p> <span class="error" id="erroridA" style="color:red"></span></p>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="idClient">ID Client</label>
									<div class="controls">
										<input type="text" id="idClient" placeholder="Veuillez saisir l'ID Client" class="span8">
                                        <p> <span class="error" id="erroridC" style="color:red"></span></p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="idSpectacle">ID Spectacle</label>
									<div class="controls">
										<input type="text" id="idSpectacle" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
                                        <p> <span class="error" id="erroridS" style="color:red"></span></p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="prixTotal">Prix Total</label>
									<div class="controls">
										<div class="input-append">
											<input type="number" id="prixTotal" placeholder="0.000" class="span8"><span class="add-on">DT</span>
                                            <p> <span class="error" id="errorP" style="color:red"></span></p>
										</div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="dateAchat">Date Achat</label>
									<div class="controls">
										<input type="date" id="dateAchat" placeholder="Veuillez saisir l'ID Spectacle" class="span8">
                                        <p> <span class="error" id="errorDA" style="color:red"></span></p>
                                    </div>
								</div>

								<div class="control-group">
									<label class="control-label" for="adresseEmail">Adresse Email</label>
									<div class="controls">
										<input type="email" id="adresseEmail" placeholder="abc123@exemple.com" class="span8">
                                        <p> <span class="error" id="errorAE" style="color:red"></span></p>
                                    </div>
								</div>

								<div class="control-group">
									<label class="control-label" for="nbrePlaces">Nombre Places</label>
									<div class="controls">
										<input type="number" id="nbrePlaces" step="1"  placeholder="0" class="span8">
                                        <p> <span class="error" id="errorNP" style="color:red"></span></p>
                                    </div>
								</div>

								<br>
								<div class="control-group">
									<div class="controls">
										<input type="submit" class="btn" id="btnA" value="Ajouter">
										<button><a href="afficher_AchatsReservations.php">Annuler</a></button>
										<!--<form method="POST" action="Modifier_AchatsReservations.php">
											<input type="submit" class="btn" id="btnM" value="Modifier"></button>

										</form>-->
									</div>

								
								</div>
							</form>
	</section>

	<section id="ResPlace">

	</section>

	<section id="Acheter">
		<div >
			<div>
				<input type="submit" class="btn" id="btnA" value="Ajouter">
				<!--<form method="POST" action="Modifier_AchatsReservations.php">
					<input type="submit" class="btn" id="btnM" value="Modifier"></button>

				</form>-->
			</div>
		</div>
	</section>

	<!-- footer-66 -->
	
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
<!-- script for banner slider-->
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