<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;
    public $table = 'articulos';

    public function articulo(){
       return $this->belongsTo(Articulo::class);
    }

    protected $fillable = [
        'articulo_id',
        'desc',
    ];
}
