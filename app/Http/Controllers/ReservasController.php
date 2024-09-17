<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function createReserva(){
        return view('Reservas.createReserva');
    }

    public function editReserva($reserva){
        return view('Reservas.editModificarReserva', compact('reserva'));
    }

    public function showCancelar($reserva){
        return view('Reservas.showCancelar', compact('reserva'));
    }

    public function showConfirmarPago(){
        return view('Reservas.showConfirmarPago');
    }
}
