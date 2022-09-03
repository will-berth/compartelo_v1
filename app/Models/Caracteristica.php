<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

class Caracteristica extends Model
{
    use HasFactory;

    protected $fillable = [
        'articulo_id',
        'desc',
    ];
}
