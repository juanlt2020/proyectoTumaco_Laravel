@extends('main')
@section('contenido')
    Identificador: {{$producto->id}} <br>
    Nombre: {{$producto->nombreProducto}} <br>
    Categoria: {{$producto->categoria}} <br>
    Precio: {{$producto->precioProducto}} <br>

    <a href="{{route('form_consulta')}}" class="btn btn-success"> Regresar </a>

@stop