<?php

namespace App\Http\Controllers;

use App\Models\usuarioModelo;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = usuarioModelo::all();
        // dd($usuarios); // Ver los datos
        return view('Usuarios.createUsuario', compact('usuarios'));
    }

    // Funcion para llamar la vista en la carpeta (views->Usuarios 'createUsuario')
    public function create()
    {
        return view('Usuarios.createUsuario');
    }

    // Método para registrar un nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:10|unique:user,user_name',
            'user_password' => 'required|string|min:6',
            'user_idemp' => 'required|integer|exists:employee,idemployee',
            'user_e' => 'required|string|max:1',
        ]);
        $user = usuarioModelo::create($request->all());
        return response()->json(['message' => 'Usuario registrado exitosamente', 'user' => $user], 201);
    }

    public function edit($id)
    {
        // Buscar el usuario por ID
        $usuario = usuarioModelo::findOrFail($id);
        // Retornar la vista de actualización con el usuario específico
        return view('Usuarios.updateUsuario', compact('usuario'));
    }

    public function update(Request $request, $idusuario)
    {
        // Validar los datos antes de actualizar
        $request->validate([
            'empfname' => 'required|string|max:50',
            'empsname' => 'nullable|string|max:50',
            'empfsurname' => 'required|string|max:50',
            'empssurname' => 'nullable|string|max:50',
            'empdui' => 'required|string|max:10',
            'empnit' => 'required|string|max:17',
        ]);
        // Buscar el usuario por ID y actualizar
        $usuario = usuarioModelo::findOrFail($idusuario);
        $usuario->update([
            'empfname' => $request->empfname,
            'empsname' => $request->empsname,
            'empfsurname' => $request->empfsurname,
            'empssurname' => $request->empssurname,
            'empdui' => $request->empdui,
            'empnit' => $request->empnit,
        ]);
        // Redirigir con un mensaje de éxito
        return redirect()->route('Usuarios.index')->with('success', 'Empleado actualizado con éxito.');
    }

    public function destroy($id)
    {
        // Buscar el usuario por ID y eliminar
        $usuario = usuarioModelo::findOrFail($id);
        $usuario->delete();
        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('Usuarios.index')->with('success', 'Empleado eliminado correctamente.');
    }

}
