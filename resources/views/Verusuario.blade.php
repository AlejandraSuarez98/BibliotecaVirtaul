@extends('plantillamadre')
@section('titulo','usuario')
@section('caja')

<h1>Detalles de {{$usuario->nombre}}
    <a class="btn btn-warning" href="{{route('usuario.edit',['id'=>$usuario->id])}}">Editar</a>
</h1>

<table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valores</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{ $usuario->id }} </td>
            </tr>
            <tr>
                <th scope="row">Nombre</th>
                <td>{{ $usuario->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">Correo electronico</th>
                <td>  {{ $usuario->correo_electronico }}</td>
            </tr>
            <tr>
                <th scope="row">Telefono</th>
                <td>{{ $usuario->telefono }}</td>
            </tr>
            <tr>
                <th scope="row">Direccion</th>
                <td>{{ $usuario->direccion}}</td>
            </tr>
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('usuario.index')}}">Volver</a>

@endsection