<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Panel de Control</title>
	<meta name="author" content="ManzShop">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/aplicacion.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
	<!-- Barra superior -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>ManzShop</span></a><!-- Titulo superior -->
				<!-- start: Menu superior -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start:Opciones Usuario -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
								Nombre Usuario
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Opciones</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Perfil</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Salir</a></li>
							</ul>
						</li>
						<!-- end:Opciones Usuario-->
					</ul>
				</div>
				<!-- end:Menu Superior -->
			</div>
		</div>
	</div>
	<!-- End:Barra superior -->
	<div class="container-fluid-full">
		<div class="row-fluid">
			<!-- start: Menu Izq -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a href="/panel">
								<i class="icon-bar-chart"></i><!-- Icono -->
								<span class="hidden-tablet">&nbsp;Panel de Control</span>
							</a>
						</li>
						<!-- start: usuarios -->
						<!-- end: usuarios -->
						<li>
							<a class="dropmenu" href="#">
								<i class="icon-group"></i>
								<span class="hidden-tablet">&nbsp;Usuarios</span>
								<i class="icon-chevron-down"></i>
							</a>
							<ul>
								<li><a class="submenu" href="/panel-usuarios-nuevo"><i class="icon-plus"></i><span class="hidden-tablet">&nbsp;Agregar Usuario</span></a></li>
								<li><a class="submenu" href="/panel-usuarios-lista"><i class="icon-file-alt"></i><span class="hidden-tablet">&nbsp;Usuarios Registrados</span></a></li>
							</ul>	
						</li>
						<!-- Categorias -->
						<li>
							<a class="dropmenu" href="#">
								<i class="icon-book"></i>
								<span class="hidden-tablet">&nbsp;Categor&iacute;as</span>
								<i class="icon-chevron-down"></i>
							</a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-plus"></i><span class="hidden-tablet"> Agregar Categor&iacute;a</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Ver Categor&iacute;as</span></a></li>
							</ul>	
						</li>
						<!-- end:Categorias -->
						<li>
							<a class="dropmenu" href="#">
								<i class="icon-comments-alt"></i>
								<span class="hidden-tablet">&nbsp;Anuncios</span>
								<i class="icon-chevron-down"></i>
							</a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-plus"></i><span class="hidden-tablet"> Nuevo</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Anuncios Publicados</span></a></li>
							</ul>	
						</li>
						<!-- end:Anuncios -->
						<li>
							<a href="#">
								<i class="icon-envelope"></i>
								<span class="hidden-tablet"> Mensajes</span>
								<span class="label label-important" style="margin-left: 50px;">0</span>
							</a>
						</li>
						<!-- end:Mensajes -->
						<li>
							<a href="#">
								<i class="icon-barcode"></i>
								<span class="hidden-tablet"> Tickets</span>
								<span class="label label-important" style="margin-left: 66px;">2</span>
							</a>
						</li>
						<!-- end:Tickets -->
						<li>
							<a href="login.html">
								<i class="icon-lock"></i>
								<span class="hidden-tablet"> Salir</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Menu Izq -->
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Error!</h4>
					<p>Necesitas activar <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> para que este sitio funcione adecuadamente.</p>
				</div>
			</noscript>
			<!-- start: Content -->
			<div id="content" class="span10">
			<!--start:Barra de navegacion -->
			<ul class="breadcrumb">
				@yield('navegacion')
			</ul>
			<!-- end:Barra de navegacion -->					
			<!-- start:Contenido -->
				@yield('contenido')
			<!-- end:Contenido -->
	</div><!--/.fluid-container-->
		<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Configuracion</h3>
		</div>
		<div class="modal-body">
			<p>Algo de la configuracion aqui</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
			<a href="#" class="btn btn-primary">Guardar cambios</a>
		</div>
	</div>
	<div class="clearfix"></div>
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a href="#" alt="Bootstrap_Metro_Dashboard" style="color: orange;">ManzShop sin fines de lucro. Consulta aquí los términos y condiciones.</a></span>
		</p>
	</footer>
<!-- start: JavaScript-->
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="js/jquery.ui.touch-punch.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/jquery.dataTables.min.js'></script>
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.chosen.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.cleditor.min.js"></script>
	<script src="js/jquery.noty.js"></script>
	<script src="js/jquery.elfinder.min.js"></script>
	<script src="js/jquery.raty.min.js"></script>
	<script src="js/jquery.iphone.toggle.js"></script>
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<script src="js/jquery.gritter.min.js"></script>
	<script src="js/jquery.imagesloaded.js"></script>
	<script src="js/jquery.masonry.min.js"></script>
	<script src="js/jquery.knob.modified.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="js/aplicacion.js"></script>
<!-- end: JavaScript-->	
</body>
</html>