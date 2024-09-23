@extends('layouts.app')

@section('title', 'Ver Destino')

@section('content')
    <h1>{{ $destino->nombre }}</h1>
    <p>{{ $destino->descripcion }}</p>
    <p><strong>Ubicación:</strong> {{ $destino->ubicacion }}</p>
    <p><strong>Precio:</strong> {{ $destino->precio }}</p>
    <p><strong>Estado:</strong> {{ $destino->estado ? 'Activo' : 'Inactivo' }}</p>
    <img src="{{ $destino->imagen_url }}" alt="{{ $destino->nombre }}">
@endsection