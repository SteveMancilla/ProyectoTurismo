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
    public function CrearReserva(Request $request){
        $request->validate([
            'Nombre'=>'required|max:40',
            'Descripción'=>'required',
            'Ubicación'=>'required',
            'Precio'=>'required|numeric',
        ],[
            'Nombre.max'=>'El nombre no puede exceder los 40 caracteres',
            'Precio.numeric'=>'El precio debe ser un número',
            'Precio.required'=>'El precio es requerido',
        ]);
        Reserva::create($request->all());
        return redirect()->route('reservas.create')->with('exitoso', 'Reserva creado con exito');
    }

}
