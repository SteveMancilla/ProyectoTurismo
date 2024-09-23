@extends('layouts.app')

@section('title', 'Crear Destino')

@section('content')
    <h1>Crear Destino</h1>

    <form action="{{ route('destinos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <label>Ubicación:</label>
        <input type="text" name="ubicacion" required>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>

        <label>URL de Imagen:</label>
        <input type="text" name="imagen_url" required>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>

        <button type="submit">Guardar</button>
    </form>
@endsection