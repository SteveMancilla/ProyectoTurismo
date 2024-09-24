@extends('layouts.app')

@section('title', 'Ver Destino')

@section('content')
    <div class="destination-container">
        <h1 class="destination-title">{{ $destino->nombre }}</h1>
        
        <div class="destination-details">
            <p class="destination-description">{{ $destino->descripcion }}</p>
            <p><strong>Ubicación:</strong> {{ $destino->ubicacion }}</p>
            <p><strong>Precio:</strong> S/. {{ number_format($destino->precio, 2) }}</p>
            <p><strong>Estado:</strong> {{ $destino->estado ? 'Activo' : 'Inactivo' }}</p>
            <img src="{{ $destino->imagen_url }}" alt="{{ $destino->nombre }}" class="destination-image">
        </div>

        <a href="{{ route('destinos.index') }}" class="btn btn-back">Volver a la lista de destinos</a>
    </div>
@endsection
