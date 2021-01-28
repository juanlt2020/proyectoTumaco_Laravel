@extends('main')
@section('contenido')

<div class="container">
    <h2> Registro Productos </h2> <br> <br>
    <form action ="{{route('registrarProducto')}}" method="POST" >
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Producto" aria-label="Username" aria-describedby="basic-addon1" id="nombrePro" name="nombrePro" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" placeholder="Cantidad" aria-label="Username" aria-describedby="basic-addon1" id="cantidadPro" name="cantidadPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" placeholder="Precio" aria-label="Username" aria-describedby="basic-addon1" id="precioPro" name="precioPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="file" class="form-control" placeholder="Cantidad" aria-label="Username" aria-describedby="basic-addon1" id="fotoPro" name="fotoPro" required>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
        </div>
            <select class="form-select" aria-label="Default select example" name="categoria">
            @foreach($categorias as $c)
                <option value="{{$c->id}}"> {{ $c->nombreCategoria}} </option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>

</div>

@stop