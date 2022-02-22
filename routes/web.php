<?php

use Illuminate\Support\Facades\Route;

// Controladores Módulos
use App\Http\Controllers\Persona\PacienteController;
use App\Http\Controllers\Persona\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pacientes', PacienteController::class);

Route::resource('empleados', EmpleadoController::class);