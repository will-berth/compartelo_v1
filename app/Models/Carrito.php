<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'carrito';
    protected $fillable = [
        'user_id',
        'articulo_id',
    ];
    public function articulos()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id', 'id');
    }
}
