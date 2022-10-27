<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
Use App\Models\Renta;

class Detalle extends Model
{
    use HasFactory;

    public $table = 'detalles';
    protected $fillable=[
        'cantidad',
        'importe',
        'fecha_renta',
        'fecha_devolucion',
        'estado',
        'renta_id',
        'articulo_id',

    ];

    public function renta(){
       return $this->belongsTo(Renta::class);
    }
    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }
}
