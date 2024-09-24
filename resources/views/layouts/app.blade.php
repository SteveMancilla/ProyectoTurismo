<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <style>
        /* Estilos para el encabezado */
        header {
            background-color: #007bff; /* Cambia este color al que estás usando */
            color: #000000; /* Cambia este color al que prefieras para el texto */
            padding: 15px; /* Espaciado interno */
            text-align: center; /* Centrar el texto */
            font-family: 'Poppins', sans-serif; /* Fuente utilizada */
        }

        .header-nav {
            display: flex; /* Usar flexbox para la disposición */
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            gap: 20px; /* Espacio entre elementos */
            font-weight: bold; /* Negrita */
        }

        /* Estilo para el texto de contacto */
        .header-contact {
            margin-top: 10px; /* Espacio superior */
            font-size: 0.9em; /* Tamaño de fuente */
        }

    </style>
</head>
<body>
    
    <header>
        <nav class="header-nav">
            <div>Destinos</div>
            <div>Reservas</div>
        </nav>
        <div class="header-contact">
            <p>Ubicación: Universidad Continental</p>
            <p>Teléfono: +51 123 456 789</p>
            <p>Email: grupo01@continental.edu.pe</p>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-container">
            <!-- Contact Info -->
            <div class="footer-info">
                <h4>Contáctenos</h4>
                <p>Teléfono: +51 123 456 789</p>
                <p>Email: grupo01@continental.edu.pe</p>
            </div>
   
            <!-- Contact Form -->
            <div class="footer-contact-form">
                <h4>Déjanos un mensaje</h4>

                <!-- Mensaje de éxito -->
                <div class="alert alert-success" style="display: none;"></div>

                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="footer-input" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="footer-input" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" class="footer-textarea" rows="4" placeholder="Comentario" required></textarea>
                    </div>
                    <button type="submit" class="footer-button">Enviar Mensaje</button>
                </form>
                
                <script>
                  $(document).ready(function() {
                      $('#contactForm').on('submit', function(e) {
                          e.preventDefault(); // Evita el envío normal del formulario
                          
                          $.ajax({
                              type: 'POST',
                              url: $(this).attr('action'),
                              data: $(this).serialize(),
                              success: function(response) {
                                  // Muestra el mensaje de éxito
                                  $('.alert.alert-success').text(response.success).show();
                                  
                                  // Limpia los campos del formulario
                                  $('#contactForm')[0].reset();
                                  
                                  // Hace que la alerta desaparezca después de 5 segundos
                                  setTimeout(function() {
                                      $('.alert.alert-success').fadeOut(500, function() {
                                          $(this).hide(); // Oculta el elemento
                                      });
                                  }, 5000); // 5000 ms = 5 segundos
                              },
                              error: function(xhr) {
                              }
                          });
                      });
                  });
                </script>                  
            </div>
  
            <!-- Copyright -->
            <div class="footer-copyright">
                &copy; {{ date('Y') }} Grupo 01. Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>
</html>
