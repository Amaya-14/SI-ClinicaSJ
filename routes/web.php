<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
use App\Http\Controllers\CajaChica\AperturaCierreController;
use App\Http\Controllers\CajaChica\MovimientoController;
use App\Http\Controllers\CajaChica\CajaRegistradoraController;

use App\Http\Controllers\Seguridad\BitacoraController;
use App\Http\Controllers\Seguridad\RolPermisoController;
use App\Http\Controllers\Seguridad\Configuracion\SistemaController;
use App\Http\Controllers\Seguridad\Configuracion\BaseDatosController;
use App\Http\Controllers\Seguridad\MantenimientoPersonaController;
use App\Http\Controllers\Seguridad\MantenimientoCitaController;
use App\Http\Controllers\Seguridad\MantenimientoAlmacenController;
use App\Http\Controllers\Seguridad\UsuariosController;
use App\Http\Controllers\Seguridad\MantenimientoCajaController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::get('perfil', function () {
    return view('persona.perfil');
});

/* Módulo Control Personal */
Route::resource('jornada-laboral', JornadaLaboralController::class);

/* Módulo citas*/
Route::resource('citas', CitaController::class);
Route::resource('historial', HistorialController::class);

/* Módulo Almacen */
Route::resource('medicamentos', MedicamentoController::class);
Route::resource('materiales', MaterialController::class);
//Route::resource('inventario/medicamentos', InventarioMedicamentoController::class);
//sRoute::resource('inventario/materiales', InventarioMaterialController::class);

/* Módulo Caja Chica */
Route::resource('caja-chica/apertura-cierre', AperturaCierreController::class);
Route::resource('caja-chica/movimientos', MovimientoController::class);
Route::resource('caja-chica/caja-registradora', CajaRegistradoraController::class);

/* Módulo Reportes */
Route::get('reportes', function () {
    return view('reportes.generar-reporte');
});

/* Configuración */
Route::resource('configuracion/sistema', SistemaController::class);
Route::resource('configuracion/db', BaseDatosController::class);

/* Administración */
Route::get('mantenimiento', function () {
    return view('seguridad.mantenimiento.index');
});

//
Route::controller(MantenimientoPersonaController::class)->group(function () {
    Route::get('/mantenimiento/personas', 'index')->name('mantenimiento.personas');

    Route::get('/mantenimiento/load/telefonos', 'loadTelefonos')->name("load.telefonos");
    Route::get('/mantenimiento/load/puestos', 'loadPuestos')->name("load.puestos");

    Route::post('/mantenimiento/telefono', 'storeTelefono')->name('telefono.store');
    Route::post('/mantenimiento/puesto', 'storePuesto')->name('puesto.store');

    Route::get('/mantenimiento/telefono/{telefono}/edit', 'editTelefono')->name('telefono.edit');
    Route::get('/mantenimiento/puesto/{puesto}/edit', 'editPuesto')->name('puesto.edit');

    Route::put('/mantenimiento/telefono/{telefono}', 'updateTelefono')->name('telefono.update');
    Route::put('/mantenimiento/puesto/{puesto}', 'updatePuesto')->name('puesto.update');

    Route::delete('/mantenimiento/telefono/{telefono}', 'destroyTelefono')->name('telefono.destroy');
    Route::delete('/mantenimiento/puesto/{puesto}', 'destroyPuesto')->name('puesto.destroy');
});

//
Route::controller(MantenimientoAlmacenController::class)->group(function () {
    Route::get('/mantenimiento/almacen', 'index')->name('mantenimiento.almacen');

    Route::get('/mantenimiento/load/tipos/medicamentos', 'loadTiposMedicamentos')->name('load.tipos.medicamentos');
    Route::get('/mantenimiento/load/unidades/presentacion', 'loadUnidsPres')->name('load.unidades.presentacion');
    Route::get('/mantenimiento/load/tipos/materiales', 'loadTiposMateriales')->name('load.tipos.materiales');

    Route::post('/mantenimiento/almacen/registro', 'storeRegistro')->name('mantenimiento.almacen.store');

    Route::get('/mantenimiento/almacen/registro/{id}/edit/{str}', 'editRegistro')->name('mantenimiento.almacen.edit');

    Route::put('/mantenimiento/almacen/registro/{id}', 'updateRegistro')->name('mantenimiento.almacen.update');

    Route::delete('/mantenimiento/almacen/registro/{id}/{str}', 'destroyRegistro')->name('mantenimiento.almacen.destroy');
});


//
Route::controller(RolPermisoController::class)->group(function () {
    Route::get('/seguridad/roles-permisos', 'index')->name('seguridad.permisos');

    Route::get('/seguridad/load/roles', 'loadRoles')->name('load.roles');
    Route::get('/seguridad/load/permisos', 'loadPermisos')->name('load.permisos');
    Route::get('/seguridad/load/objetos', 'loadObjetos')->name('load.objetos');

    Route::post('/seguridad/rol', 'storeRol')->name('rol.post');
    Route::post('/seguridad/objeto', 'storeObjeto')->name('objeto.post');

    Route::get('/seguridad/rol/{id}/edit', 'editRol')->name('rol.edit');
    Route::get('/seguridad/objeto/{id}/edit', 'editObjeto')->name('objeto.edit');
    Route::get('/seguridad/permiso/{rol}/{obj}/edit', 'editPermiso')->name('permiso.edit');

    Route::put('/seguridad/rol/{id}', 'updateRol')->name('rol.update');
    Route::put('/seguridad/objeto/{id}', 'updateObjeto')->name('objeto.update');
    Route::put('/seguridad/permiso/{rol}/{obj}', 'updatePermiso')->name('permiso.update');

    Route::delete('/seguridad/rol/{id}', 'destroyRol')->name('rol.destroy');
    Route::delete('/seguridad/objeto/{id}', 'destroyObjeto')->name('objeto.destroy');
});

//Route::resource('mantenimiento/personas', MantenimientoPersonaController::class);
//Route::resource('mantenimiento/almacen', MantenimientoAlmacenController::class);
//Route::resource('mantenimiento/cita', MantenimientoCitaController::class);
//Route::resource('mantenimiento/caja', MantenimientoCajaController::class);
//Route::resource('usuarios', UsuariosController::class);
//Route::resource('seguridad/roles-permisos', RolPermisoController::class);
Route::resource('bitacora', BitacoraController::class);
