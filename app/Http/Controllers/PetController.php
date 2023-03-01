<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function list(){
        //funcion listar 
     
        $pets = Pet::all();
        return view('sistema', compact('pets'));
      }
}
