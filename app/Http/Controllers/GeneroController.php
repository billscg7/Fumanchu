<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){

        $generos = Genero::all();
            

        return view('index',compact("generos"));

    }
}
