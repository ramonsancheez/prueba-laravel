<?php

namespace App\Http\Controllers;

use App\Models\Fichaje;
use Illuminate\Http\Request;

class FichajeController extends Controller
{
    public function create(){
        $modeloFichaje = new Fichaje();
        $modeloFichaje->save();
    }
}
