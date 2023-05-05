@extends('plantillamadre');
@section('titulo', 'Registro de Libros');
@section('caja')

@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
    @endif
<h1>Libros<a class="btn btn-warning" href="{{route('libro.create')}}">Nuevo</a></h1>

    <table class="table table-dark">
        <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Año de Publicacion</th>
            <th scope="col">Cantidad Disponible</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($libros as $libro)
            <tr>
                <th scope="row">{{ $libro->id }}</th>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->anio_publicacion}}</td>
                <td>{{$libro->cantidad_disponible}}</td>
                <td><a class="btn btn-info" href="{{ route('libro.show', ['id'=> $libro->id])}}">Ver</a></td>
                <td><a class="btn btn-success" href="{{ route('libro.edit', ['id'=> $libro->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('libro.destroy', ['id'=>$libro->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar  el libro?')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No existen libros en esta tabla</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $libros->links() }}

@endsection

