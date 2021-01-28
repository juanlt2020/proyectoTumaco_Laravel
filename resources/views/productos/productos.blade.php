@extends('main')

@section('contenido')
    <div class="alert alert-primary" role="alert">
    <h1> Productos del Supermercado </h1>
    </div>
    <h2> Producto cuyo id es : <?php echo $identificador ?> </h2>

    <h2> Descripción : <?php echo $nombre ?> </h2>
@stop

