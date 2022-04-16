
<?php
    include_once '../../Controller/AchatC.php';
    $AchatC = new AchatC();
    $listeAchats = $AchatC->afficherAchat();

    $error = "";
    $Achat = NULL;
    $AchatA = new AchatC();
    if(
        isset($_POST["idClient"])&&
        isset($_POST["idSpectacle"])&&
        isset($_POST["prixTotal"])&&
        isset($_POST["dateAchat"])&&
        isset($_POST["adresseEmail"])&&
        isset($_POST["nbrePlaces"])
    ){
        if (
            !empty($_POST["idClient"])&&
            !empty($_POST["idSpectacle"])&&
            !empty($_POST["prixTotal"])&&
            !empty($_POST["dateAchat"])&&
            !empty($_POST["adresseEmail"])&&
            !empty($_POST["nbrePlaces"])
        ){
            $Achat = new Achat(
                NULL,
                $_POST['idClient'],
                $_POST['idSpectacle'],
                $_POST['prixTotal'],
                $_POST['dateAchat'],
                $_POST['adresseEmail'],
                $_POST['nbrePlaces']
            );
            $AchatA->ajouterAchat($Achat);
        }
        else
            $error = "Missing information";
    }
?>
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
	<section id="Achter">
		<div class="module-head">
            <h3>Ajouter Achat</h3>
        </div> 
        <div>
            <form name="formAchat" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
            <br>
            <div class="module-head">
                <h3>Achat :</h3>
            </div>
            <br>
            <div class="control-group">
                <label class="control-label" for="basicinput">ID Client</label>
            	<div class="controls">
                    <input type="text" id="idClient" placeholder="Veuillez saisir l'ID Client" class="span8" name="idClient">
                        <p> <span class="error" id="erroridC" style="color:red"></span></p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">ID Spectacle</label>
                <div class="controls">
                	<input type="text" id="idSpectacle" placeholder="Veuillez saisir l'ID Spectacle" class="span8" name="idSpectacle">
                    <p> <span class="error" id="erroridS" style="color:red"></span></p>
                </div>
            </div>

			<div class="control-group">
                <label class="control-label" for="basicinput">Prix Total</label>
                <div class="controls">
                    <div class="input-append">
                    	<input type="number" id="prixTotal" placeholder="0.000" class="span8" min="0" name="prixTotal"><span class="add-on">DT</span>
                    	<p> <span class="error" id="errorP" style="color:red"></span></p>
                    </div>
                 </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Date Achat</label>
                <div class="controls">
                    <input type="date" id="dateAchat" class="span8" name="dateAchat">
                    <p> <span class="error" id="errorDA" style="color:red"></span></p>
                </div>
            </div>
			
			<div class="control-group">
                <label class="control-label" for="basicinput">Adresse Email</label>
                <div class="controls">
                    <input type="email" id="adresseEmail" placeholder="abc123@exemple.com" class="span8" name="adresseEmail">
                    <p> <span class="error" id="errorAE" style="color:red"></span></p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Nombre Places</label>
                <div class="controls">
                    <input type="number" id="nbrePlaces" step="1"  placeholder="0" class="span8" name="nbrePlaces">
                    <p> <span class="error" id="errorNP" style="color:red"></span></p>
                </div>
            </div>

            <br>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn-success" id="btnAcheter" value="Acheter">
                    <input type="reset" class="btn-warning" id="btnAnnuler" value="Annuler">
                    <!--<form method="POST" action="Modifier_AchatsReservations.php">
                           <input type="submit" class="btn" id="btnM" value="Modifier"></button>
                        </form>-->
                </div>
            </div>
        </form>
        <script>
           	function validateForm()
            {
            var idAchaat= document.forms["formAchat"]["idAchat"].value;
            var idClient= document.forms["formAchat"]["idClient"].value;
            var idSpectacle= document.forms["formAchat"]["idSpectacle"].value;
            var prixTotal= document.forms["formAchat"]["prixTotal"].value;
            var dateAchat= document.forms["formAchat"]["dateAchat"].value;
            var adresseEmail= document.forms["formAchat"]["adresseEmail"].value;
            var nbrePlaces= document.forms["formAchat"]["nbrePlaces"].value;

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January = 0
            var yyyy = today.getFullYear();
                                            

            if(idAchat == "")
            {
            	document.getElementById('erroridA').innerHTML="le champ ID Achat ne peut pas être vide";  
                return false;
            }

            if(idClient == 0)
            {
                document.getElementById('erroridA').innerHTML="Veuillez choisir une valeur > 0";  
                return false;
        	}

            if(idClient == "")
            {
                document.getElementById('erroridC').innerHTML="le champ ID Client ne peut pas être vide";  
                return false;
        	}

            if(idClient == 0)
            {
                document.getElementById('erroridC').innerHTML="Veuillez choisir une valeur > 0";  
                return false;
            }

            if(idSpectacle == "")
            {
                document.getElementById('erroridS').innerHTML="le champ ID Spectacle ne peut pas être vide";  
           	    return false;
            }

            if(idSpectacle == 0)
            {
                document.getElementById('erroridS').innerHTML="Veuillez choisir une valeur > 0";  
                return false;
            }

            if(prixTotal == 0)
            {
                document.getElementById('errorP').innerHTML="Le champ Prix Total ne peut pas être vide";  
                return false;
            }

            if(dateAchat == "")
            {
                document.getElementById('errorDA').innerHTML="Veuillez choisir une date";  
                return false;
            }

            if(dateAchat>today)
            {
                document.getElementById('errorDA').innerHTML="La date d'achat doit être < à la date d'aujourd'hui";  
                return false;
            }

            if(adresseEmail == "")
            {
                document.getElementById('errorAE').innerHTML="Veuillez saisir votre Adresse Email";  
                return false;
            }

            function checkEmail(email) 
            {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
           	}

            if(!checkEmail(adresseEmail))
            {
                document.getElementById('errorAE').innerHTML="l'adresse mail doit correspondre au format : abc123@exemple.com";  
                return false;
            }

            if(nbrePlaces == "")
            {
                document.getElementById('errorNP').innerHTML="Veuillez choisir un Nombre de Places";  
           	    return false;
           	}

            if(nbrePlaces == 0)
           	{
                document.getElementById('errorNP').innerHTML="Le nombre de places doit être > 0";  
                return false;
            }

        }
    	</script>
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