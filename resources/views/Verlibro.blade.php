@extends('plantillamadre')
@section('titulo','libro')
@section('caja')

<h1>Detalles de {{$libro->titulo}}
<a class="btn btn-warning" href="{{route('libro.edit',['id'=>$libro->id])}}">Editar</a>
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
                <td>{{ $libro->id }} </td>
            </tr>
            <tr>
                <th scope="row">Titulo</th>
                <td>{{ $libro->titulo }} </td>
            </tr>
            <tr>
                <th scope="row">Autor</th>
                <td>  {{ $libro->autor }}</td>
            </tr>
            <tr>
                <th scope="row">Editorial</th>
                <td>{{ $libro->editorial }}</td>
            </tr>
            <tr>
                <th scope="row">Año de publicación</th>
                <td>{{ $libro->anio_publicacion}}</td>
            </tr>
            <tr>
                <th scope="row">Cantidad disponible</th>
                <td>{{ $libro->cantidad_disponible}}</td>
            </tr>
        </tbody>
    </table>
    
    <a class="btn btn-primary" href="{{route('libro.index')}}">Volver</a>

@endsection