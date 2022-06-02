
<?php
    include_once '../../Controller/ReservationC.php';
	include_once '../../Controller/AchatC.php';
	$AchatC = new AchatC();

    $error = "";
    $Achat = NULL;

    $ReservationC = new ReservationC();
    $listeReservations = $ReservationC->afficherReservation();

    $error = "";
    $Reservation = NULL;
    $ReservationA = new ReservationC();
    if(
        isset($_POST["idAchat"])&&
        isset($_POST["numSiege"])
    ){
        if (
            !empty($_POST["idAchat"])&&
            !empty($_POST["numSiege"])
        ){
            $Reservation = new Reservation(
                NULL,
                $_POST['idAchat'],
                $_POST['numSiege']
            );
            $ReservationA->ajouterReservation($Reservation);
            header('Location:index.php');
        }
        else
            $error = "Missing information";
    }
?>



<!DOCTYPE html>
<html lang="fr">
<style>
	html{
    scroll-behavior: smooth;
}
	h1{
		color:black;

	}

#infoPerso{
	justify-content: center;
    align-items: center;
}
input{
	width: 100%;
	padding: 12px 20px;
	color:black;
	border: none;
	border-bottom: 2px solid #ffc107;
	border-radius: 4px;
  
}

input[type=submit] {
  	padding: 10px 35px;
    background-color: #4CAF50;
    border: 1px solid white;
    color: white;
    outline: none;
    transition: .6s ease;

}

input[type=submit]:hover {
	background-color: #45a049;
	color: black;
	cursor: pointer;
}

input[type=reset] {
  	padding: 10px 35px;
    background-color: #EF0107;
    border: 1px solid white;
    color: white;
    outline: none;
    transition: .6s ease;

}

input[type=reset]:hover {
	background-color: #E62020;
	color: black;
	cursor: pointer;
}

div {
	border-radius: 5px;
	margin: 8px 200px;
	background-color: white;
	padding: 8px;
}

section {
	background-color: #ffc107;
}

label {
	color: black;

}

</style>
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
	
	<!-- //header -->
	<!-- main-slider -->
	<section id="infoPerso">
		<div class="module-head">
            <center><h1>ACHTEZ VOS PLACES ! </h1></center>
        </div> 
        <div id="error">
                        <?php echo $error; ?>
                    </div>
                    <?php
                            if (isset($_POST['idAchat'])){
                                $Achat = $AchatC->recupererAchat($_POST['idAchat']);
                            }
                    ?>
		<!--<div>
		<table>
			<tr>
				<th><label for="basicinput">ID Client</label></th>
				<th>ID Spectacle</th>
				<th>Nombres de Places</th>
				<th>Prix Total</th>
				<th>Date Achat</th>
			</tr>

			<tr>
				<td>
			</tr>
		</table>
		</div>-->
        <div>
            <form name="formReserver" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
            <br>
            <br>
            <div class="control-group">
				<label class="control-label" for="basicinput">ID Achat</label>
                <input class="controls" type="text" id="idAchat" class="span8" name="idAchat" <!--value="<?php echo $Achat['idAchat']; ?>" readonly-->>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Numéro Siège</label>
                <input type="text" id="numSiege" placeholder="Veuillez choisir un numéro de siège" class="span8" name="numSiege">
                <p> <span class="error" id="errornumSiege" style="color:red"></span></p>
            </div>

            <br>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn" id="btnReserver" value="Reserver">
                    <input type="reset" class="btn" id="btnAnnuler" value="Annuler">
                    <!--<form method="POST" action="Modifier_AchatsReservations.php">
                           <input type="submit" class="btn" id="btnM" value="Modifier"></button>
                        </form>-->
                </div>
            </div>
        </form>
        <script>
           	function validateForm()
            {
            var numSiege= document.forms["formReserver"]["numSiege"].value;

			if(numSiege == "")
            {
                document.getElementById('errornumSiege').innerHTML="Veuillez choisir un Numéro de Siège";  
                return false;
            }else if(numSiege == 0)
            {
                document.getElementById('errornumSiege').innerHTML="Veuillez saisir une valeur > 0";  
                return false;
            }
			else
			{
                document.getElementById('errornumSiege').innerHTML="";  
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