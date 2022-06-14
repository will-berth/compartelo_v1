<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class Deposito extends Model
{
    use HasFactory;
    public $table = 'users';

    public function user(){
       return $this->belongsTo(User::class);
    }
}
