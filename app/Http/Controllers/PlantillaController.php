<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    //
    public function inicio(){

        return view('plantilla.inicio');
    }

    public function mostrar(){

        return view('plantilla.mostrar');
    }
}
