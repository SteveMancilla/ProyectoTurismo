@extends('layouts.app')

@section('title', 'Lista de Destinos')

@section('content')
    <div class="container">
        <h4 class="page-title">Lista de Destinos</h4>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('destinos.create') }}" class="btn btn-primary">Crear nuevo destino</a>
        <table class="destinos-table">
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
                            <a href="{{ route('destinos.show', $destino) }}" class="btn btn-view">Ver</a>
                            <a href="{{ route('destinos.edit', $destino) }}" class="btn btn-edit">Editar</a>
                            <form action="{{ route('destinos.delete', $destino) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.querySelector('.alert-success');
            if (alert) {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500); // Eliminar el elemento después de que la animación haya terminado
                }, 3000); // El tiempo en milisegundos antes de que comience la desaparición
            }
        });
    </script>

@endsection
