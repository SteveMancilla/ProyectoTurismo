<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
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

    //funciones para insertar datos
    public function CrearDestino(Request $request){
        $request->validate([
            'Nombre'=>'required',
            'Descripcion'=>'required',
            'Ubicacion'=>'required',
            'Precio'=>'required'
        ]);
        Reserva::create($request->all());
        return redirect()->route('Reservas.createReserva')->with('exitoso', 'Reserva creado con exito');
    }

}
