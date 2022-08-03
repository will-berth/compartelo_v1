<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
    public function saveFile($request, $field, $tipo){
        $imagen = $request->file($field);
        $nombreimagen = date('YmdHis')."-".$tipo.".".$imagen->guessExtension();
        $ruta = public_path("img/usuarios/");

        //$imagen->move($ruta,$nombreimagen);
        $status = copy($imagen->getRealPath(),$ruta.$nombreimagen);
        return $nombreimagen;
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nombre' => 'required|max:100',
            'f_nacimiento' => 'required',
            'sexo' => 'required',
            'telefono' => 'required',
            'usuario' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'ine_frontal' => 'required',
            'ine_reverso' => 'required',
            'comprobante' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'cp' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'referencia' => 'required',
        ]);

        $ine_frontal = $this->saveFile($request, "ine_frontal", "ine_f");
        $ine_reverso = $this->saveFile($request, "ine_reverso", "ine_r");
        $comprobante = $this->saveFile($request, "comprobante", "comprobante");

        $request->ine_frontal = $ine_frontal;
        $request->ine_reverso = $ine_reverso;
        $request->comprobante = $comprobante;
        // $request->password = Hash::make($request->password);
        $request->password = hash('sha256', $request->password);
        $data = $request->all();
        
        User::create($data);

        return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Tu registro se realizó con exito, queda en espera de verificación de los datos proporcionados.']);

    }
}
