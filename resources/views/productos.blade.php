@extends('templates.producto')

@section('contacto')
	<div class="form-group">
		<label>Nombre</label>
		<p>Fulatino M...</p>
	</div>
	<div class="form-group">
		<label>Tel(s)</label>
		<p>012346789</p>
	</div>
	<div class="form-group">
		<label>Dirección</label>
		<p>
			Av. Conocida #85, Col.Desc
			C.P: 28800
		</p>
	</div>
@stop

<!-- Aqui se mostraran la imagenes del producto (6 fotos maximo) -->
@section('imagenes')
<?php  for($i=1; $i<=6; $i++){ ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="/img/img1.jpg" alt="">
        </div>
    </div>
<?php  } ?>    
@stop

<!-- Se muestra la descripcion del producto -->
@section('contenido')
    <div class="thumbnail">
        <div class="caption-full">
            <h4 class="pull-right">Precio: $24.99</h4>
            <h4>
            	<a href="#">Título de la publicación</a>
            </h4>
            <p>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
            </p>
        </div>
    </div>
@stop

