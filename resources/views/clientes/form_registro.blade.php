@extends('main')
@section('contenido')

<div class="container">
<h1> Registro de Clientes </h1>
    <form action="{{ url('clientes/registrar') }}" method="POST">
        @csrf
       
        <label for="nombreCli">Nombre</label>
        <input type="text" id='nombreCli' name='nombreCli' class="form-control" required> <br> <br>
    
        <label for="cedula">Cedula </label>
        <input type="text" id='cedula' name='cedula' class="form-control" required> <br> <br>

        <label for="direccion">Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required> <br> <br>

        <label for="telefono">Telefono </label>
        <input type="number" id='telefono' name='telefono' class="form-control" required> <br> <br>

        <label for="genero">Genero </label>
        <select class="form-select" aria-label="Default select example" name="genero">
            <option value="F" > Femenino </option>
            <option value="M" > Masculino </option>
        </select>
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop