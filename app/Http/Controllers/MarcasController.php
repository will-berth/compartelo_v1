<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{
    public function index($filtro){
        if ($filtro == 0){
            $marcas = Marca::all();
            return json_encode($marcas);
        }else{
            $marcas = Marca::where('marca', 'like', '%'.$filtro.'%')->get();
            return json_encode($marcas);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required'
        ]);
        $data = $request->all();
        try {
            Marca::create($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Marcar registrada']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'La marca no fue registrada']);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'id'    => 'required',
            'marca' => 'required'
        ]);
        $data = $request->all();
        $marca = Marca::find($data['id']);
        try {
            $marca->update($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Marcar actualizada']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'La marca no fue actualizada']);
        }
    }
}
