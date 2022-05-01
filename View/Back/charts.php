﻿<?php

include '../../Controller/notificationC.php';

$notification=new notificationC();
$count=$notification->nouvelleNotification();//recupérer les nouvelles notifications

$customer=new ClientC();
$tunis=$customer->rechercherVille("tunis");
$ariana=$customer->rechercherVille("ariana");
$sfax=$customer->rechercherVille("sfax");
$sousse=$customer->rechercherVille("sousse");
$hammamet=$customer->rechercherVille("hammamet");
$monastir=$customer->rechercherVille("monastir");
$djerba=$customer->rechercherVille("djerba");

$userConnecter=$customer->nombreUserConnecter();
$userDeconnecter=$customer->nombreUserDeconnecter();
$autres=0;
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmin</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Edmin </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                        <li><a href="#"><i class="icon-eye-open"></i></a></li>
                        <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                    </ul>
                    <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Item No. 1</a></li>
                                <li><a href="#">Don't Click</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Example Header</li>
                                <li><a href="#">A Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Support </a></li>
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                            </a></li>
                            <li><a href="activity.php"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                            </li>
                            <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                11</b> </a></li>
                            <li><a href="task.php"><i class="menu-icon icon-tasks"></i>Notifications <b class="label orange pull-right">
                                <?php echo $count;?></b> </a></li>
                        </ul>
                        <!--/.widget-nav-->
                        <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Typography </a></li>
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
										<a href="table_billets.php">
											<i class="menu-icon icon-table"></i>
											Billets
										</a>
									</li>
									<li>
										<a href="table_partenaires.php">
											<i class="menu-icon icon-table"></i>
											Partenaires
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
                            <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                        </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
						
                            <div id="container" style="height: 400%" ></div>
		
								<input type="hidden" id="tunis" value=<?php echo $tunis;?>>
								<input type="hidden" id="ariana" value=<?php echo $ariana;?>>
								<input type="hidden" id="sfax" value=<?php echo $sfax;?>>
								<input type="hidden" id="sousse" value=<?php echo $sousse;?>>
								<input type="hidden" id="monastir" value=<?php echo $monastir;?>>
								<input type="hidden" id="hammamet" value=<?php echo $hammamet;?>>
								<input type="hidden" id="djerba" value=<?php echo $djerba;?>>
								<input type="hidden" id="autres" value=<?php echo $autres;?>>

        
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js"></script>
												<!-- Uncomment this line if you want to dataTool extension
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/extension/dataTool.min.js"></script>
												-->
												<!-- Uncomment this line if you want to use gl extension
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
												-->
												<!-- Uncomment this line if you want to echarts-stat extension
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
												-->
												<!-- Uncomment this line if you want to use map
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/map/js/china.js"></script>
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/map/js/world.js"></script>
												-->
												<!-- Uncomment these two lines if you want to use bmap extension
												<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=<Your Key Here>"></script>
												<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@{{version}}/dist/extension/bmap.min.js"></script>
												-->

									<script type="text/javascript">
								var dom = document.getElementById("container");
								var myChart = echarts.init(dom);
								var app = {};

								var option;

								var tunis=document.getElementById("tunis");
								var ariana=document.getElementById("ariana");
								var sfax=document.getElementById("sfax");
								var sousse=document.getElementById("sousse");
								var monastir=document.getElementById("monastir");
								var hammamet=document.getElementById("hammamet");
								var djerba=document.getElementById("djerba");
								var autres=document.getElementById("autres");

								option = {
								  xAxis: {
									type: 'category',
									data: ['Tunis', 'Ariana', 'Sfax', 'Sousse', 'Monastir', 'hammamet', 'Djerba','Autres']
								  },
								  yAxis: {
									type: 'value'
								  },
								  series: [
									{
									  data: [tunis.value, ariana.value, sfax.value,sousse.value,monastir.value,hammamet.value, djerba.value,autres.value],
									  type: 'line'
									}
								  ]
								};

								if (option && typeof option === 'object') {
									myChart.setOption(option);
								}

									</script>
                        </div>
						</br>
						
						<div class="module">
						 <div id="container2" style="height: 400%"></div>
								<input type="hidden" id="connecter" value=<?php echo $userConnecter;?>>
								<input type="hidden" id="deconnecter" value=<?php echo $userDeconnecter;?>>
        
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
									<!-- Uncomment this line if you want to dataTool extension
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/extension/dataTool.min.js"></script>
									-->
									<!-- Uncomment this line if you want to use gl extension
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
									-->
									<!-- Uncomment this line if you want to echarts-stat extension
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
									-->
									<!-- Uncomment this line if you want to use map
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/map/js/china.js"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/map/js/world.js"></script>
									-->
									<!-- Uncomment these two lines if you want to use bmap extension
									<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=<Your Key Here>"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@{{version}}/dist/extension/bmap.min.js"></script>
									-->

												<script type="text/javascript">
										var dom = document.getElementById("container2");
										var myChart = echarts.init(dom);
										var app = {};

										var option;

											var userConnecter=document.getElementById("connecter");
											var userDeconnecter=document.getElementById("deconnecter");

										option = {
										  tooltip: {
											trigger: 'item'
										  },
										  legend: {
											top: '5%',
											left: 'center'
										  },
										  series: [
											{
											  name: 'Access From',
											  type: 'pie',
											  radius: ['40%', '70%'],
											  avoidLabelOverlap: false,
											  itemStyle: {
												borderRadius: 10,
												borderColor: '#fff',
												borderWidth: 2
											  },
											  label: {
												show: false,
												position: 'center'
											  },
											  emphasis: {
												label: {
												  show: true,
												  fontSize: '40',
												  fontWeight: 'bold'
												}
											  },
											  labelLine: {
												show: false
											  },
											  data: [
												{ value: userConnecter.value, name: 'Utilisateurs Connecter' },
												{ value: userDeconnecter.value, name: 'Utilisateurs Deconnecter' },
												
											  ]
											}
										  ]
										};

										if (option && typeof option === 'object') {
											myChart.setOption(option);
										}

												</script>			
						</div>
                       
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>

</body>
