<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;

class CocheController extends Controller
{
    
    
    public function index(){

  
      
      $temp=empleados::find(1);
      return $temp->Coche;
  
    }

  }
