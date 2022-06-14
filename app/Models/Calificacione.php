<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Calificacione extends Model
{
    use HasFactory;
    public $table = 'calificaciones';
    protected $fillable=[
        'user_id',
        'cali',
        'tipo',

    ];

    public function calificacione(){
       return $this->belongsTo(Calificacione::class);
    }
   
}
