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
        'f_renta',
        'f_devolucion',
        'estado',
        'renta_id',

    ];

    public function Renta(){
       return $this->belongsTo(Renta::class);
    }
    public function Articulos(){
        return $this->belongsTo(Articulos::class);
    }
}
