<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CalificacionArtc;
use App\Models\OpinionArtc;
use App\Models\DetalleCategoria;
use App\Models\User;
use App\Models\Periodo;
use App\Models\Marca;

class Articulo extends Model
{
    use HasFactory;

    public $table = 'articulos';
    
    protected $fillable = [
        'articulo',
        'desc',
        'precio',
        'img1',
        'img2',
        'img3',
        'img4',
        'estado',
    ];
    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'detalles_categorias', 'articulo_id', 'categoria_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function periodos()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id', 'id');
    }
    public function marcas()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
}
