<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\ComparteloSoporte;
use Illuminate\Support\Facades\Notification;
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
                return json_encode(['type' => 'success', 'title' => 'Éxito', 'text' => 'Bienvenido']);
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
            return redirect('unverified-email');
        }
        if($estatus == 0)
        {
            return view('unverified-account');
        }else{
            return redirect ('/');
        }
    }
    public function resendVerification(Request $request)
    {
        $usuario = User::find(Auth::guard('web2')->user()->id);
        $usuario->notify(new ComparteloSoporte('', 1));
        return json_encode(['type' => 'success', 'title' => 'Éxito', 'text' => 'Se envio la verificación al correo: '.Auth::guard('web2')->user()->email]);
    }
    public function resetPassword(Request $request)
    {
        $usuario = User::find(Auth::guard('web2')->user()->id);
        $password = Str::random(10);
        $usuario->password = Hash::make($password);
        $usuario->save();
        $usuario->notify(new ComparteloSoporte($password, 2));
        return json_encode(['type' => 'success', 'title' => 'Éxito', 'text' => 'Se envio la nueva contraseña al correo: '.Auth::guard('web2')->user()->email]);
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
            return json_encode(['type' => 'success', 'title' => 'Éxito', 'text' => 'Sesión iniciada', 'token' => $token]);
        }
        return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'Credenciales invalidas']);
    }
}
