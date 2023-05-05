<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Usuario;

use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos =Prestamo::paginate(15);
        return view('Prestamos')->with('prestamos',$prestamos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $usuario = Usuario::all();
        $libro = Libro::all();
    
        return view("FormularioPrestamo",['prestamo'=> $prestamo, 'usuario'=>$usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrestamoRequest $request)
    {
        $request->validate([
            'fecha_solicitud'=>'required|date',
            'fecha_prestamo'=>'required|date',
            'fecha_devolucion'=>'required|date',
            'libro_id'=>'required|numeric',
            'usuario_id'=>'required|numeric|min:0|max:100'
        ]);



        $Nprestamo = new Prestamo();

        //Formulario
        $Nprestamo->fecha_solicitud = $request->input('fecha_solicitud');
        $Nprestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $Nprestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $Nprestamo->libro_id = $request->input('libro_id');
        $Nprestamo->usuario_id = $request->input('usuario_id');

    

        $creado = $Nprestamo->save();

        if ($creado) {
            return redirect()->route('prestamo.index')->with('mensaje', 'El prestamo fue creado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('VerPrestamo')->with('prestamo' ,$prestamo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);

        return view('formularioEditarPrestamo')
            ->with('prestamo', $prestamo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrestamoRequest $request, Prestamo $prestamo)
    {
        $prestamo = Prestamo::findOrfail($id);

        $request->validate([
            'Titulo'=>'required',
            'Autor'=>'required',
            'Editorial'=>'required',
            'aniopublicacion'=>'required',
            'Cantid'=>'required
           red'
        ]);



        $prestamo = Prestamo::findOrfail($id);

        //Formulario
        $libro->titulo = $request->input('Titulo');
        $libro->autor = $request->input('Autor');
        $libro->editorial = $request->input('Editorial');
        $libro->anio_publicacion = $request->input('aniopublicacion');
        $libro->cantidad_disponible = $request->input('Cantid');

    

        $creado = $prestamo->save();

        if ($creado) {
            return redirect()->route('prestamo.index')->with('mensaje', 'El prestamo fue modificado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Prestamo::destroy($id);

        return redirect('/prestamos')->with('mensaje','El prestamo ha sido eliminado exitosamente');
    }
}
