@extends('layouts.app')

@section('content')
    <h1>Lista de Destinos</h1>
    <a href="{{ route('destinos.create') }}">Crear nuevo destino</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($destinos as $destino)
                <tr>
                    <td>{{ $destino->nombre }}</td>
                    <td>{{ $destino->ubicacion }}</td>
                    <td>{{ $destino->precio }}</td>
                    <td>{{ $destino->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <a href="{{ route('destinos.show', $destino) }}">Ver</a>
                        <a href="{{ route('destinos.edit', $destino) }}">Editar</a>
                        <form action="{{ route('destinos.delete', $destino) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection