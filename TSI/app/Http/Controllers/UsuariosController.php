<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function autenticar(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->route('hub.index');
        }
        return back()->withErrors([
            'username' => 'Credenciales Incorrectas',
        ])->onlyInput('username');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('hub.index');
    }
}
