<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticulosController extends Controller
{
    public function __constructor()
    {
       $this->middleware('auth', ['except'  => ['serviceListArticles']]) ;
    }
    public function serviceListArticles(Request $request)
    {
        if($request->user() != null)
        {
            $articulos = Articulo::with('categorias')->get();
            return $articulos;
        }
    }
}
