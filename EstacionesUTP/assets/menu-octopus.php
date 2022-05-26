				'<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							<p style="color:white">Menu</p>		
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
					<?php
						@$permisos = funciones::verificarPaginas($rol);
					?>
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span style="color:white">Inicio</span>
										</a>
									</li>
									<?php
									if((@$permisos['PERMISO_INFORMES'] == 1) && (@$permisos['PERMISO_GRAFICAS'] == 1))
									{
										echo '<li class="nav-parent">
											<a>
												<i class="fa fa-file" aria-hidden="true"></i>
												<span style="color:white">Mediciones</span>
											</a>
											<ul class="nav nav-children">
												<li class="nav-parent">
													<a>
														<i class="fa fa-table" aria-hidden="true"></i>
														<span style="color:white">Vista Tabulada</span>
													</a>
													<ul class="nav nav-children">
														<li>
															<a href="consulta-filtro1.php">
																<span style="color:white">1 Hora</span>
															</a>
														</li>
														<li>
															<a href="consulta-filtro3.php">
																<span style="color:white">8 Hora</span>
															</a>
														</li>
														<li>
															<a href="consulta-filtro4.php">
																<span style="color:white">24 Hora</span>
															</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="consulta-filtro2.php">
														<i class="fa fa-file-image-o" aria-hidden="true"></i>
														<span style="color:white">Vista Gráfica</span>
													</a>
												</li>
											</ul>
										</li>';
									}
									
									if(@$permisos['PERMISO_SE'] == 1 )
									{
										echo'<li>
											<a href="index.php">
												<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
												<span style="color:white">Diagnóstico</span>
											</a>
										</li>';
									}
									if (@$permisos['PERMISO_TOTAL'] == 1) {
									echo'<li class="nav-parent">
										<a>
											<i class="fa fa-clipboard" aria-hidden="true"></i>
											<span style="color:white">Administración</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>
													<i class="fa fa-tasks" aria-hidden="true"></i>
													<span style="color:white">Datos</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="consultar-dato.php">
															 Consultar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-file-text" aria-hidden="true"></i>
													<span style="color:white">Lecturas</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="consultar-lecturas.php">
															 Consultar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-flask" aria-hidden="true"></i>
													<span style="color:white">Agentes Contaminantes</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="insertar-agente.php">
															 Insertar
														</a>
													</li>
													<li>
														<a href="consultar-agente.php">
															Consultar
														</a>
													</li>
													<li>
														<a href="modificar-agente.php">
															 Modificar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-building" aria-hidden="true"></i>
													<span style="color:white">Estaciones</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="insertar-estacion.php">
															 Insertar
														</a>
													</li>
													<li>
														<a href="consultar-estacion.php">
															Consultar
														</a>
													</li>
													<li>
														<a href="modificar-estacion.php">
															 Modificar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-location-arrow" aria-hidden="true"></i>
													<span style="color:white">Lugares</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="insertar-lugar.php">
															 Insertar
														</a>
													</li>
													<li>
														<a href="consultar-lugar.php">
															Consultar
														</a>
													</li>
													<li>
														<a href="modificar-lugar.php">
															 Modificar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-users" aria-hidden="true"></i>
													<span style="color:white">Usuarios</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="insertar-usuario.php">
															 Insertar
														</a>
													</li>
													<li>
														<a href="consultar-usuario.php">
															Consultar
														</a>
													</li>
													<li>
														<a href="modificar-usuario.php">
															 Modificar
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													<i class="fa fa-institution" aria-hidden="true"></i>
													<span style="color:white">Institución</span>
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="insertar-institucion.php">
															 Insertar
														</a>
													</li>
													<li>
														<a href="consultar-institucion.php">
															 Consultar
														</a>
													</li>
													<li>
														<a href="modificar-institucion.php">
															 Modificar
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>';	
									}
									?>
									<style>
										.dot {
										  height: 20px;
										  width: 20px;
										  background-color: #54ee16;
										  border-radius: 50%;
										  display: inline-block;
										  margin-left: 260px;
										}
									</style>
									<img src="/Static/indice5.png" style="height: 140px; width: 210px; padding-left: 20px;" alt="colores" usemap="#colores">
									<!--<map name="colores">
											<area shape="circle" alt="verde" coords="36,32,10" href="">
											<span class="dot"></span>
											<area shape="circle" alt="amarillo" coords="36,55,10" href="">
											<area shape="circle" alt="naranja" coords="36,80,10" href="">
											<area shape="circle" alt="rojo" coords="36,102,10" href="">
											<area shape="circle" alt="rojo" coords="36,124,10" href="">
									</map>-->
								</ul>
							</nav>
						</div>
					</div>
				
				</aside>'