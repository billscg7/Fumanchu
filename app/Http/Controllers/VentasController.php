<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function listar(){
        //funcion listar
        //return view('welcome');
    }
    public function listar4($nombre){
        //funcion listar
        $saludos = "saludos";
        return view('home')->with(['id'=> $nombre, 'saludos' => $saludos]);
    }

    public function listar2(){
        //funcion listar
    }
}
