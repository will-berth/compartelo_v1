<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
use App\Models\User;

class Renta extends Model
{
    use HasFactory;
    public $table = 'rentas';
    protected $fillable=[
        'f_renta',
        'total',
        'tipo_pago',
        'estado',
        'id_usuario',

    ];

    public function renta(){
       return $this->belongsTo(Renta::class);
    }
}
