
<?php
    include_once '../../Controller/AchatC.php';
	require_once('fpdf.php');

	/********************************** PDF ********************************/
	class PDF extends FPDF
    {
        function header()
        {
            //logo
            $this->Image('../../View/front_office/assets/images/petit logo.png');
            //font
            $this->SetFont('Helvetica', 'B', 20);
            //emplacement
            $this->Cell(80);
            //titre
            $this->Cell(30, 10, 'FACTURE');
            //$this>Ln(20);

        }

        function footer()
        {
            //position at 1.5cm from bottom
            $this->SetY(-15);
            $this->SetFont('Helvetica', 'I', 8);
            //page number
            $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');


        }
    }
	
    $AchatC = new AchatC();

    $error = "";
    $Achat = NULL;
    $AchatA = new AchatC();
    if(
        
        
        isset($_POST["prixTotal"])&&
        isset($_POST["dateAchat"])&&
        isset($_POST["adresseEmail"])&&
        isset($_POST["nbrePlaces"])
    ){
        if (
           
            !empty($_POST["prixTotal"])&&
            !empty($_POST["dateAchat"])&&
            !empty($_POST["adresseEmail"])&&
            !empty($_POST["nbrePlaces"])
        ){
            $Achat = new Achat(
                NULL,
                2,
                3,
                $_POST['prixTotal'],
                $_POST['dateAchat'],
                $_POST['adresseEmail'],
                $_POST['nbrePlaces']
            );
            $AchatA->ajouterAchat($Achat);
			/********************************** PDF ********************************/
			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont('Helvetica', '', 12);
			$pdf->Cell(0, 10, '', 0, 1);
			$pdf->Cell(0, 10, '', 0, 1);
			$pdf->Cell(0, 10, '', 0, 1);
			$pdf->Cell(0, 10, 'Identifiant Spectacle : '. $Achat->get_idSpectacle() , 0, 1);
			$pdf->Cell(0, 10, 'Identifiant Client : '.$Achat->get_idClient(), 0, 1);
			$pdf->Cell(0, 10, 'Prix Total : '. $Achat->get_prixTotal() , 0, 1);
			$pdf->Cell(0, 10, 'Date Achat : '.$Achat->get_dateAchat(), 0, 1);
			$pdf->Cell(0, 10, 'Adresse Email : '.$Achat->get_adresseEmail(), 0, 1);
			$pdf->Cell(0, 10, 'Nombre de Places : '.$Achat->get_nbrePlaces(), 0, 1);
			$pdf->output("./facture.pdf","D");
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
            <form name="formAchat" class="form-horizontal row-fluid" onsubmit="return validateForm()" action="" method="POST">
            <br>
            <br>
            <div class="control-group">
				<label class="control-label" for="basicinput">ID Client</label>
                <input class="controls" type="text" id="idClient" placeholder="2" class="span8" name="idClient" disabled>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">ID Spectacle</label>
                <input type="text" id="idSpectacle" placeholder="3" class="span8" name="idSpectacle" disabled>
            </div>

			<div class="control-group">
                <label class="control-label" for="basicinput">Date Achat</label>
                <input class="controls" type="date" id="dateAchat" class="span8" name="dateAchat" readonly>
                <p> <span class="error" id="errorDA" style="color:red"></span></p>
            </div>

			<script>
				document.getElementById("dateAchat").valueAsDate = new Date();
			</script>

			<div class="control-group">
                <label for="basicinput">Nombre Places</label>
                    <input type="number" id="nbrePlaces" step="1"  placeholder="0" class="span8" name="nbrePlaces">
                    <p> <span class="error" id="errorNP" style="color:red"></span></p>
            </div>

			<div class="control-group">
                <label class="control-label" for="basicinput">Prix Total</label>
                <input class="controls" type="number" id="prixTotal" onblur="calculPrixTotal() class="span8" step="0.100" name="prixTotal"><span class="add-on">DT</span>
            </div>
			<script>
				function calculPrixTotal()
				{
					var nbrePlaces= document.getElementById("nbrePlaces").value;
					document.getElementById('prixTotal').innerHTML= parseInt(nbrePlaces);
				}
				
			</script>

			
			<div class="control-group">
                <label class="control-label" for="basicinput">Adresse Email</label>
                <input class="controls" type="email" id="adresseEmail" placeholder="abc123@exemple.com" class="span8" name="adresseEmail">
                <p> <span class="error" id="errorAE" style="color:red"></span></p>
            </div>

            

            <br>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn" id="btnAcheter" value="Acheter">
                    <input type="reset" class="btn" id="btnAnnuler" value="Annuler">
                    <!--<form method="POST" action="Modifier_AchatsReservations.php">
                           <input type="submit" class="btn" id="btnM" value="Modifier"></button>
                        </form>-->
						<!--<a href="Reservation.php"><button class="btn">Réserver</button></a>-->
						<form method="POST" action="Reservation.php">
                                                        <input type="submit" class="btn" name="Réserver" value="Réserver">
                                                        
                        </form>
					</div>

            </div>
        </form>
        <script>
           	function validateForm()
            {
            var adresseEmail= document.forms["formAchat"]["adresseEmail"].value;
            var nbrePlaces= document.forms["formAchat"]["nbrePlaces"].value;

			if(nbrePlaces == "")
            {
                document.getElementById('errorNP').innerHTML="Veuillez choisir un Nombre de Places";  
                return false;
            }else if(nbrePlaces == 0)
            {
                document.getElementById('errorNP').innerHTML="Le nombre de places doit être > 0";  
                return false;
            }
			else
			{
                document.getElementById('errorNP').innerHTML="";  
            }

            if(adresseEmail == "")
            {
                document.getElementById('errorAE').innerHTML="Veuillez saisir votre Adresse Email";  
                return false;
            }else if(!checkEmail(adresseEmail))
            {
                document.getElementById('errorAE').innerHTML="l'adresse mail doit correspondre au format : abc123@exemple.com";  
                return false;
            }
			else 
			{
                document.getElementById('errorAE').innerHTML="";  
            }

            function checkEmail(email) 
            {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
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