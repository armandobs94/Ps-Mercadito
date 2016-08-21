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
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
             </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="slide-image" src="/img/img1.jpg" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="/img/img1.jpg" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="/img/img1.jpg" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
@endsection

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