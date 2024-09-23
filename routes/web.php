<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;

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
//steven
//sjdbfsdhbvhdbvhfb
Route::get('/', HomeController::class);

Route::controller(DestinoController::class)->group(function(){
    Route::get('destinos/create', 'create')->name('destinos.create');
    Route::post('destinos/create', 'store')->name('destinos.store');

    Route::get('destinos/edit/{destino}', 'edit')->name('destinos.edit');
    Route::post('destinos/edit/{destino}', 'update')->name('destinos.update');

    Route::get('destinos/index', 'index')->name('destinos.index');
    Route::get('destinos/show/{destino}', 'show')->name('destinos.show');

    Route::post('destinos/delete/{destino}', 'destroy')->name('destinos.delete');
});

Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::post('reservas/create', 'CrearReserva')->name('reservas.CrearReserva');

    Route::get('reservas/edit/{reserva}', 'editReserva');
    Route::get('reservas/index', 'index');
    Route::get('reservas/update', 'update');
});
