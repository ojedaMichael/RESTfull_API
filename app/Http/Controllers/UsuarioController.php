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
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electrónico = $request->correo_electrónico;
        $usuario->fecha_registro = $request->fecha_registro;
        
        $usuario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electrónico = $request->correo_electrónico;
        $usuario->fecha_registro = $request->fecha_registro;
        
        $usuario->save();

        return "usuario editado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return "usuario eliminado correctamente";
    }
}
