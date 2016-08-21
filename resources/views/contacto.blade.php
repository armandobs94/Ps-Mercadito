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
        <div class="col-md-10">
            <h1>Nos interesa tu opinión.</h1>
            <form action="" method="post">
            <div class="form-group">
                <label>Ingresa tu nombre</label>
                <input type="text" name="nombre" placeholder="Nombre:" class="form-control">
            </div>
            <div class="form-group">
                <label>*Ingresa tu correo</label>
                <input type="email" name="correo" required placeholder="example@email.com" class="form-control">
            </div>
            <div class="form-group">
                <label>*Deja tu comentario</label>
                <textarea required class="form-control" placeholder="Comentario"></textarea>
            </div>
            <input type="submit" value="Enviar" class="btn btn-default">
            </form>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2"></div>
    </div>
@stop
