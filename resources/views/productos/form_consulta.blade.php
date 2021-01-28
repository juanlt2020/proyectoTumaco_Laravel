@extends('main')
@section('contenido')

<div class="container">
    <h2> Consulta de Productos </h2> <br> <br>
    <form action ="{{route('consulta_productos')}}" method="POST" >
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Producto" aria-label="Username" aria-describedby="basic-addon1" id="nombrePro" name="nombrePro" required>
        </div>
        <button type="submit" class="btn btn-success">Consultar</button>
    </form>
</div>

@stop