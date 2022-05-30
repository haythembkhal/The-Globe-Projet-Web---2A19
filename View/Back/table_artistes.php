<?php  

//include_once "C:/xampp/htdocs/Artistes/config.php";  

include_once "../../Controller/ArtisteC.php";
include_once '../../Controller/notificationC.php';


$notification=new notificationC();
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications

function likeArtiste($idUser,$IdArtist)
{
    $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'INSERT INTO likes (id_user,id_art) 
                VALUES (:id_user,:id_art) '
            );
            $query->execute([
                'id_user' => $idUser,
                'id_art' => $IdArtist
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
}

$control= new ArtisteC();
$cont = new ArtisteC();

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

$LitesCategorie=getCategorie();



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



$LitesArtistes=getArtistes();

if(isset($_GET['search'])) {
      if(!empty($_GET['search'])){
      //$search = htmlspecialchars($_GET['search']);
      
      $search = $_GET['search'];
	  $LitesArtistes= $control->rechercherartist($search);
      //$art=$LitesArtistes->rechercherartist($search);
  }
}


if(isset($_POST['triage']))
{
	if (!empty($_POST['triage'])) {

		//echo "la valeur est vide"; 
		$tri = $_POST['triage'];
          $LitesArtistes= $cont->trierArtist($tri); 
		// code...
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



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Globe| Admin </title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">The Globe</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                    
                            <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    
                                    <li class="divider"></li>
                                    <li><a href="../../Controller/logoutController.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                                <li><a href="message.php"><i class="menu-icon icon-envelope"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.php"><i class="menu-icon icon-bullhorn"></i>Notifications <b class="label orange pull-right">
                                    <?php echo $count;?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                               
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#toggletables">
									<i class="menu-icon icon-table"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Tables
								</a><ul id="toggletables" class="collapse unstyled">
									<li>
										<a href="table_utilisateurs.php">
											<i class="menu-icon icon-table"></i>
											Utilisateurs
										</a>
									</li>
									<li>
										<a href="table_conges.php">
											<i class="menu-icon icon-table"></i>
											Congés
										</a>
									</li>
									<li>
										<a href="table_spectacles.php">
											<i class="menu-icon icon-table"></i>
											Spectacles
										</a>
									</li>
									<li>
										<a href="table_artistes.php">
											<i class="menu-icon icon-table"></i>
											Artistes
										</a>
									</li>
									<li>
										<a href="afficherAchat.php">
											<i class="menu-icon icon-table"></i>
											Billets
										</a>
									</li>
									<li>
										<a href="AjouterProduit.php">
											<i class="menu-icon icon-table"></i>
											Produits
										</a>
									</li>
								</ul></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.php"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.php"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.php"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="../../Controller/logoutController.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>

				 <div class="dropdown">
                    <!-- small box -->
                
                </div>


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<center><h3>Table Artistes</h3></center>
							</div>
							<div class="module-body table">	
								
								
					<form method='POST' action="">
						<div class="dropdown" style="left:0;">
						<input class="dropbtn" type="submit"  name="triage" value="Trier" />
						
					</div>
					<div class="dropdown" style="float:right;">
					
					  
					  <a href="AddArtistes.php"><button style="right: 100px;" class="regButton">Ajouter</button></a>
					
					</div>
					
				  </div>	
				  </form>
				  
				
								  
							
							
							

							
						<form class="navbar-search pull-left input-append" action="" method="GET" name="FormRechercher">
                        <input type="text" class="span3" name="search" id="search">
                        <button class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
						<a href="artistesPdf.php"><button > Imprimer la liste</button></a>
                        </form>
						
						 

								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>IDartiste</th>
											<th>Nom</th>
											<th>Nationalité</th>
											<th>Genre</th>
											<th>Age</th>
											<th>description</th>
											<th>categories</th>
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
							
										<td><?php echo $Artis['id']; ?></td>
										<td><?php echo $Artis['nom']; ?></td>
										<td><?php echo $Artis['nationalite']; ?></td>
									    <td><?php echo $Artis['genre']; ?></td>
										<td><?php echo $Artis['age']; ?></td>
										<td><?php echo $Artis['description']; ?></td>
										<td><?php $test=getNameCategorie($Artis['categories']); echo $test['nom']; ?></td>
										<td><a href="ModifierArtiste.php?id=<?php echo $Artis['id']; ?>"><button class="btn-warning">Modifier</button></a></td>
										<td><a href="suppArtiste.php?id=<?php echo $Artis['id']; ?>"><button onclick="confirmer()" class="btn-danger">Supprimer</button></a></td>
							                

										     	
										</tr>

										<?php }  ?>

										
                                               
								</tbody>	
								</table>
								</div>
							</div>
							
							

			<div class="module-body table">	
				<div class="module-head">
				<center><h3>Categorie Artistes</h3></center>
				</div>
				<div class="module-body table">	
				<div class="dropdown" style="float:left;">
					<button class="dropbtn" >Trier</button>
				
				 </div>
				 
				 <div class="dropdown" style="float:right;">
					
					  
					  <a href="AddCategorie.php"><button style="right: 100px;" class="regButton">Ajouter</button></a>
					
				 </div>
				 
				  
			

			
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
							<td><a href="ModifierCategorie.php?ID=<?php echo $Cater['ID']; ?>"><button class="btn-warning" >Modifier</button></a></td> 
							<td><a href="suppCategorie.php?ID=<?php echo $Cater['ID']; ?>"><button class="btn-danger">Supprimer</button></a></td>
							

						</tr>
							<?php }  ?>

						</tbody>
					
				</table>
				
			</div>					
			
						
					</tr>
					
				
			</table>
			</div>
		</div>	
		</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2022 The Globe - Alliance</b> All rights reserved.
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

	   <!-- /.control-sidebar -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
   <!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	<script>
function print(pdf) {
    // Créer un IFrame.
    var iframe = document.createElement('iframe');
    // Cacher le IFrame.    
    iframe.style.visibility = "hidden";
    // Définir la source.    
    iframe.src = pdf;
    // Ajouter le IFrame sur la page Web.    
    document.body.appendChild(iframe);
    iframe.contentWindow.focus();
    iframe.contentWindow.print(); // Imprimer.
}
</script>

 <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>

   <script>
   	function confirmer(){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
    if(res){
        // Mettez ici la logique de suppression
    }
}
   </script> 
</body>

</html>