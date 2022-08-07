<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrerUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:100|regex:/^[\sA-Za-zÁÉÍÓÚáéíóúÑñ]{1,40}$/',
            'f_nacimiento' => 'required|date',
            'sexo' => 'required|max:10',
            'ine_frontal' => 'required',
            'ine_reverso' => 'required',
            'calle' => ['required','regex:/^[\sA-Za-zÁÉÍÓÚáéíóúÑñ]{5,40}$/'],
            'colonia' => ['required','regex:/^[\sA-Za-zÁÉÍÓÚáéíóúÑñ]{5,20}$/'],
            'estado' => ['required','string'],
            'ciudad' => ['required','string'],
            'municipio' => ['required','string'],
            'referencia' => ['required','regex:/^[\sA-Za-zÁÉÍÓÚáéíóúÑñ]{15,40}$/'],
            'cp' => ['required','numeric','regex:/^((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}$/'],
            'comprobante' => 'required|file',
            'email' => ['required', 'unique:users', "regex:/^[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?+$/"],
            'usuario' => ['required','unique:users','regex:/^[a-zA-Z0-9]{4,10}$/'],
            'telefono' => ['required','min:10','max:10'],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/'],
            'pass_repeat' => ['required', 'same:password', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Por favor ingresa tu nombre.',
            'nombre.regex' => 'Debe registrar un nombre correcto sin caracteres especiales.',
            'f_nacimiento.required' => 'Por favor registra tu fecha de nacimiento.',
            'f_nacimiento.date' => 'El dato ingresado no corresponde a tu fecha de nacimiento.',
            'sexo.required' => 'Por favor selecciona tu sexo.',
            'ine_frontal.required' => 'Te falta proporcionar foto de la parte frontal de tu identificación oficial.',
            'ine_reverso.required' => 'Te falta proporcionar foto de la parte trasera de tu identificación oficial.',
            'calle.required' => 'Debes registrar una calle.',
            'calle.regex' => 'Debe registrar una calle, entre 5 a 40 caracteres.',
            'colonia.required' => 'Debes registrar una colonia.',
            'colonia.regex' => 'Debe registrar una colonia, entre 5 a 40 caracteres sin caracteres especiales.',
            'estado.required' => 'Por favor selecciona un estado.',
            'ciudad.required' => 'Debes registrar una ciudad.',
            'municipio.required' => 'Por favor selecciona un municipio.',
            'referencia.required' => 'Debes registrar la referencia de tu domicilio.',
            'referencia.regex' => 'Debe dar una descripción de su referencia de 15 a 40 caracteres.',
            'cp.required' => 'Por favor proporciona tu código postal',
            'cp.regex' => 'Debe registrar un código postal válido.',
            'comprobante.required' => 'Le falta proporcionar la foto de tu comprobante de domicilio.',
            'password.regex' => 'Contraseña, de 8 a 12 caracteres, se requiere por lo menos una letra mayuscula, minuscula, un numero y un caracter especial.',
            'password.required' => 'Te falta porporcionar una contraseña.',
            'email.required' => 'Por favor ingresa tu correo.',
            'email.regex' => 'Debe registrar un correo válido.',
            'email.unique' => 'El correo ya existe.',
            'usuario.required' => 'Por favor ingresa un nombre de usuario.',
            'usuario.regex' => 'El nombre de usuario debe ser de 4 a 10 caracteres, no debe tener espacios ni caracteres especiales.',
            'usuario.unique' => 'El nombre de usuario ya existe.',
            'telefono.required' => 'Por favor ingresa tu número de teléfono.',
            'telefono.min' => 'El número de teléfono debe tener 10 digitos.',
            'pass_repeat.required' => 'Por favor confirma tu contraseña.',
            'pass_repeat.same' => 'La contraseña debe ser igual.',
            'pass_repeat.regex' => 'Contraseña, de 8 a 12 caracteres, se requiere por lo menos una letra mayuscula, minuscula, un numero y un caracter especial.',
        ];
    }
}
