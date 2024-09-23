
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
</head>
<body>
    <header class="header1">
        <h1>Reservas de Destinos Turisticos</h1>
    </header>

    <div class="container">
        @if(session('exitoso'))
            <div class="alert success">
                {{ session('exitoso') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reservas.CrearReserva') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="Nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" name="Ubicación" id="ubicacion" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="Descripción" id="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="Precio" id="precio" required>
            </div>
            <button type="submit" class="btn">Guardar</button>
        </form>
    </div>

</body>
</html>

