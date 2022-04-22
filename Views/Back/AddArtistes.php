<?php 
include_once "../../Controller/ArtisteC.php";
include_once "../../Controller/CategorieC.php"; 


$cont= new ArtisteC();

if(isset($_POST['nom']) && isset($_POST['nationalite']) && isset($_POST['genre']) && isset($_POST['age']) && isset($_POST['description']) && isset($_POST['categories']))
{
	$nouveauArtiste = new Artiste($_POST['nom'],$_POST['nationalite'],$_POST['genre'],$_POST['age'],$_POST['description'],$_POST['categories']);

	//$nouveauArtiste = new Artiste("test","test","test",$_POST['age'],$_POST['description'],$_POST['categories']);
	$cont->ajouterArtiste($nouveauArtiste);
	header('location:AfficherCategorie.php');
}


/*$categ= new CategorieC();
$class= $categ->afficherCategorie();


if(isset($_POST['nom']))
{
	$nouvelleCategorie = new Categorie($_POST['nom']);
	$class->ajoutercategorie($nouvelleCategorie);
}*/



$list=null;
$categoriesC = new categorieC();
$categori = $categoriesC->afficherCategorie();

if(isset($_POST['categories']))
{
	$list = $categoriesC->afficherArtistesF($_POST['categories']);
    //var_dump($list);
//die;
} 

 ?>


<!DOCTYPE html>
<html lang="en">


<head>

	    <style>
      .error{
        color: green;
      }
    </style>

    <script type="text/javascript" src="controle_saisie.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Tristan Mendes
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="AddCategorie.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#toggletables">
									<i class="menu-icon icon-table"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Tables
								</a><ul id="toggletables" class="collapse unstyled">
									<li>
										<a href="table_utilisateurs.html">
											<i class="menu-icon icon-table"></i>
											Utilisateurs
										</a>
									</li>
									<li>
										<a href="table_conges.html">
											<i class="menu-icon icon-table"></i>
											Congés
										</a>
									</li>
									<li>
										<a href="table_spectacles.html">
											<i class="menu-icon icon-table"></i>
											Spectacles
										</a>
									</li>
									<li>
										<a href="AfficherCategorie.php">
											<i class="menu-icon icon-table"></i>
											Artistes
										</a>
									</li>
									<li>
										<a href="table_billets.html">
											<i class="menu-icon icon-table"></i>
											Billets
										</a>
									</li>
									<li>
										<a href="table_partenaires.html">
											<i class="menu-icon icon-table"></i>
											Partenaires
										</a>
									</li>
								</ul></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->




				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Ajout d'Artiste</h3>
							</div>
							<div class="module-body">

								
									<br />

									<form class="form-horizontal row-fluid" name="AddArtistes" method="post" action="" onsubmit="return Verif()">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nom de l'artiste</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8" name="nom">
												<p id="errorNR" class="error"></p>
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nationalité</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8" name="nationalite">
												<p id="errorPR" class="error"></p>
												
											</div>
										</div>





										
										

									<!--	<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown Button</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Radiobuttons</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>-->

										<!--<div class="control-group">
											<label class="control-label">Inline Radiobuttons</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>-->

										<div class="control-group">
											<label class="control-label">Genre</label>
											<div class="controls">
												<input type="radio" name="genre" id="genre" value="homme" checked><label for="basicinput">homme
							</label>
							<input type="radio" name="genre" id="genre" value="femme"><label for="basicinput">femme
							</label>
											</div>
										</div>

                                            <div class="control-group">
											<label class="control-label" for="basicinput">Age</label>
											<div class="controls">
												<input type="number" min="1" max="100" step="1" id="basicinput"  class="span8" name="age">
												
												
											</div>
										</div>

                                       

										<!--<div class="control-group">
											<label class="control-label">Inline Checkboxes</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>-->

										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
											<textarea class="span8" rows="5" name="description"></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">categories</label>
											<div class="controls">
												<select name="categories">
													<?php foreach ($categori as $key) { ?>
  	 				<option value="<?php $key['ID'] ?>"<?php if(isset($_POST['rechercher']) && $key['ID'] ==$_POST['categories'])
  	 				{
  	 				?>
  	 				 selected 
  	 				<?php } ?>
  	 				>
  	 				<?=$key['nom']?>
  	 			</option>
  	 			<?php } ?>	
												</select>

												
											</div>
										</div>


										<div class="control-group">
											<div class="controls">
												<!-- <input type="submit" class="btn">Ajouter</button> -->
									<input type="submit" class="btn"></input>
					<input type="reset" class="btn" value="Annuler" ></input>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->






	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2022 TheGlobe - Alliance </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>