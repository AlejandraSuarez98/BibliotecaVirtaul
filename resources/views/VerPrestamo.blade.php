@extends('plantillamadre')
@section('titulo','prestamo')
@section('caja')

<h1>Detalles de {{$prestamo->titulo}}
    <a class="btn btn-warning" href="{{route('prestamo.edit',['id'=>$prestamo->id])}}"> Editar</a>
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
                <td>{{ $prestamo->id }} </td>
            </tr>
            <tr>
                <th scope="row">Fecha de solicitud</th>
                <td>{{ $prestamo->fecha_solicitud }} </td>
            </tr>
            <tr>
                <th scope="row">Fecha de prestamo</th>
                <td>  {{ $prestamo->fecha_prestamo }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha de devolución</th>
                <td>{{ $prestamo->fecha_devolucion }}</td>
            </tr>
            <tr>
                <th scope="row">Libro Id</th>
                <td>{{ $prestamo->libro_id}}</td>
            </tr>
            <tr>
                <th scope="row">Usuario Id</th>
                <td>{{ $prestamo->usuario_id}}</td>
            </tr>
        </tbody>
    </table>

    $forelse ($prestamo->)

    <a class="btn btn-primary" href="{{route('prestamo.index')}}">Volver</a>

@endsection