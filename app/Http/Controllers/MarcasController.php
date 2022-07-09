<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{
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
}
