<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
  use HasFactory;
// /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = [
//         'Nombre',
//         'Apellido',
//         'Direccion',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

    public function profile(){
        //$profile = Profile::where('user_id',$this->id)->first();
        //$profile = Profile::where('foreing_key',$this->local_key)->first();
        //return $this->hasOne('App\Models\Profile','foreing_key','local_key');
        return $this->belongsTo('App\Models\coche');

    }
}
