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
        return view('Reservas.editReserva', compact('reserva'));
    }

    public function index(){
        return view('Reservas.indexReservas');
    }

    public function update(){
        return view('Reservas.update');
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
