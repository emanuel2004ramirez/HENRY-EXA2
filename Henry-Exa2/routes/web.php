<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EquipoController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');  

//Midelware
Route::middleware('auth')->group(function () {
    

Route::get('/equipos', [EquipoController::class, 'index'])
    ->name('equipos');
Route::post('/logout', [LoginController::class, 'destroy']) 
    ->name('logout');
    

    })->name('equipos');    
