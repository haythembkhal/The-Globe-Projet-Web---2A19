<?php
    include '../Controller/crud_func.php';
    $CongeC = new CongesC;
    $listeConge = $CongeC->afficherConges();
	$typeC = new typeC;
	$listetypeC = $typeC->affichertypeC();
	$listetype = $typeC->affichertypeC();
	
	
	$error ="";
	$Conge = NULL;
	$CongeA = new CongesC();
	if(isset($_POST["subm"]))
	{
		if($_POST["subm"] == '1')
		{
			if (
				isset($_POST["id_Employe"]) &&
				isset($_POST["type_conge"]) &&		
				isset($_POST["date_deb"]) &&
				isset($_POST["date_fin"]) 
			) {
				if (
					!empty($_POST["id_Employe"]) && 
					!empty($_POST['type_conge']) &&
					!empty($_POST["date_deb"]) && 
					!empty($_POST["date_fin"]) 
				) {
					$Conge = new Conges(NULL,
						$_POST['id_Employe'],
						$_POST['type_conge'],
						$_POST['date_deb'], 
						$_POST['date_fin'],
						NULL
					);
					$CongeA->ajouterConge($Conge);
					header('Location:Afficher.php');
				}
				else
					$error = "Missing information";
			}
		}
		elseif($_POST["subm"] == '2')
		{
			if (
				isset($_POST["typeC"]) &&
				isset($_POST["maxC"])
			) {
				if (
					!empty($_POST["typeC"]) && 
					!empty($_POST['maxC'])
				) {
					$typeCA = new type_cong(NULL,
						$_POST['typeC'],
						$_POST['maxC']
					);
					$typeC->ajoutertypeC($typeCA);
					header('Location:Afficher.php');
				}
				else
					$error = "Missing information";
					var_dump($error);
			}
		}
	}
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
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
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
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
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
										<a href="Afficher.php">
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
										<a href="table_artistes.html">
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
								

                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
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
										<a href="demandeCong.php">
											<i class="icon-inbox"></i>
											Demande de Congé
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
						<div class="module_form">
							<div class="module-head">
								<h3>Ajouter un Congés</h3>
							</div>
							<form name="form_conge" onsubmit="return checkFormcong()" action="" method="POST">
								<input type="hidden" value="1" name="subm" id="subm">
								<input type="text" name="id_Employe" id="id_Employe" placeholder="Id_Employé" maxlength="20">
								<select type="range" name="type_conge" id="type_conge">
									<option selected disabled>Type Congé</option>
									<?php
										foreach($listetype as $typeC){
									?>
									<option value="<?php echo $typeC['id_typeC'] ?>"><?php echo $typeC['Name'] ?></option>
									<?php
										}
									?>
								</select>
								<p> <span class="error" id="erroridC" style="color:red"></span></p>
								<input width="50px" type="text" name="date_deb" id="date_deb" placeholder="Date début du congé" onfocus="this.type = 'date'">
								<input type="text" name="date_fin" id="date_fin" placeholder="Date fin du congé" onfocus="this.type = 'date'" >
								<p> <span class="error" id="errorDA" style="color:red"></span></p>
								<input type="submit" value="Envoyer">
								<input type="Reset" value="Effacer">
							</form>
							<script>
							function checkFormcong()
                                        {
                                            var id_Employe= document.forms["form_conge"]["id_Employe"].value;
                                            var date_deb= document.forms["form_conge"]["date_deb"].value;
											var date_fin= document.forms["form_conge"]["date_fin"].value;
											
											
                                            /*var today = new Date();
                                            var dd = String(today.getDate()).padStart(2, '0');
                                            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January = 0
                                            var yyyy = today.getFullYear();
                                            today = yyyy + '-' + mm + '-' + dd;*/

                                            try{
												if(id_Employe == ""){
													throw "le champ ID Client ne peut pas être vide";
												}
												else if(id_Employe == 0){
													throw "Veuillez choisir une valeur > 0";
												}
												throw "";
											}
											catch(err){
												document.getElementById('erroridC').innerHTML=err;
											}
                                            if(date_deb == "" && date_fin == "")
                                            {
                                                document.getElementById('errorDA').innerHTML="Veuillez choisir une date";  
                                                return false;
                                            }else if(date_deb>date_fin)
                                            {
                                                document.getElementById('errorDA').innerHTML="La date du début doit être < à la date de fin";
                                                return false;
                                            }
											else
											{
												document.getElementById('errorDA').innerHTML="";
											}

                                        }
								</script>
						</div>
					</div>
					<div class="content">

						
						<div class="module_form">
							<div class="module-head">
								<h3>Tables congés</h3>
								<form action="exportEXCEL.php" method="POST">
										<button type="submit" id="export" name="export" value="Export to excel" class="btn-success" style="float= right;">Export To Excel</button>
								</form>
							</div>
							<div style="text-align: left; padding: 3px;">
								<input onkeyup="search()" id="myInput" type="text" placeholder="Recherche" style="padding: 2px;">
							</div>
							<div style="max-height:300px; overflow:auto; overflow-x: hidden; border: 1px solid #ccc;">
								<table id="myTable" class="table table-striped table-bordered table-condensed" style="border-collapse: collapse;">
									<thead>
									<tr>
										<th onclick="sortTableNum(0)">Employé</th>
										<th onclick="sortTable(1)">Type congés</th>
										<th onclick="sortTable(2)">Date début</th>
										<th onclick="sortTable(3)">Date fin</th>
										<th onclick="sortTable(4)">Etat</th>
										<th width="160px">Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
										foreach($listeConge as $Conge){
									?>
									<tr>
										<td><?php echo $Conge['employes']; ?></td>
										<td><?php echo $Conge['Name']; ?></td>
										<td><?php echo $Conge['date_deb']; ?></td>
										<td><?php echo $Conge['date_fin']; ?></td>
										<td>
											<?php
												//echo $Conge['etat'];
												if(strval($Conge['etat']) == '1')
												{
													echo("Refusé");
												}
												elseif(strval($Conge['etat']) == '0')
												{
													echo '<p style="green">Accepté</p>';
												}
												elseif(strval($Conge['etat']) == '')
												{
													echo("Non traité");
												}
											?>
										</td>
										<td width="100px">
											<form method="POST" action="modifierConge.php">
												<input type="submit" name="Modifier" value="Modifier">
												<input type="hidden" value=<?PHP echo $Conge['id_conge']; ?> name="id_conge">
											</form>
											<a href="supprimerConge.php?id_conge=<?php echo $Conge['id_conge']; ?>"><button>Supprimer</button></a>
										</td>
										
									</tr>
									<?php
										}
									?>
									</tbody>
								</table>
								<script>
									function search() {
										// Declare variables
										var input, filter, table, tr, td, i, txtValue;
										input = document.getElementById("myInput");
										filter = input.value.toUpperCase();
										table = document.getElementById("myTable");
										tr = table.getElementsByTagName("tr");
										console.log('searching');
										console.log(filter);
										console.log(tr[1].getElementsByTagName("td")[0]);

										// Loop through all table rows, and hide those who don't match the search query
										for (i = 0; i < tr.length; i++) {
											td = tr[i].getElementsByTagName("td")[0];
											console.log(td);
											if (td) {
											txtValue = td.textContent || td.innerText;
											if (txtValue.toUpperCase().indexOf(filter) > -1) {
												tr[i].style.display = "";
											} else {
												tr[i].style.display = "none";
											}
											}
										}
									}
									function sortTable(n) {
									var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
									table = document.getElementById("myTable");
									switching = true;
									// Set the sorting direction to ascending:
									dir = "asc";
									/* Make a loop that will continue until
									no switching has been done: */
									while (switching) {
										// Start by saying: no switching is done:
										switching = false;
										rows = table.rows;
										/* Loop through all table rows (except the
										first, which contains table headers): */
										for (i = 1; i < (rows.length - 1); i++) {
										// Start by saying there should be no switching:
										shouldSwitch = false;
										/* Get the two elements you want to compare,
										one from current row and one from the next: */
										x = rows[i].getElementsByTagName("TD")[n];
										y = rows[i + 1].getElementsByTagName("TD")[n];
										/* Check if the two rows should switch place,
										based on the direction, asc or desc: */
										if (dir == "asc") {
											if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
											// If so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
											}
										} else if (dir == "desc") {
											if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
											// If so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
											}
										}
										}
										if (shouldSwitch) {
										/* If a switch has been marked, make the switch
										and mark that a switch has been done: */
										rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
										switching = true;
										// Each time a switch is done, increase this count by 1:
										switchcount ++;
										} else {
										/* If no switching has been done AND the direction is "asc",
										set the direction to "desc" and run the while loop again. */
										if (switchcount == 0 && dir == "asc") {
											dir = "desc";
											switching = true;
										}
										}
									}
									}
									function sortTableNum(n) {
									var table, rows, switching, i, x, y, shouldSwitch;
									table = document.getElementById("myTable");
									switching = true;
									/*Make a loop that will continue until
									no switching has been done:*/
									while (switching) {
										//start by saying: no switching is done:
										switching = false;
										rows = table.rows;
										/*Loop through all table rows (except the
										first, which contains table headers):*/
										for (i = 1; i < (rows.length - 1); i++) {
										//start by saying there should be no switching:
										shouldSwitch = false;
										/*Get the two elements you want to compare,
										one from current row and one from the next:*/
										x = rows[i].getElementsByTagName("TD")[n];
										y = rows[i + 1].getElementsByTagName("TD")[n];
										//check if the two rows should switch place:
										if (Number(x.innerHTML) > Number(y.innerHTML)) {
											//if so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
										}
										}
										if (shouldSwitch) {
										/*If a switch has been marked, make the switch
										and mark that a switch has been done:*/
										rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
										switching = true;
										}
									}
									}
								</script>
							</div>
						</div><!--/.module-->
						<div class="module_form">
							<div class="module-head">
								<h3>Ajouter un type de congé</h3>
							</div>
							<form action="" method="POST" name="form_typeC" onsubmit=" return checkFormtypeC()">
								<input type="hidden" value="2" name="subm">
								<input type="text" name="typeC" id="typeC" placeholder="Type" maxlength="20">
								<input width="50px" type="Number" name="maxC" id="maxC" placeholder="Durré max du congé en jours">
								<p> <span class="error" id="errortpC" style="color:red"></span></p>
								<p> <span class="error" id="errorNP" style="color:red"></span></p>
								<input type="submit" value="Envoyer">
								<input type="Reset" value="Effacer">
							</form>
							<script>
							function checkFormtypeC()
                                        {
                                            var typeC= document.forms["form_typeC"]["typeC"].value;
                                            var maxC= document.forms["form_typeC"]["maxC"].value;
											
                                            try{
												if(typeC == ""){
													throw "le champ ID Client ne peut pas être vide";
												}
												else
													throw "";
											}
											catch(err){
												document.getElementById('errortpC').innerHTML=err;
											}
											if(maxC == "")
                                            {
                                                document.getElementById('errorNP').innerHTML="Veuillez choiir un Nombre Maximum";  
                                                return false;
                                            }else if(maxC < 1)
                                            {
                                                document.getElementById('errorNP').innerHTML="Le nombre de jours doit etre > 0";  
                                                return false;
                                            }
											else
											{
                                                document.getElementById('errorNP').innerHTML="";  
                                            }

                                        }
								</script>
						</div>
						<div class="module_form">
							<div class="module-head">
								<h3>Types de congés</h3>
							</div>
							<div style="text-align: left; padding: 5px;">
								<input onkeyup="searchT()" id="myInputT" type="text" placeholder="Recherche">
							</div>
							<div style="max-height:300px; overflow:auto; overflow-x: hidden; border: 1px solid #ccc;">
							<table id="myTableT" class="table table-striped table-bordered table-condensed">
								<thead>
								  <tr>
									  <th onclick="sortTableT(0)">Type</th>
									  <th onclick="sortTableTNum(1)">Durée max</th>
									  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
								<?php
                                    foreach($listetypeC as $typeC){
                                ?>
								<tr>
									<td><?php echo $typeC['Name']; ?></td>
                                    <td>
										<?php
											 //echo $Conge['etat'];
											 if(strval($typeC['Max']) == '')
											 {
												 echo("Non définie");
											 }
											 else
											 {
												echo $typeC['Max'];
												//echo ' jours';
											 }
									 	?>
									 </td>
                                    <td width="160px">
                                        <form method="POST" action="modifiertypeC.php">
                                            <input type="submit" name="Modifier" value="Modifier">
                                            <input type="hidden" value=<?PHP echo $typeC['id_typeC']; ?> name="id_typeC">
                                        </form>
										<a href="supprimertypeC.php?id_typeC=<?php echo $typeC['id_typeC']; ?>"><button>Supprimer</button></a>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
								</tbody>
							  </table>
							</div>
							<script>
									function searchT() {
										// Declare variables
										var input, filter, table, tr, td, i, txtValue;
										input = document.getElementById("myInputT");
										filter = input.value.toUpperCase();
										table = document.getElementById("myTableT");
										tr = table.getElementsByTagName("tr");
										console.log('searching');
										console.log(filter);
										console.log(tr[1].getElementsByTagName("td")[0]);

										// Loop through all table rows, and hide those who don't match the search query
										for (i = 0; i < tr.length; i++) {
											td = tr[i].getElementsByTagName("td")[0];
											console.log(td);
											if (td) {
											txtValue = td.textContent || td.innerText;
											if (txtValue.toUpperCase().indexOf(filter) > -1) {
												tr[i].style.display = "";
											} else {
												tr[i].style.display = "none";
											}
											}
										}
									}
									function sortTableT(n) {
									var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
									table = document.getElementById("myTableT");
									switching = true;
									// Set the sorting direction to ascending:
									dir = "asc";
									/* Make a loop that will continue until
									no switching has been done: */
									while (switching) {
										// Start by saying: no switching is done:
										switching = false;
										rows = table.rows;
										/* Loop through all table rows (except the
										first, which contains table headers): */
										for (i = 1; i < (rows.length - 1); i++) {
										// Start by saying there should be no switching:
										shouldSwitch = false;
										/* Get the two elements you want to compare,
										one from current row and one from the next: */
										x = rows[i].getElementsByTagName("TD")[n];
										y = rows[i + 1].getElementsByTagName("TD")[n];
										/* Check if the two rows should switch place,
										based on the direction, asc or desc: */
										if (dir == "asc") {
											if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
											// If so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
											}
										} else if (dir == "desc") {
											if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
											// If so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
											}
										}
										}
										if (shouldSwitch) {
										/* If a switch has been marked, make the switch
										and mark that a switch has been done: */
										rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
										switching = true;
										// Each time a switch is done, increase this count by 1:
										switchcount ++;
										} else {
										/* If no switching has been done AND the direction is "asc",
										set the direction to "desc" and run the while loop again. */
										if (switchcount == 0 && dir == "asc") {
											dir = "desc";
											switching = true;
										}
										}
									}
									}
									function sortTableTNum(n) {
									var table, rows, switching, i, x, y, shouldSwitch;
									table = document.getElementById("myTableT");
									switching = true;
									/*Make a loop that will continue until
									no switching has been done:*/
									while (switching) {
										//start by saying: no switching is done:
										switching = false;
										rows = table.rows;
										/*Loop through all table rows (except the
										first, which contains table headers):*/
										for (i = 1; i < (rows.length - 1); i++) {
										//start by saying there should be no switching:
										shouldSwitch = false;
										/*Get the two elements you want to compare,
										one from current row and one from the next:*/
										x = rows[i].getElementsByTagName("TD")[n];
										y = rows[i + 1].getElementsByTagName("TD")[n];
										//check if the two rows should switch place:
										if (Number(x.innerHTML) > Number(y.innerHTML)) {
											//if so, mark as a switch and break the loop:
											shouldSwitch = true;
											break;
										}
										}
										if (shouldSwitch) {
										/*If a switch has been marked, make the switch
										and mark that a switch has been done:*/
										rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
										switching = true;
										}
									}
									}
								</script>
						</div><!--/.module-->


					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
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