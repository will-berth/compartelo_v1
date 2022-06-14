<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinione extends Model
{
    use HasFactory;
    public $table='users';

    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable=[
        'opinion',
        'status',
        'f_opinion',
    ];
}
