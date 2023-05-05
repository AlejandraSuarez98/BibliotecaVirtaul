@extends('plantillamadre')
@section('titulo','usuario')
@section('caja')

<h1>Modificacion del Usuario</h1>

<form method="post" action="{{route('usuario.update', ['id'=>$usuario->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del Usuario" value="{{$usuario->nombre}}">
        </div>

        <div class="form-group">
            <label for="correo">Correo electronico</label>
            <input type="email" class="form-control" name="correo" id="correo"
                   placeholder="Ingrese su correo" value="{{$usuario->correo_electronico}}">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono"
                   placeholder="Ingrese su numero" value="{{$usuario->telefono}}">
        </div>

        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion"
                   placeholder="Ingrese su dirrecion" value="{{$usuario->direccion}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

</form>
<br>
    <a class='btn btn-info' href="{{route('usuario.index')}}">Volver a la vista principal</a>
@endsection