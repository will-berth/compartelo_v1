<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

class OpinionArtc extends Model
{
    use HasFactory;
    public $table = 'articulos';

    public function articulo(){
       return $this->belongsTo(Articulo::class);
    }

    protected $fillable = [
        'articulo_id',
        'opinion',
        'f_opinion',
        'estado',
    ];
}
