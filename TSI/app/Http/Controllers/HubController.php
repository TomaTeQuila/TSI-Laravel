<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuariosRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class HubController extends Controller
{
    public function index(){
        return view('hub.index');
    }
    public function register(){
        return view('hub.register');
    }
    public function login(){
        return view('hub.login');
    }
    
    public function store(UsuariosRequest $request)
    {
        // $request->validate([
        //     'username' => [
        //         'required',
        //         Rule::unique('usuarios')->where(function ($query) {
        //             return $query->whereNull('deleted_at');
        //         }),
        //     ],
        // ], [
        //     'username.unique' => 'El nombre de usuario ya está en uso.',
        // ]);

        $usuario = new Usuario();
        $usuario->username = $request->username;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->password = Hash::make($request->password1);
        $usuario->rol_id = 2;

        $usuario->save();
        return redirect()->route('hub.index');

    }
}
