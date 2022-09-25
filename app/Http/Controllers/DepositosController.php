<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositosController extends Controller
{
    public function index(){
        $depositos = Deposito::with('user')->get();
        return json_encode($depositos);
    }
    
    public function verifiDeposito(Request $request)
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
