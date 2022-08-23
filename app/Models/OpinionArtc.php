<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionArtc extends Model
{
    use HasFactory;
    protected $table = 'opiniones_artcs';

    protected $fillable = [
        'articulo_id',
        'user_id',
        'opinion',
        'f_opinion',
        'estado',
    ];
}
