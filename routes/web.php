<?php

use Illuminate\Support\Facades\Route;

// Controladores Módulos
use App\Http\Controllers\Persona\PacienteController;
use App\Http\Controllers\Persona\EmpleadoController;
use App\Http\Controllers\ControlEmpleado\JornadaLaboralController;
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
use App\Http\Controllers\Seguridad\MantenimientoAlmacenController;
use App\Http\Controllers\Seguridad\MantenimientoCitaController;
use App\Http\Controllers\Seguridad\MantenimientoPersonaController;
use App\Http\Controllers\Seguridad\UsuariosController;
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

/* Módulo Personas*/
Route::resource('pacientes', PacienteController::class);
Route::resource('empleados', EmpleadoController::class);

/* Módulo Control Personal */
Route::resource('jornada-laboral', JornadaLaboralController::class);

/* Módulo citas*/
Route::resource('citas', CitaController::class);
Route::resource('historial', HistorialController::class);

/* Módulo Almacen */
Route::resource('medicamentos', MedicamentoController::class);
Route::resource('materiales', MaterialController::class);
Route::resource('inventario/medicamentos', InventarioMedicamentoController::class);
Route::resource('inventario/materiales', InventarioMaterialController::class);

/* Módulo Reportes */
Route::get('reportes', function () {
    return view('reportes.generar-reporte');
});

/* Configuración */
Route::resource('configuracion/sistema', SistemaController::class);
Route::resource('configuracion/db', BaseDatosController::class);

/* Administración */
Route::resource('usuarios', UsuariosController::class);
Route::resource('seguridad/roles-permisos', RolPermisoController::class);
Route::resource('mantenimiento/almacen', MantenimientoAlmacenController::class);
Route::resource('mantenimiento/cita', MantenimientoCitaController::class);
Route::resource('mantenimiento/personas', MantenimientoPersonaController::class);
Route::resource('bitacora', BitacoraController::class);