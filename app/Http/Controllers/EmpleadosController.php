<?php

namespace App\Http\Controllers;

use App\Models\coche;
use App\Models\Empleado;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $temp = Coche::find(1);
        return $temp->Empleados;
    
      }
}
