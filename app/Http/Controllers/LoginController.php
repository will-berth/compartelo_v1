<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function serviceLogin(Request $request)
    {
        $request->validate([
            'email'         => ['required', 'email', 'string'],
            'password'      => ['required', 'string']
        ]);
        $credenciales = $request->only('email', 'password');//obtiene solo esos dos datos
        if(Auth::guard('web2')->attempt($credenciales))
        {
            $token = Str::random(60);
            Auth::guard('web2')->user()->forceFill(['api_token' => hash('sha256', $token)])->save();
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Sesión iniciada', 'token' => $token]);
        }
        return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'Credenciales invalidas']);
    }
}
