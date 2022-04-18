<?php  

include_once "C:/xampp/htdocs/Artistes/config.php";  

	//$cate=new categorieC();
	//$listeCategorie=$adherentC->afficherCategorie(); 

	function getCategorie(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
            "SELECT * FROM categories "
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
        }
}

$LitesCategorie=getCategorie();



	function getArtistes(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
            "SELECT * FROM artistes "
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
        }
}

$LitesArtistes=getArtistes();


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="backendCSS.css">


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
								<h3>DataTables</h3>
							</div>
							<div class="module-body table">	
								<h3>Table des Artistes</h3>
								<div class="dropdown" style="float:left;">
									<button class="dropbtn" >Trier</button>
									<div class="dropdown-content" style="left:0;">
									 
									</div>
								  </div>
								  
							<a href="AddCategorie.php"><button style="right: 100px;" class="regButton">Ajouter</button></a>

							<br><br><br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th> ID artiste</th>
											<th>Nom</th>
											<th>Nationalité</th>
											<th>Genre</th>
											<th>Age</th>
											<th>description</th>
											<th>Modifier</th>
											<th>Supprimer</th>
											
<hr>
											<!--<th colspan="2">	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
												<input style="height: 42px;" type="text" placeholder="Search.." name="search2">
												<button  type="submit"><i class="fa fa-search"></i></button>
											  </form></th>-->
										</tr>
									</thead>

									<tbody>
<?php  
										foreach($LitesArtistes as $Artis){


										?>
										
										<tr class="odd gradeX">
											
											
<td> </td>

											<td><?php echo $Artis['ID_artistes']; ?></td>
											<td><?php echo $Artis['nom']; ?> </td>
											<td><?php echo $Artis['nationalite']; ?></td>
											<td ><?php echo $Artis['genre']; ?></td>
											<td><?php echo $Artis['age']; ?></td>
											<td><?php echo $Artis['description']; ?></td>
											<td><button >Modifier</button></td>
											<td><button >Supprimer</button></td>
							                

										     	
										</tr>

										<?php }  ?>

										
									
								</table>
							</div>
							
							

			<div class="module-body table">	
				<h3>Table Catégories Artistes</h3>
				<div class="dropdown" style="float:left;">
					<button class="dropbtn" >Trier</button>
					<div class="dropdown-content" style="left:0;">
					  
					  
					</div>
				  </div>
				  
			<a href="AddCategorie.php"><button style="right: 100px;" class="regButton">Ajouter</button></a>

			<br><br><br>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
					<thead>
						<tr>
							<th>Categories ID</th>
							<th>Nom</th>
							<th>Description</th>
							<th>Nombres d'artistes</th>
							<th>Modifier</th>
							<th>Supprimer</th>
							
							<!--<th colspan="2">	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
								<input style="height: 42px;" type="text" placeholder="Search.." name="search">
								<button  type="submit"><i class="fa fa-search"></i></button>
							  </form></th>-->
						</tr>
					</thead>
					<tbody>
                                      <?php  
										foreach($LitesCategorie as $Cater){


										?>

						<tr class="odd gradeX">
							<td> <?php echo $Cater['ID']; ?></td>
							<td> <?php echo $Cater['nom']; ?></td>
							<td> <?php echo $Cater['description']; ?></td>
							<td> <?php echo $Cater['nombres_artiste']; ?></td>
							<td><a href="ModifierCategorie.php?ID=<?php echo $Cater['ID']; ?>"><button >Modifier</button></a></td> 
							<td><a href="suppCategorie.php?ID=<?php echo $Cater['ID']; ?>"><button >Supprimer</button></a></td>
							

						</tr>
							<?php }  ?>

						
					
				</table>
			</div>					
			<br><br><br>
			
						
						
					</tr>
					
				
			</table>
		</div>	
		</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2022 TheGlobe - Alliance</b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- <script src="scripts/datatables/jquery.dataTables.js"></script> -->
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>

</html>