<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/niveis', NivelController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/turmas', TurmaController::class);


