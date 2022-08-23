<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinione extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'opinion',
        'f_opinion',
        'status',
        'cali',
        'tipo'
        
    ];
}
