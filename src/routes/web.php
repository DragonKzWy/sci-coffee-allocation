<?php

use App\Http\Controllers\EspacoCafeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\SalaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoas', PessoaController::class);
Route::resource('salas', SalaController::class);
Route::resource('espacos-cafe', EspacoCafeController::class);