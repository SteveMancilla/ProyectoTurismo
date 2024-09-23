@extends('layouts.app')

@section('content')
    <h1>Editar Destino</h1>

    <form action="{{ route('destinos.update', $destino) }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $destino->nombre }}" required>

        <label>Descripción:</label>
        <textarea name="descripcion" required>{{ $destino->descripcion }}</textarea>

        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="{{ $destino->ubicacion }}" required>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ $destino->precio }}" required>

        <label>URL de Imagen:</label>
        <input type="text" name="imagen_url" value="{{ $destino->imagen_url }}" required>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="1" {{ $destino->estado ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ !$destino->estado ? 'selected' : '' }}>Inactivo</option>
        </select>

        <button type="submit">Actualizar</button>
    </form>
@endsection