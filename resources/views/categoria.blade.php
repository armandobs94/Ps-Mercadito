@extends('templates.index')

@section('categorias')
    <?php  
        for ($i=1; $i <=10 ; $i++) { 
    ?>
           <a href="/categoria" class="list-group-item">Categoría <?php echo $i?></a>
    <?php 
        }
    ?>
@endsection

@section('slider')
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <h1>Buscando en categoría: lorem ipsum</h1>
        </div>
        <div class="col-md-2"></div>
    </div>
@stop

@section('contenido')
    <?php for ($i=1; $i <= 10 ; $i++) { ?>
    
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="/img/img1.jpg" alt="">
            <div class="caption">
                <h4 class="pull-right">$24.99</h4>
                <h4><a href="/producto">Producto <?php echo $i ?></a></h4>
                <p>Descripción breve del producto <a href="#">ver más detalles</a>.</p>
            </div>
        </div>
    </div>
    <?php } ?>
@endsection