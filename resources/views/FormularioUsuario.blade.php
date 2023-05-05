@extends('plantillamadre')
@section('titulo','usuario')
@section('caja')

<h1>Usuario</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Ingrese su nombre">
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo electronico</label>
            <input type="text" class="form-control" name="correo_electronico" id="correo_electronico"
                   placeholder="Ingrese su correo electronico">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono"
                   placeholder="Escriba su telefono">
        </div>

        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion"
                   placeholder="Ingrese su direccion">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
    
@endsection