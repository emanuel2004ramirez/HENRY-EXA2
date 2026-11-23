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
    ->name('equipos.index');
Route::post('/logout', [LoginController::class, 'destroy']) 
    ->name('logout');
Route::get('/equipos/create', [EquipoController::class, 'create'])  
    ->name('equipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])
    ->name('equipos.store');
Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])
    ->name('equipos.edit');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])
    ->name('equipos.update');
    

    })->name('equipos');    
