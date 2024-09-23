@extends('layouts.app')

@section('title', 'Editar Destino')

@section('content')
    <div class="form-container">
        <h4 class="form-title">Editar Destino</h4>

        <form id="destino-form" action="{{ route('destinos.update', $destino) }}" method="POST" onsubmit="return validateForm()">
            @csrf

            <div id="error-message" class="alert alert-danger" style="display: none;"></div>

            <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-input" value="{{ $destino->nombre }}" placeholder="Nombre del destino" required>
            </div>

            <div class="form-group">
                <textarea name="descripcion" id="descripcion" class="form-textarea" placeholder="Descripción" required>{{ $destino->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <input type="text" name="ubicacion" id="ubicacion" class="form-input" value="{{ $destino->ubicacion }}" placeholder="Ubicación" required>
            </div>

            <div class="form-group">
                <input type="number" step="0.01" name="precio" id="precio" class="form-input" value="{{ $destino->precio }}" placeholder="Precio" required>
            </div>

            <div class="form-group">
                <input type="text" name="imagen_url" id="imagen_url" class="form-input" value="{{ $destino->imagen_url }}" placeholder="URL de Imagen" required>
            </div>

            <div class="form-group">
                <select name="estado" class="form-select" required>
                    <option value="1" {{ $destino->estado ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ !$destino->estado ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <div class="form-group" style="display: flex; justify-content: space-between;">
                <button type="submit" class="form-button" style="flex: 1; margin-right: 10px;">Actualizar</button>
                <a href="{{ route('destinos.index') }}" class="form-button" style="flex: 1;">Volver a la lista de destinos</a>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            const nombre = document.getElementById('nombre').value;
            const descripcion = document.getElementById('descripcion').value;
            const ubicacion = document.getElementById('ubicacion').value;
            const precio = document.getElementById('precio').value;
            const imagenUrl = document.getElementById('imagen_url').value;
            const errorMessage = document.getElementById('error-message');
            let messages = [];

            // Limpiar mensajes de error
            errorMessage.style.display = 'none';
            errorMessage.innerHTML = '';

            // Validar nombre
            if (!isNaN(nombre) || nombre.trim() === '') {
                messages.push('El nombre debe contener solo letras.');
            }

            // Validar descripción
            if (descripcion.trim() === '') {
                messages.push('La descripción es obligatoria.');
            }

            // Validar ubicación
            if (!isNaN(ubicacion) || ubicacion.trim() === '') {
                messages.push('La ubicación debe contener solo letras.');
            }

            // Validar precio
            if (precio <= 0) {
                messages.push('El precio debe ser un número positivo.');
            }

            // Validar URL de imagen
            const urlPattern = /(http|https):\/\/[^ "]+$/;
            if (!urlPattern.test(imagenUrl)) {
                messages.push('La URL de la imagen no es válida.');
            }

            // Mostrar mensajes de error
            if (messages.length > 0) {
                errorMessage.innerHTML = messages.join('<br>');
                errorMessage.style.display = 'block';
                return false; // Evitar el envío del formulario
            }

            return true; // Permitir el envío del formulario
        }
    </script>
@endsection
