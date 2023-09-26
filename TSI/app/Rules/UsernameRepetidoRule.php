<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Usuario;

class UsernameRepetidoRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = $value;
        
        $result = Usuario::where('username',$user)->exists();
        
        if(!$user->isEmpty()){
            $usuario = $result->first();
            $fail('El nombre de usuario '. $usuario->username . ' ya está en uso');
        }
    }
}