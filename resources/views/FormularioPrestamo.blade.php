@extends('plantillamadre')
@section('titulo','prestamo')
@section('caja')

<h1>Prestamo</h1>

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
            <label for="fecha_solicitud">Fecha de solicitud</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud"
                   placeholder="YYYY-MM-DD">
        </div>

        <div class="form-group">
            <label for="fecha_prestamo">Fecha de prestamo</label>
            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo"
                   placeholder="YYYY-MM-DD">
        </div>
        <div class="form-group">
            <label for="fecha_devolucion">Fecha de devolucion</label>
            <input type="date" class="form-control" name="fecha_devolucion" id="fecha_devolucion"
                   placeholder="YYYY-MM-DD">
        </div>

        <div class="form-group">
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
    
@endsection