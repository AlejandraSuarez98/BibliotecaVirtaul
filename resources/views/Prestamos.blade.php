@extends('plantillamadre');
@section('titulo', 'Registro de Prestamos');
@section('caja')
@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
    @endif
<h1>Prestamos<a class="btn btn-Primary" href="{{route('prestamo.create')}}">Nuevo</a></h1>

    <table class="table table-success">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">fecha_solicitud</th>
            <th scope="col">fecha_prestamo</th>
            <th scope="col">fecha_devolucion</th>
            <th scope="col">libro_id</th>
            <th scope="col">usuario_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($prestamos as $prestamo)
            <tr>
                <th scope="row">{{ $prestamo->id }}</th>
                <td>{{$prestamo->fecha_solicitud}}</td>
                <td>{{$prestamo->fecha_prestamo}}</td>
                <td>{{$prestamo->fecha_devolucion}}</td>
                <td>{{$prestamo->libro_id}}</td>
                <td>{{$prestamo->usuario_id}}</td>
                <td><a class="btn btn-Secondary" href="{{ route('libro.show', ['id'=> $prestamo->id])}}">Ver</a></td>
                <td><a class="btn btn-Dark" href="{{ route('prestamo.edit', ['id'=> $prestamo->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('prestamo.destroy', ['id'=>$prestamo->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar  el prestamo?')"class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No existen prestamos en esta tabla</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $prestamos->links() }}

@endsection

