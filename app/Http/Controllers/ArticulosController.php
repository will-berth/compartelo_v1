<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticulosController extends Controller
{
    public function serviceListArticles()
    {
        $articulos = Articulo::with('categorias')->get();
        return $articulos;
    }
}
