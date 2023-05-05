<?php

namespace App\Http\Controllers;

use App\Models\Libro;
//use App\Http\Requests\R;
use Illuminate\Http\Request; 

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros =Libro::paginate(15);
        return view('Libros')->with('libros',$libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('FormularioLibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //VALIDAR

          
        $request->validate([
            'titulo'=>'required|string|max:20',
            'autor'=>'required|string|max:15',
            'editorial'=>'required|string|max:30',
            'aniopublicacion'=>'required|numeric',
            'cantidaddisponible'=>'required|numeric|min:0|max:100'
        ]);



        $Nlibro = new Libro();

        //Formulario
        $Nlibro->titulo = $request->input('titulo');
        $Nlibro->autor = $request->input('autor');
        $Nlibro->editorial = $request->input('editorial');
        $Nlibro->anio_publicacion = $request->input('aniopublicacion');
        $Nlibro->cantidad_disponible = $request->input('cantidaddisponible');

    

        $creado = $Nlibro->save();

        if ($creado) {
            return redirect()->route('libro.index')->with('mensaje', 'El libro fue creado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('Verlibro')->with('libro' ,$libro);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);

        return view('formularioEditarLibro')
            ->with('libro', $libro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {   
        $libro = Libro::findOrfail($id);

        $request->validate([
            'Titulo'=>'required|string',
            'Autor'=>'required|string',
            'Editorial'=>'required|string',
            'aniopublicacion'=>'required',
            'Cantid'=>'required'
        ]);



        $libro = Libro::findOrfail($id);

        //Formulario
        $libro->titulo = $request->input('Titulo');
        $libro->autor = $request->input('Autor');
        $libro->editorial = $request->input('Editorial');
        $libro->anio_publicacion = $request->input('aniopublicacion');
        $libro->cantidad_disponible = $request->input('Cantid');

    

        $creado = $libro->save();

        if ($creado) {
            return redirect()->route('libro.index')->with('mensaje', 'El libro fue modificado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Libro::destroy($id);

        return redirect('/libros')->with('mensaje','El libro ha sido eliminado exitosamente');
    }
}
