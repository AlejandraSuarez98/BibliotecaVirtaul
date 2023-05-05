@extends('plantillamadre')
@section('titulo','prestamo')
@section('caja')

<h1>Modificacion del Prestamo</h1>
<form method="post" action="{{route('prestamo.update', ['id'=>$prestamo->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="fecha_solicitud">Fecha de solicitud</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud"
                   placeholder="YYYY-MM-DD" value="{{$prestamo->fecha_solicitud}}">
        </div>

        <div class="form-group">
            <label for="fecha_prestamo">Fecha de prestamo</label>
            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo"
                   placeholder="YYYY-MM-DD" value="{{$prestamo->fecha_prestamo}}">
        </div>

        <div class="form-group">
            <label for="fecha_devolucion">Fecha de dovolucion</label>
            <input type="date" class="form-control" name="fecha_devolucion" id="fecha_devolucion"
                   placeholder="YYYY-MM-DD" value="{{$prestamo->fecha_devolucion}}">
        <div>
            <label for="libro_id">Libro Id</label>
            <input type="date" class="form-control" name="libro_id" id="libro_id"
                   placeholder="">
        </div>

        <div class="form-group">
            <label for="usuario_id">Usuario Id</label>
            <input type="date" class="form-control" name="usuario_id" id="usuario_id"
                   placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

</form>
    <br><br>
    <a class='btn btn-info' href="{{route('prestamo.index')}}">Volver a la vista principal</a>
@endsection