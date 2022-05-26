<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Modificar Estación</title>
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

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

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
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
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
						<h2>Estación</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Estación</span></li>
								<li><span>Actualizar</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<?php
					@$guardar = $_POST["guardar"];
						@$buscar = $_POST["buscar"];
						if(@$guardar)
						{
			                $id = $_POST["id"];
			                $idd = $_POST["idd"];
					        $idl = $_POST["idl"];
							$cox = $_POST["cox"];
							$coy = $_POST["coy"];
							$des = $_POST["des"];
			                if (@$_POST["est"] == "on") {
								$est = 1;
							}
							else
							{
								$est = 0;
							}
			                $resultado=funciones::modificarEstacion($id,$idd,$idl,$cox,$coy,$des,$est);
			                if($resultado==0)
			                {
			                    $op=3;
			                }
			                else
			                {
			                    $op=4;
			                }
					    }
					    if (@$buscar) {
							$id = $_POST["id"];
							$resultado=funciones::buscarEstacion($id);
							if($resultado == 0)
							{
								$op=1;
							}
							else
							{
								$idl = $resultado['ID_LUGAR'];
								$cox = $resultado['COORD_X'];
								$coy = $resultado['COORD_Y'];
								$des = $resultado['DESCRIPCION'];
								$est = $resultado['ESTADO'];
								$op=2;
							}
						}

		      		?>
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
										<h2 class="panel-title">Modificar<?php
													if (@$op) {
														switch (@$op) {
															case 1:
																echo '<p class="text-center text-danger">Registro no encontrado</p>';
																break;
															case 2:
																echo '<p class="text-center text-success">Registro encontrado</p>';
																break;
															case 3:
																echo '<p class="text-center text-danger">Registro no modificado</p>';
																break;
															case 4:
																echo '<p class="text-center text-success">Registro modificado</p>';
																break;	
														}
													}
													?></h2>

									</header>

									<form action="modificar-estacion.php" class="form-horizontal form-bordered" method="post">
										<div class="panel-body">
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">ID<span class="required">*</span></label>
												<div class="col-md-2">
													<div class="input-group">
														<?php
															$resultado=funciones::consultarEstacion();
															echo '<select class="form-control mb-md-6" name = "id">';
															foreach ($resultado as $row) {
																if(@$id == $row['ID'])
																{
																	echo '<option selected>'.$row['ID'].'</option>';
																}
																else
																{
																	echo '<option>'.$row['ID'].'</option>';
																}
																
															}
															echo '</select>';
															echo '<input type="hidden" class="form-control" id="inputDefault" name="idd" value='.@$id.'>';
														?>
														<span class="input-group-btn">
																<button class="btn btn-default" type="submit" name="buscar" value="1"><i class="fa fa-search"></i></button>
														</span>
													</div>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">ID del lugar</label>
												<div class="col-md-4">
													<?php
													echo '<input type="text" class="form-control" name="idl" id="idl" value="'.@$idl.'" />';
													?>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Coordenada en x</label>
												<div class="col-md-4">
													<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-location-arrow"></i>
															</span>
													<?php
													echo '<input type="text" class="form-control" name="cox" id="cox" value="'.@$cox.'" />';
													?>
													</div>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Coordenada en y</label>
												<div class="col-md-4">
													<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-location-arrow"></i>
															</span>
													<?php
													echo '<input type="text" class="form-control" name="coy" id="coy" value="'.@$coy.'" />';
													?>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="textareaAutosize">Descripcion</label>
												<div class="col-md-5">
													<?php
													echo '<textarea class="form-control" rows="3" id="des" name="des" data-plugin-textarea-autosize>'.@$des.'</textarea>';
													?>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">Estado</label>
												<div class="col-md-6">
													<div class="switch switch-sm switch-primary">
													<?php
													if(@$est == 1)
													{
														echo '<input type="checkbox" name="est" data-plugin-ios-switch checked="checked"/>';
													}else
													{
														echo '<input type="checkbox" name="est" data-plugin-ios-switch/>';
													}
													?>
													</div>
												</div>
											</div>
										</div>
										<footer class="panel-footer">
												<button type="submit" class="mb-xs mt-xs mr-xs btn btn-default col-md-offset-4" name="guardar" value="2">Guardar</button>
												<button type="reset" class="mb-xs mt-xs mr-xs btn btn-default">Limpiar</button>
													
										</footer>
									</form>
								</section>	
        					</div>
						</div>	
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
		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>