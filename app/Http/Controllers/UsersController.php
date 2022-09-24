<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegistrerUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ComparteloSoporte;
use Illuminate\Support\Facades\Notification;


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

    public function store(RegistrerUserRequest $request){
        $validated = $request->validated();

        $ine_frontal = $this->saveFile($request, "ine_frontal", "ine_f");
        $ine_reverso = $this->saveFile($request, "ine_reverso", "ine_r");
        $comprobante = $this->saveFile($request, "comprobante", "comprobante");

        // $request['password'] = hash('sha256', $request->password);
        $request['password'] = Hash::make($request->password);

        $data = $request->all();
        $data['ine_frontal'] = $ine_frontal;
        $data['ine_reverso'] = $ine_reverso;
        $data['comprobante'] = $comprobante;

        $usuario = User::create($data);
        $usuario ->notify(new ComparteloSoporte('', 1));

        return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Tu registro se realizó con exito, queda en espera de verificación de los datos proporcionados.']);

    }

    public function index($filtro){
        if ($filtro == 0){
            $usuarios = User::all();
            return json_encode($usuarios);
        }else{
            $usuarios = User::where('nombre', 'sexo','usuario', 'email', 'email_verif', 'like', '%'.$filtro.'%')->get();
            return json_encode($usuarios);
        }
    }


    public function verifyUser(Request $request)
    {
        // $request->validate([
        //     'mensaje' => 'required'
        // ]);
        $data = $request->all();
        $status = $data['estatus'];
        $password = $data['Comentarios'];
        $usuario = User::where('id', $data['id'])->first();
        $mensajeReturn = '';
        if ($status == 1) {
            $mensajeReturn = 'Se envio la autorizacion al correo: ';
            // $password = ('verficacion erronea');

            // return json_encode($usuario);                
            $usuario->notify(new ComparteloSoporte($password, 5));
        } else {
            $usuario->notify(new ComparteloSoporte($password, 3));
            $mensajeReturn = 'Se envio el mensaje de rechazo al correo: ';
        }
        return json_encode(['type' => 'success', 'title' => 'Éxito','text'=> $mensajeReturn.$usuario['email']]);
    }
}
