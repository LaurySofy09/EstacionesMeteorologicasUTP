<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Consultar Lecturas</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<?php include ("session.php"); ?>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="/Static/LogoAir2.jpg" width="50" height="47" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/logo-utp.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/logo-utp.jpg" />
							</figure>
							<?php echo '<div class="profile-info" data-lock-name="'.$nombreuser.'" data-lock-email="'.$rol.'">';
								 echo '<span class="name">'.$nombreuser.'</span>';
								echo '<span class="role">'.$rol.'</span>';
								?>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="profile.php"><i class="fa fa-user"></i> Mi Perfil</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Bloquer Pantalla</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="cerrar.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php
				include("menu-octopus.php");
				?>				
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Mediciones</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Mediciones</span></li>
								<li><span>Vista Gráfica</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

								<?php
								@$buscar = $_POST["buscar"];
								if(@$buscar)
								{
									$estacion = intval($_POST["estacion"]);
									if ($estacion == 0) {
										$estacion="";
									}
									$agente = intval($_POST["agente"]);
									if ($agente==0) {
										$agente="";
									}
									$fecha_start = $_POST["fecha_start"];
									$hora_start = date_create($fecha_start." 0:00:00");
									$hora_rango = $_POST["hora_rango"];
									if ($hora_rango == 1)
									{
										$time_interval = "23 hours";
									}
									if ($hora_rango == 2) {
										$time_interval = "1 week 23 hours";
									}
									if ($hora_rango == 3) {
										$time_interval = "2 week 23 hours";
									}
									if ($hora_rango == 4) {
										$time_interval = "1 month 23 hours";
									}
									$resultado3=funciones::consultarFiltro2($estacion,$agente,date_format($hora_start, 'Y-m-d H:i:s'),date_format(date_add($hora_start, date_interval_create_from_date_string($time_interval)), 'Y-m-d H:i:s'));
									if($resultado3)
									{
										$i = 0;
										foreach ($resultado3 as $k) {
											$resultado3[$i]['FECHA'] .= " UTC";
											$i++;
											
										}
										foreach ($resultado3 as $k) {
											@$arreglo .= "[".(strtotime($k['FECHA']) * 1000).", ".$k['PROMEDIO']."], ";
										}
										$arreglo = trim($arreglo, ', ');
										echo $arreglo;
									}
								}
								?>
								
								<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title">Consultar</h2>
									</header>
									<div class="panel-body">
									
												<form class="form-horizontal form-bordered" method="post" action="consulta-filtro2.php" autocomplete="off">
														<div class="panel-body">
															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group">
																		<label class="col-md-2 control-label" for="inputSuccess">Estación</label>
																		<div class="col-md-7">
																			<select class="form-control mb-md" name="estacion" required>
																				<option selected value="">--Seleccione una estación--</option>
																				<?php
																					$resultado=funciones::consultarEstacion();
																					foreach ($resultado as $row) {
																						if (@$estacion == intval($row['ID'])) {
																							echo '<option selected>'.$row['ID']." - ".$row['DESCRIPCION'].'</option>';
																						}
																						else
																						{
																							echo '<option>'.$row['ID']." - ".$row['DESCRIPCION'].'</option>';
																						}
																					}
																				?>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label class="col-md-2 control-label" for="inputSuccess">Agente</label>
																		<div class="col-md-6">
																			<select class="form-control mb-md" name="agente" required>
																				<option selected value="">--Seleccione un agente--</option>
																				<?php
																					$resultado2=funciones::consultarAgente();
																					foreach ($resultado2 as $row) {
																						if (@$agente == intval($row['ID']))
																						{
																							echo '<option selected>'.$row['ID']." - ".$row['NOMENCLATURA'].'</option>';
																						}
																						else
																						{
																							echo '<option>'.$row['ID']." - ".$row['NOMENCLATURA'].'</option>';
																						}
																					}
																				?>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-md-4 control-label">Fecha</label>
																		<div class="col-md-8">
																			<div class="input-daterange input-group" data-plugin-datepicker >
																				<span class="input-group-addon">
																					<i class="fa fa-calendar"></i>
																				</span>
																				<?php
																				echo '<input type="text" class="form-control" name="fecha_start" value ="'.@$fecha_start.'" required>';
																				?>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-md-4 control-label">Rango de Hora</label>
																		<div class="col-md-8">
																			<select class="form-control mb-md" name="hora_rango" required>
																				<option selected value="">--Seleccione una opción--</option>
																				<?php
																				if (@$hora_rango == 1) {
																					echo "<option value='1' selected>1 día</option>";
																				}
																				else
																				{
																					echo "<option value='1'>1 día</option>";
																				}
																				if (@$hora_rango == 2) {
																					echo "<option value='2' selected>1 semana</option>";
																				}
																				else
																				{
																					echo "<option value='2'>1 semana</option>";
																				}
																				if (@$hora_rango == 3) {
																					echo "<option value='3' selected>2 semanas</option>";
																				}
																				else
																				{
																					echo "<option value='3'>2 semanas</option>";
																				}
																				if (@$hora_rango == 4) {
																					echo "<option value='4' selected>1 mes</option>";
																				}
																				else
																				{
																					echo "<option value='4'>1 mes</option>";
																				}
																				?>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<button type="submit" class="mb-xs mt-xs mr-xs btn btn-default col-md-offset-5" name="buscar" value="1">Buscar</button>
												</form>
												<div class="row">
														<section class="panel">
															<!--<header class="panel-heading">
												
																<h2 class="panel-title">Best Seller</h2>
																<p class="panel-subtitle">You don't have to do much to get an attractive plot. Create a placeholder, make sure it has dimensions (so Flot knows at what size to draw the plot), then call the plot function with your data.</p>
															</header>-->
															<div class="panel-body">
												
																<!-- Flot: Basic -->
																<div class="chart chart-md" id="graficoBase" style="height:450px"></div>
																<script type="text/javascript">
												
																	var graficoBaseData = [<?php echo $arreglo ?>];
																</script>
												
															</div>
														</section>
												</div>	
									</div>
								</section>
							
						
						
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/flot/jquery.flot.time.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!--<script src="assets/javascripts/ui-elements/examples.charts.js"></script>-->
		<script src="assets/javascripts/ui-elements/structure.chart.js"></script>

	</body>
</html>