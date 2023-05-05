<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios =Usuario::paginate(15);
        return view('Usuarios')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FormularioUsuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string',
            'correo_electronico'=>'required|email|unique:usuarios,correo_electronico',
            'telefono'=>'required|integer|digits_between:1,9',
            'direccion'=>'required|string|min:0|max:100|',
        ]);



        $Nusuario = new Usuario();

        //Formulario
        $Nusuario->nombre = $request->input('nombre');
        $Nusuario->correo_electronico = $request->input('correo_electronico');
        $Nusuario->telefono = $request->input('telefono');
        $Nusuario->direccion = $request->input('direccion');
    

        $creado = $Nusuario->save();

        if ($creado) {
            return redirect()->route('usuario.index')->with('mensaje', 'El usuario fue creado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }
    public function show($id){
        $usuario = Usuario::findOrFail($id);
        return view('Verusuario')->with('usuario' ,$usuario);
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('formularioEditarUsuario')
            ->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {
        $usuario= Usuario::findOrfail($id);

        $request->validate([
            'nombre'=>'required|string',
            'correo'=>'required|email',
            'telefono'=>'required|integer|digits_between:1,9',
            'direccion'=>'required|string|min:0|max:100|',
        ]);



        $usuario = Usuario::findOrfail($id);

        //Formulario
        $usuario->nombre= $request->input('nombre');
        $usuario->correo_electronico = $request->input('correo');
        $usuario->telefono= $request->input('telefono');
        $usuario->direccion= $request->input('direccion');

    

        $creado = $usuario->save();

        if ($creado) {
            return redirect()->route('usuario.index')->with('mensaje', 'El usuario fue modificado exitosamente'); //mensaje de guardado
        }else{
            return back();
        };
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('/usuarios')->with('mensaje','El usuario ha sido eliminado exitosamente');
        
    }
}
