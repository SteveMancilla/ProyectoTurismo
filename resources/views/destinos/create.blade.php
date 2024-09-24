@extends('layouts.app')

@section('title', 'Crear Destino')

@section('content')
    <div class="form-container">
        <h4 class="form-title">Crear Destino</h4>

        <form id="destino-form" action="{{ route('destinos.store') }}" method="POST" onsubmit="return validateForm()">
            @csrf

            <div id="error-message" class="alert alert-danger" style="display: none;"></div>

            <div class="form-group">
                <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Nombre del destino" required>
            </div>

            <div class="form-group">
                <textarea id="descripcion" name="descripcion" class="form-textarea" placeholder="Descripción" required></textarea>
            </div>

            <div class="form-group">
                <input type="text" id="ubicacion" name="ubicacion" class="form-input" placeholder="Ubicación" required>
            </div>

            <div class="form-group">
                <input type="number" id="precio" step="0.01" name="precio" class="form-input" placeholder="Precio" required>
            </div>

            <div class="form-group">
                <input type="text" id="imagen_url" name="imagen_url" class="form-input" placeholder="URL de Imagen" required>
            </div>

            <div class="form-group">
                <select id="estado" name="estado" class="form-select" required>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="form-group" style="display: flex; justify-content: space-between;">
                <button type="submit" class="form-button" style="flex: 1; margin-right: 10px;">Guardar</button>
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
