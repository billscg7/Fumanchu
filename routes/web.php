<?php

use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\GeneroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('generos',[GeneroController::class,'index'])->name('generos.index');
Route::get('generos/{id}',[PeliculaController::class,'create'])->name('generos.create');