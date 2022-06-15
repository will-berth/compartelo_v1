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
}
