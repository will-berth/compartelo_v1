<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index($filtro){
        if($filtro == 0){
            $categorias = Categoria::all();
            return json_encode($categorias);
        }else{
            $categorias = Categoria::where('categoria', 'like', '%'.$filtro.'%')->get();//nos muestre los datos coincidentes 
            return json_encode($categorias);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'categoria' => 'required',
            'icono'     => 'required'    
        ]);
        $data = $request->all();
        try {
            Categoria::create($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Categoria registrada']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'La categoria no fue registrada']);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'id'        => 'required',
            'categoria' => 'required',
            'icono'     => 'required'    
        ]);
        $data = $request->all();
        $categoria = Categoria::find($data['id']);//consultar datos a modo que los pueda editar
        try {
            $categoria->update($data);
            return json_encode(['type' => 'success', 'title' => 'Exito', 'text' => 'Categoría actualizada']);
        } catch (\Exception $e) {
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'La categoría no fue actualizada']);
        }
    }
}