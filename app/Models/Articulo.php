<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CalificacionArtc;
use App\Models\OpinionArtc;
use App\Models\Categoria;

class Articulo extends Model
{
    use HasFactory;

    public $table = 'categorias';

    public function categoria(){
       return $this->belongsTo(Categoria::class);
    }
    
    protected $fillable = [
        'articulo',
        'desc',
        'precio',
        'stock',
        'img1',
        'img2',
        'img3',
        'img4',
        'estado',
    ];
}
