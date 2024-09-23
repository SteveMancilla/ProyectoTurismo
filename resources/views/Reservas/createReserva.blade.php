@extends('layouts.plantilla')

@section('title', 'Nueva Reserva')

@section('content')
    <h1>Aqui podras hacer una nueva reserva para el turismo</h1>

    <form action="{{ route('reservas.CrearReserva') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>    

@endsection