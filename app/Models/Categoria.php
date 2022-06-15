<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $table = 'detalles_categorias';

    public function detalle_categoria(){
       return $this->belongsTo(DetalleCategoria::class);
    }

    protected $fillable = [
        'categoria'
    ];
}
