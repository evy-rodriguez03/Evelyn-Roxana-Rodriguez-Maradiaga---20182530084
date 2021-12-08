<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TelefonoController;
use App\Models\Telefono;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [EmpleadoController::class, 'index'])->name('empleado.index');
Route::get('empleado/nuevo', [EmpleadoController::class, 'crear'])->name('empleado.crear');
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardar'])->name('empleado.guardar');
Route::get('/empleado/{id}/editar', [EmpleadoController::class, 'editar'])->name('empleado.editar');
Route::post('/empleado/{id}/editar', [EmpleadoController::class, 'actualizar'])->name('empleado.actualizar');
Route::delete('/empleado/{id}/eliminar', [EmpleadoController::class, 'eliminar'])->name('empleado.borrar');
Route::get('/empleado/{id}', [EmpleadoController::class, 'mostrar'])->name('empleado.mostrar');
Route::post('/empleado/buscar', [EmpleadoController::class, 'buscar'])->name('empleado.buscar');
Route::get('/telefonos', [TelefonoController::class, 'index'])->name('telefonos.index');


