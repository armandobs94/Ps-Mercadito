@extends('plantillas.panel')

@section('navegacion')
<li>
	<i class="icon-home"></i>
	<a href="/panel">Panel de Control</a> 
	<i class="icon-angle-right"></i>
</li>
<li>
	<a href="/panel-usuarios-lista">Usuarios</a>
	<i class="icon-angle-right"></i>
</li>
<li>
	<a href="#">Nuevo Usuario</a>
</li>
@endsection

@section('contenido')
<form method="POST">
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Agregar nuevo usuario.</h2>
			<!-- <div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize" title="Minimizar"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close" title="Cerrar"><i class="halflings-icon remove"></i></a>
			</div> -->
		</div>
		<div class="box-content">
			<div style="margin-left:10%;">
			<fieldset>
				<div class="form-group">
					<label class="form-control">* Nombre(s):</label>
					<input type="text" name="tNombre" id="tNombre" style="width: 400px; height: 30px;" required="required" title="Ingresar el nombre del usuario" minlength="4" maxlength="45" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label class="form-control">* Correo:</label>
					<input type="text" style="width: 400px; height: 30px;" name="tCorreo" id="tCorreo" required="required" placeholder="example@mail.com" title="Ingresar correo del usuario" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
				</div>
				<div class="form-group">
					<label class="form-control">* Contrase&ntilde;a:</label>
					<input type="password" style="width: 400px; height: 30px;" name="tContrasenia" id="tContrasenia" required="required" placeholder="Contrase&ntilde;a" minlength="5" minlength="15">
					<a href="#" id="genPassw" class="btn btn-info espacio" title="Generar contrase&ntilde;"><i class="icon-download-alt"></i></a>
				</div>
				<div class="form-group">
					<label class="form-control">* Repetir contrase&ntilde;a:</label>
					<input type="password" style="width: 400px; height: 30px;" name="tContraseniaV" id="tContraseniaV" required="required" placeholder="Confirmar contrase&ntilde;a" minlength="5" maxlength="15">
				</div>
				<div class="form-group">
					<label class="form-control">* Tipo Usuario:</label>
					<select style="width: 415px; height: 30px;" name="eCodTipoUsuario" id="eCodTipoUsuario" required="required">
						<option value="">Seleccionar...</option>
						<option value="1">Usuario General</option>
						<option value="2">Usuario Consulta</option>
						<option value="3">Usuario Super-Admin</option>
					</select>
				</div> 
				<div style="text-align: right;">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" class="btn">Cancelar</button>
				</div>       
			</fieldset>
			</div>
		</div>
	</div>
</div>
</form>
@endsection


