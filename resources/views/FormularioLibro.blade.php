@extends('plantillamadre')
@section('titulo','libro')
@section('caja')

<h1>Libro</h1>

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
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                   placeholder="Escriba un Titulo">
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor"
                   placeholder="Escriba el nombre del autor">
        </div>

        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" name="editorial" id="editorial"
                   placeholder="Escriba el editorial del libro">
        </div>

        <div class="form-group">
            <label for="anio_publicacion">Año de publicacion</label>
            <input type="number" class="form-control" name="aniopublicacion" id="anio_publicacion"
                   placeholder="####">
        </div>

        <div class="form-group">
            <label for="cantidad_disponible">Cantidad disponible</label>
            <input type="number" class="form-control" name="cantidaddisponible" id="cantidad_disponible"
                   placeholder="Escriba la cantidad ">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
    <br>
    <a class="btn btn-primary" href="{{route('libro.index')}}">Volver</a>
    
@endsection