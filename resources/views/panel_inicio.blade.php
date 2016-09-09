@extends('plantillas.panel')

@section('navegacion')
	<li>
		<i class="icon-home"></i>
			<a href="#">Panel de Control</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<a href="#">Inicio</a>
		</li>
@endsection

@section('contenido')
	<div class="row-fluid">	
		<a class="quick-button metro yellow span2">
			<i class="icon-group"></i>
			<p>Usuarios Registrados</p>
			<span class="badge">237</span>
		</a>
		<a class="quick-button metro red span2">
			<i class="icon-comments-alt"></i>
			<p>Avisos publicados</p>
			<span class="badge">0</span>
		</a>
		<a class="quick-button metro green span2">
			<i class="icon-barcode"></i>
			<p>Tickets</p>
			<span class="badge">2</span>
		</a>
		<!-- clearfix -->
		<div class="clearfix"></div>
		<!-- End clearfix -->
	</div><!--/row-->
	<br>	
	<div class="row-fluid">	
		<div class="box black span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2>
					<i class="halflings-icon white user"></i>
					<span class="break"></span>
					Usuarios por aprobar
				</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<!-- <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a> -->
				</div>
			</div>
			<div class="box-content">
				<ul class="dashboard-list metro">
					<li class="blue">
						<a href="#">
							<img class="avatar" alt="Nombre del usuario" src="img/avatar.jpg">
						</a>
						<strong>Nombre:</strong> Usuario Test<br>
						<strong>Fecha:</strong> Jul 25, 2016 11:09<br>
						<strong>Estatus:</strong> Pendiente             
					</li>
					<li class="blue">
						<a href="#">
							<img class="avatar" alt="Nombre del usuario" src="img/avatar.jpg">
						</a>
						<strong>Nombre:</strong> Usuario Test 2<br>
						<strong>Fecha:</strong> Jul 25, 2016 11:09<br>
						<strong>Estatus:</strong> Pendiente             
					</li>
				</ul>
			</div>
		</div><!--/span-->
	</div>
@endsection