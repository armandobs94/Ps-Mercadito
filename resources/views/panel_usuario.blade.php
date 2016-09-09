@extends('plantillas.panel')
<!-- Empieza menu -->
@section('navegacion')
	<li>
		<i class="icon-home"></i>
			<a href="#">Panel de Control</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<a href="#">Usuarios</a>
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<a href="#">Agregar Usuario</a>
		</li>
@endsection
<!-- Termina menu -->
<br>
<!-- Empieza contenido -->
@section('contenido')
<div class="form">
	
</div>
<form method="post" action="" role="form">
	<div class="form-group">
    <label for="ejemplo_email_1">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_1"
           placeholder="Introduce tu email">
  </div>
</form>
@endsection