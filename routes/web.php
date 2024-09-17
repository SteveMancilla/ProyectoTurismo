<?php

use App\Http\Controllers\DestinosTuristicosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasController;
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

Route::get('/', HomeController::class);

Route::controller(DestinosTuristicosController::class)->group(function(){
    Route::get('destinosT','indexConsultar');
    Route::get('destinosT/create', 'createDestino');
    Route::get('destinosT/editDestino/{destino}', 'editDestino');
    Route::get('destinosT/eliminarDestino/{destino}', 'showEliminarDestino');

});

Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva');
    Route::get('reservas/edit/{reserva}', 'editReserva');
    Route::get('reservas/cancelar/{reserva}', 'showCancelar');
    Route::get('reservas/pago', 'showConfirmarPago');
});
