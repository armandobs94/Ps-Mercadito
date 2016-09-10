@extends('plantillas.panel')

@section('navegacion')
	<li>
		<i class="icon-home"></i>
		<a href="#">Panel de Control</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Inicio</a></li>
@endsection

@section('contenido')
<div class="row-fluid">	
	<a class="quick-button metro yellow span2">
		<i class="icon-group"></i>
		<p>Usuarios</p>
		<span class="badge">237</span>
	</a>
	<a class="quick-button metro blue span2">
		<i class="icon-book"></i>
		<p>Categorias</p>
	</a>
	<a class="quick-button metro red span2">
		<i class="icon-comments-alt"></i>
		<p>Anuncios</p>
	</a>
	<a class="quick-button metro pink span2">
		<i class="icon-envelope"></i>
		<p>Mensajes</p>
		<span class="badge">88</span>
	</a>
	<a class="quick-button metro green span2">
		<i class="icon-barcode"></i>
		<p>Tickets</p>
	</a>
	<a class="quick-button metro black span2">
		<i class="icon-calendar"></i>
		<p>Eventos (proximamente)</p>
	</a>
	<div class="clearfix"></div>			
</div><!--/row-->
<br>
<!-- start:Div's plegables -->
<div class="row-fluid">
	<!-- start:Usuarios -->
	<div class="box black span4" onTablet="span6" onDesktop="span4">
		<div class="box-header">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Usuarios por aprobar</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<!-- <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a> -->
			</div>
		</div>
		<div class="box-content">
			<ul class="dashboard-list metro">
				<li class="detalle">
					<a href="#"><img class="avatar" title="nombre usuario" alt="nombre usuario" src="img/avatar.jpg"></a>
					<strong>Nombre:</strong>&nbsp;Armando Blanco<br>
					<strong>Fecha:</strong>&nbsp;09/09/2016<br>
					<strong>Estatus:</strong>&nbsp;Pendiente             
				</li>
			</ul>
			<ul class="dashboard-list metro">
				<li class="detalle">
					<a href="#"><img class="avatar" title="nombre usuario" alt="nombre usuario" src="img/avatar.jpg"></a>
					<strong>Nombre:</strong>&nbsp;Users Blanco<br>
					<strong>Fecha:</strong>&nbsp;09/09/2016<br>
					<strong>Estatus:</strong>&nbsp;Pendiente             
				</li>
			</ul>
		</div>
	</div>
	<!-- end:Usuarios -->

	<!-- start:Tickets -->
	<div class="box black span4" onTablet="span6" onDesktop="span4">
		<div class="box-header">
			<h2><i class="icon-barcode"></i><span class="break"></span>Tickets Pendientes</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<!-- <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a> -->
			</div>
		</div>
		<div class="box-content">
			<ul class="dashboard-list metro">
				<li class="detalle">
					<a href="#"><img class="avatar" title="nombre usuario" alt="nombre usuario" src="img/avatar.jpg"></a>
					<strong>Código:</strong>&nbsp;CLS78-1<br>
					<strong>Fecha:</strong>&nbsp;09/09/2016<br>
					<strong>Usuario:</strong>&nbsp;Armando Blanco             
				</li>
			</ul>
			<ul class="dashboard-list metro">
				<li class="detalle">
					<a href="#"><img class="avatar" title="nombre usuario" alt="nombre usuario" src="img/avatar.jpg"></a>
					<strong>Código:</strong>&nbsp;CLS78-1<br>
					<strong>Fecha:</strong>&nbsp;09/09/2016<br>
					<strong>Usuario:</strong>&nbsp;Armando Blanco              
				</li>
			</ul>
		</div>
	</div>
	<!-- end:Tickets -->
</div>
<!-- end:Dis's plegables -->
@endsection