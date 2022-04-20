<!-- 
<?php 
include_once '../../Controller/FrontOffice/spectacleControllerF.php';
include_once 'C:\xampp\htdocs\Module Spectacle\Controller\BackOffice\specStatistique.php';
include_once '../../Controller/FrontOffice/commentaireMetier.php';
$spec=$_GET['specId'];
$titre=$_GET["titre"];
$date=$_GET["dateSpec"];
$duree=$_GET["duration"];
$adresse=$_GET["adresse"];
$resto=$_GET["resto"];
$gare=$_GET["gare"];
$hotel=$_GET["hotel"];
$description=$_GET["description"];
$realisateurs=$_GET["realisateurs"];
$plan=$_GET["plan"];
$video=$_GET["video"];
$carte=$_GET["carte"];
$imgportrait=$_GET["imgportrait"];
$imglandscape=$_GET["imglandscape"];
?> -->

<!doctype html>
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

</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 ><a style=" font-family: cursive;" class="navbar-brand" href="http://localhost/Module%20Spectacle/View/FrontOffice/accuiel.php">
					<img src="assets\images\petit logo.png " alt="Your logo" title="Your logo" style="height:50px;" style="right:10%;" />
					<!-- <span class="fa fa-play icon-log" aria-hidden="true"></span> -->
					The Globe</a></h1>
				 <!-- if logo is image enable this    -->
						<!-- <a class="navbar-brand" href="#index.html"> -->
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
							<a class="nav-link" href="http://localhost/Module%20Spectacle/View/FrontOffice/accuiel.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
				<li class="nav-item">
								<a class="nav-link" href="genre.html">Genre</a>
							</li>

						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
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
									<ul class="search-items">
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
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
	</header>

	<!-- //header -->
   
    <div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="http://localhost/Module%20Spectacle/View/FrontOffice/accuiel.php#popSection">Spectacles</a> » Informations</span>
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
              <p id="spectacleDate" style="color:black;" class="spectacleInfo "> <ion-icon name="calendar-number-outline"></ion-icon> <?php echo $date ?></p>
				<!-- <a id="spectacleTheatre"style="color:black;" class="spectacleInfo"><ion-icon name="map-outline"></ion-icon> Voir le plan de la salle</a> -->
              <a id="spectacleLocation" style="color:black;"class="spectacleInfo" href="#map"><ion-icon name="map-outline"></ion-icon><?php echo $adresse ?></a> 
              <a id="spectacleVideo" style="color:black;" class="spectacleInfo" href="#videoPopup"> <ion-icon name="videocam-outline"></ion-icon> Regarder Video</a>
              <a id="spectacleComment" style="color:black;" class="spectacleInfo" href="#respond"> <ion-icon name="heart-half-outline"></ion-icon> Cliquer pour evaluer et commenter</a> 
              <a id="spectacleReservation"style="color:black;"  class="spectacleInfo" href="google.com"> <ion-icon name="ticket-outline"></ion-icon> Reserver  <ion-icon name="ticket-outline"></ion-icon> </a>
          </aside>
    </section>
	<br><br>
    <section>
<hr>
    <div id="paragraphStructure">
        <h1 class="spectacleHeader">
            Description
        </h1>
            <p  class="paragraph"> 
			<?php echo $description; ?>
            </p>

			
    </div>
	<aside id="videoPopup">
		<h1 class="spectacleHeader">Petit Avant-Gout</h1>
		<br>
		<iframe width="460" height="315" src="<?php echo $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		<br>
	</aside><br>
	<br><br><br><br><br><br><br><br><br><br><br>
</section>
<br>
    <hr>
   <section>
	<div id="paragraphStructure2">
    <h1 class="spectacleHeader">Realisateurs</h1>
		<br>
        <p class="paragraph">
		<?php echo $realisateurs; ?>
        </p>
    </div>
    </section>
<hr>
<section id="map">
   <h1 class="spectacleHeader">On est ici !!!</h1>
   <br>
  
<iframe src="<?php echo $carte; ?>" id="stay22-widget" width="1100" height="300" frameborder="0"></iframe>
<br>
<p class="locationDetails" style="color:#4b4c4d;">Adresse: <?php echo $adresse; ?></p>
<p class="locationDetails" style="color:#4b4c4d;"> Restaurants à Proximité: <?php echo $resto; ?></p>
<p class="locationDetails" style="color:#4b4c4d;">Hotels à Proximité: <?php echo $hotel; ?></p>
<p class="locationDetails" style="color:#4b4c4d;"> Station à Proximité: <?php echo $gare; ?> </p>

</section>



<section>

    <div id="respond">

    <h3 class="spectacleHeader">Laisser Un Commentaire</h3>
	<br>
	
    <form method="post" id="commentform">
	<div class="row">
        <div class="col-2"> <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2"> </div></div>
	<h6>Username</h6>	  
	<p style="color:red;"><?php echo $_SESSION['status']; ?></p>
      <textarea placeholder="Ecrire ici..." name="commentaire" id="comment" rows="10" tabindex="4"  required="required"></textarea>
  

	  <!-- <input type="hidden" name="dateCommentaire" value="2022-04-30"/>  use javascript for date -->
<input type="hidden" name="specId" value="<?php echo $_GET['specId']; ?>"/> <!-- 1 represents spectacle id -->
<!-- I need to make a hiiden input for the user id -->
      <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
      <input id="commentButton" name="envoi" type="submit" value="Envoyer" />
  
    </form>

  </div>

  <aside style="bottom: 260px; left: 800px; position:relative;">
<a href="http://localhost/Module%20Spectacle/View/FrontOffice/espaceComment.php?specId=<?php echo $spec; ?>" 
  target="popup" 
  onclick="window.open('http://localhost/Module%20Spectacle/View/FrontOffice/espaceComment.php?specId=<?php echo $spec; ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
  <img src="<?php echo $imgportrait; ?>" alt="img" style="width:20%;" >
</a>

<form method="POST">
<input type="image" name="liked" value="liked" src="assets/images/like.png" alt="Submit" style="width: 40px; float:left; height:40px; background:yellow; margin:10px">
<?php avisLiked(); ?>
<input type="hidden" name="liked" value="liked">
</form>

<form method="POST">
<input type="image" name="disliked" value="disliked" src="assets/images/dislike.png" alt="Submit" style="width: 40px; float:left; height:40px; background:gray; margin:10px">
<?php avisDisliked(); ?>  
<input type="hidden" name="liked" value="disliked">
</form>
  </aside>

</section>
	</section>
	<div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="http://localhost/Module%20Spectacle/View/FrontOffice/accuiel.php">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">The Globe © 2022</p>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


	<!--//footer-66 -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


<script src="assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
