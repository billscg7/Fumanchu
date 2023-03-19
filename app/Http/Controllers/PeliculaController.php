<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
 public function create(){

    $peliculas = Pelicula::all();
    
        
    return view('create',compact('peliculas'));
 }   
}
