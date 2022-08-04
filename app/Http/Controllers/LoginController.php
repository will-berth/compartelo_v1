<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'         => ['required', 'email', 'string'],
            'password'      => ['required', 'string']
        ]);
        if(User::where('email', $request->all()['email'])->exists()){
            $credenciales = $request->only('email', 'password');
            if(Auth::guard('web2')->attempt($credenciales))
            {
                $request->session()->regenerate();
                return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Bienvenido']);
            }else{
                return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'Credenciales invalidas']);
            }
        }else{
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'Este correo no pertenece a ninguna cuenta']);
        }
        
    }
    public function estadoVerificado(Request $request)
    {
        $email_verif = Auth::guard('web2')->user()->email_verif;
        $estatus = Auth::guard('web2')->user()->estatus;
        if($email_verif == 0)
        {
            return view('unverified-email');
        }
        if($estatus == 0)
        {
            return view('unverified-account');
        }else{
            return redirect ('/');
        }
    }
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
