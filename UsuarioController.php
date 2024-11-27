<?php

namespace App\Http\Controllers;

use App\Models\usuarioModelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'user_name' => 'required|string|max:10',
            'user_password' => 'required|string|max:150',
            'user_idemp' => 'required|integer|exists:employee,idemployee',  // Verifica que el idemp exista en la tabla 'employee'
            'user_e' => 'required|string|max:12',
        ]);

        try {
            // Encriptar la contraseña antes de almacenarla
            $encryptedPassword = Hash::make($request->user_password);

            // Crear el registro de usuario en la base de datos con la contraseña encriptada
            usuarioModelo::create([
                'user_name' => $request->user_name,
                'user_password' => $encryptedPassword,  // Contraseña encriptada
                'user_idemp' => $request->user_idemp,
                'user_e' => $request->user_e,
            ]);

            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Usuario registrado con éxito!');
        } catch (\Exception $e) {
            // Capturar cualquier error que ocurra durante el proceso de inserción
            Log::error('Error al registrar el usuario: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el usuario.']);
        }
    }

    public function edit($id)
    {
        // Buscar el usuario por ID
        $user = usuarioModelo::findOrFail($id);
        // Retornar la vista de actualización con el usuario específico
        return view('Usuarios.updateUsuario', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'user_name' => 'required|string|max:10',
            'user_password' => 'required|string|max:150',
            'user_idemp' => 'required|integer|exists:employee,idemployee',
            'user_e' => 'required|string|max:12',
        ]);

        try {
            // Encriptar la contraseña antes de almacenarla
            $encryptedPassword = Hash::make($request->user_password);

            // Encuentra el usuario y actualiza sus datos
            $user = usuarioModelo::findOrFail($id);
            $user->update([
                'user_name' => $request->user_name,
                'user_password' => $encryptedPassword,  // Aquí también puedes encriptar la contraseña si es necesario
                'user_idemp' => $request->user_idemp,
                'user_e' => $request->user_e,
            ]);

            // Redirigir con mensaje de éxito
            return redirect()->route('Usuarios.index')->with('success', 'Usuario actualizado con éxito!');
        } catch (\Exception $e) {
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Hubo un error al actualizar el usuario.']);
        }
    }

    public function destroy($id)
    {
        // Buscar el usuario por ID y eliminar
        $usuario = usuarioModelo::findOrFail($id);
        $usuario->delete();
        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('Usuarios.index')->with('success', 'Empleado eliminado correctamente.');
    }

    public function Login ()
    {
        return view('login');
    }

    public function LoginPost(Request $request)
    {
        // Validación de entrada
        $request->validate([
            'user_name' => 'required|string',
            'user_password' => 'required|string',
        ]);

        // Credenciales
        $credentials = [
            'user_name' => $request->user_name,
            'password' => $request->user_password,
        ];

         // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Login exitoso'
            ]);
        }

        // Si la autenticación falla
        return response()->json([
            'status' => 'error',
            'message' => 'Usuario o contraseña incorrectos'
        ], 401);
    }
}