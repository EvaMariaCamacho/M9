<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Visita3Controller extends Controller
{
    public function nombre($alumno){
        return "Hello $alumno";
        }
}
