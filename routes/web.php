<?php

use Illuminate\Support\Facades\Route;

// Controladores Módulos
use App\Http\Controllers\Persona\PacienteController;
use App\Http\Controllers\Persona\EmpleadoController;
use App\Http\Controllers\Agenda\CitaController;
use App\Http\Controllers\Agenda\HistorialController;
use App\Http\Controllers\Almacen\MedicamentoController;
use App\Http\Controllers\Almacen\MaterialController;
use App\Http\Controllers\Almacen\InventarioMedicamentoController;
use App\Http\Controllers\Almacen\InventarioMaterialController;
use App\Http\Controllers\Seguridad\BitacoraController;
use App\Http\Controllers\Seguridad\RolPermisoController;
use App\Http\Controllers\Seguridad\Configuracion\SistemaController;
use App\Http\Controllers\Seguridad\Configuracion\BaseDatosController;

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

/* Mòdulo Personas*/
Route::resource('pacientes', PacienteController::class);
Route::resource('empleados', EmpleadoController::class);

/* Mòdulo citas*/
Route::resource('citas', CitaController::class);
Route::resource('historial', HistorialController::class);

/* Mòdulo Almacen */
Route::resource('medicamentos', MedicamentoController::class);
Route::resource('materiales', MaterialController::class);
Route::resource('inventario/medicamentos', InventarioMedicamentoController::class);
Route::resource('inventario/materiales', InventarioMaterialController::class);

/* Mòdulo Seguridad */

// Pantalla bitacora
Route::resource('bitacora', BitacoraController::class);

// Pantalla usuarios, roles, permisos y objetos
Route::resource('seguridad/roles-permisos', RolPermisoController::class);

// Pantallas configuración
Route::resource('configuracion/sistema', SistemaController::class);
Route::resource('configuracion/db', BaseDatosController::class);
