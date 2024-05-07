<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coche extends Model
{
    
    use HasFactory;
    public function user()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->hasOne('App\Models\empleado');
    }
}
