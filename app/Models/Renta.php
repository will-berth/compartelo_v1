<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
use App\Models\User;
use App\Models\Detalle;

class Renta extends Model
{
    use HasFactory;
    public $table = 'rentas';
    protected $fillable=[
        'fecha_renta',
        'total',
        'tipo_pago',
        'estado',
        'user_id',

    ];

    public function user(){
       return $this->belongsTo(User::class);
    }
    public function detalle(){
        return $this->belongsTo(Detalle::class,'renta_id','id');
     }
}
