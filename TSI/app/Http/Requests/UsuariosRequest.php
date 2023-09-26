<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|min:2|max:20',
            'password1' => 'bail|required|min:6|max:100|same:password2',
            'nombre' => 'required|alpha|min:2|max:20',
            'apellido' => 'required|min:2|alpha|max:20',
        ];
    }

    public function messages():array
    {
        return [
            'username.required' => 'Indique el nombre de usuario',
            'username.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'username.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.required' => 'Indique el nombre del usuario',
            'nombre.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.alpha' => 'El nombre debe solo debe tener letras',
            'apellido.required' => 'Indique el apellido del usuario',
            'apellido.min' => 'El apellido debe tener entre 2 y 20 caracteres',
            'apellido.max' => 'El apellido debe tener entre 2 y 20 caracteres',
            'apellido.alpha' => 'El apellido solo debe tener letras',
            'password1.required' => 'Indique contraseña del usuario',
            'password1.min' => 'La contraseña debe tener entre 6 y 100 caracteres',
            'password1.max' => 'La contraseña debe tener entre 6 y 100 caracteres',
            'password1.same' => 'Las contraseñas no coinciden',
        ];
    }
}
