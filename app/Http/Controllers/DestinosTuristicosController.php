<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinosTuristicosController extends Controller
{
    public function createDestino(){
        return view('DstinosTurísticos.createDestino');
    }

    public function editDestino($destino){
        return view('DstinosTurísticos.editModificarDestino', compact('destino'));
    }

    public function indexConsultar(){
        return view('DstinosTurísticos.indexConsultarDestino');
    }

    public function showEliminarDestino($destino){
        return view('DstinosTurísticos.showEliminarDestino', compact('destino'));
    }
}
