@extends('plantillas.panel')

@section('navegacion')
<li>
  <i class="icon-home"></i>
  <a href="/panel">Panel de Control</a> 
  <i class="icon-angle-right"></i>
</li>
<li>
  <a href="#">Usuarios</a>
</li>
@endsection

@section('contenido')
<div class="row-fluid sortable">    
<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon list"></i><span class="break"></span>Usuarios registrados.</h2>
    <!-- <div class="box-icon">
      <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
      <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
      <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
    </div> -->
  </div>
<div class="box-content">
<table class="table table-striped table-bordered bootstrap-datatable datatable">
  <thead>
  <tr>
    <th>Nombre</th>
    <th>Tipo</th>
    <th>Fecha de Registro</th>
    <th>Estatus</th>
    <th style="text-align: center;"><i class="halflings-icon wrench"></i></th>
  </tr>
  </thead>   
<tbody>
<?php  
  for ($i=1; $i<=20; $i++){
?>
  <tr>
    <td>Armando Blanco <?php print $i;?></td>
    <td class="center">Usuario General</td>
    <td class="center" style="text-align: center;">18/sep/2016</td>
    <td class="center" style="text-align: center;"><span class="label label-warning">Pendinte</span></td>
    <td class="center" style="text-align: center;">
      <a class="btn btn-info" href="#" title="Editar registro">
        <i class="halflings-icon white edit"></i>                                            
      </a>
      <a class="btn btn-danger" href="#" title="Eliminar registro">
        <i class="halflings-icon white trash"></i> 
      </a>
    </td>
  </tr>
<?php
  }
?>
</tbody>
</table>            
</div>
</div><!--/span-->
</div>
@endsection