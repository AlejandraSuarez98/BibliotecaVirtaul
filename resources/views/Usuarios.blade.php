@extends('plantillamadre');
@section('titulo', 'Registro de Usuarios');
@section('caja')
@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
    @endif
<h1>Usuarios<a class="btn btn-Success" href="{{route('usuario.create')}}">Nuevo</a></h1>

    <table class="table table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">correo_electronico</th>
            <th scope="col">telefono</th>
            <th scope="col">direccion</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($usuarios as $usuario)
            <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->correo_electronico}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->direccion}}</td>
                <td><a class="btn btn-Primary" href="{{ route('usuario.show', ['id'=> $usuario->id])}}">Ver</a></td>
                <td><a class="btn btn-Info" href="{{ route('usuario.edit', ['id'=> $usuario->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('usuario.destroy', ['id'=>$usuario->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar  el usuario?')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No existen usuarios en esta tabla</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $usuarios->links() }}

@endsection