@extends('main')
@section('contenido')

<h1> Listado de Clientes </h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Identificación </th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección </th>
            <th scope="col">Telefono </th>
            <th scope="col">Genero </th>
            <th scope="col" colspan=2> Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->cedulaCliente }} </td>
                <td> {{ $c->nombreCliente }} </td>
                <td> {{ $c->direccionCliente }}</td>
                <td> {{ $c->telefonoCliente }} </td>

                @if($c->generoCliente == 'F')
                    <td> Femenino </td>
                @else
                    <td> Masculino </td>
                @endif

                <td> <a href="{{route('form_actualizaCli',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('elimina_Cliente', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop






