<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;

class PeriodosController extends Controller
{
    public function index($filtro){
        if ($filtro == 0){
            $periodos = Periodo::all();
            return json_encode($periodos);
        }else{

        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required'
        ]);
        $data = $request->all();
        try {
            Periodo::create($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Periodo registrada']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'periodo no registrado']);
        }
    }
}
