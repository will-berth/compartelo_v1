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
        
        User::create([
            'nombre' => $request->nombre,
            'f_nacimiento' => $request->f_nacimiento,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'usuario' => $request->usuario,
            'email' => $request->email,
            'password' => $request->password,
            'ine_frontal' => $request->ine_frontal,
            'ine_reverso' => $request->ine_reverso,
            'comprobante' => $request->comprobante,
            'ciudad' => $request->ciudad,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
            'cp' => $request->cp,
            'colonia' => $request->colonia,
            'calle' => $request->calle,
            'n_exterior' => $request->n_exterior,
            'n_interior' => $request->n_interior,
            'referencia' => $request->referencia,
        ]);

        return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Tu registro se realizó con exito, queda en espera de verificación de los datos proporcionados.']);

    }
}
