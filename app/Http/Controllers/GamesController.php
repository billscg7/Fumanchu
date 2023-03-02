<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        $videogames = array('fifa32','dota2','fabc2');

        return view('index',['games' => $videogames]);
    }

    public function create(){

        return view('create');
    }
    public function help($name_game, $categoria=null){

        return view('show',['nameVideogame'=>$name_game, 
                            'categoryGame'=>$categoria]);
    }
}
