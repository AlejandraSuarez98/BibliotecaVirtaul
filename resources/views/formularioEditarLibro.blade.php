@extends('plantillamadre')
@section('titulo','libro')
@section('caja')

<h1>Modificacion del Libro</h1>
<form method="post" action="{{route('libro.update', ['id'=>$libro->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="Titulo" id="titulo"
                   placeholder="Nombre del Titulo" value="{{$libro->titulo}}">
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="Autor" id="Autor"
                   placeholder="nombre del autor" value="{{$libro->autor}}">
        </div>

        <div class="form-group">
            <label for="Editorial">Editorial</label>
            <input type="text" class="form-control" name="Editorial" id="Editorial"
                   placeholder="editorial del libro" value="{{$libro->editorial}}">
        </div>

        <div class="form-group">
            <label for="anio">Año de publicacion</label>
            <input type="number" class="form-control" name="aniopublicacion" id="anio"
                   placeholder="Año de publicacion" value="{{$libro->anio_publicacion}}">
        </div>

        <div class="form-group">
            <label for="cant">Cantidad disponible</label>
            <input type="number" class="form-control" name="Cantid" id="cant"
                   placeholder="###########" value="{{$libro->cantidad_disponible}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

</form>
    <br>
    <a class='btn btn-info' href="{{route('libro.index')}}">Volver a la vista principal</a>
@endsection