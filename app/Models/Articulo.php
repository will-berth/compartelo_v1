<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CalificacionArtc;
use App\Models\OpinionArtc;

class Articulo extends Model
{
    use HasFactory;
    
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
