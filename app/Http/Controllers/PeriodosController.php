<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Periodo;
use Nette\Utils\Json;

class PeriodosController extends Controller
{
    public function index($filtro){
        if ($filtro == 0){
            $periodos = Periodo::all();
            return json_encode($periodos);
        }else{
            $periodos = Periodo::where ('tipo', 'like', '%'.$filtro.'%')->get();
            return json_encode($periodos);
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

    public function update(Request $request)
    {
        $request->validate([
            'id'    => 'required',
            'tipo' => 'required'
        ]);
        $data = $request->all();
        $periodo = Periodo::find($data['id']);
        try {
            $periodo->update($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Periodo actualizado']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'el periodo no fue actualizado']);
        }
    }


}
