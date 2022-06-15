<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    use HasFactory;
    public $table = 'quejas';
    protected $fillable=[
        'estado',
        'tipo',
        'descripcion',
        'fecha',
        'img1',
        'img2',
        'img3',
        'renta_id',

    ];

    public function Renta(){
       return $this->belongsTo(Renta::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
     }
}
