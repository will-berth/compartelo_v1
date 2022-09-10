<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;


class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria',
        'icono'
    ];
    //relaciones
    public function articulos(){
        return $this->belongsToMany(Articulo::class, 'detalles_categorias', 'categoria_id', 'articulo_id');
    }
}
