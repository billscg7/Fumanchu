<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
 public function create($id){

    //$peliculas = Pelicula::where('id_genero',)->get();
      $peliculas = Genero::find($id)->peliculas()->get();
    
   return $peliculas;
        
    return view('create',compact('peliculas'));
 }   
}
