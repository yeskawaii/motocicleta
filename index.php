<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Dispositivo</title>
    <!-- Incluye la CDN de Bootstrap y FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container vw-100">
        <!-- Navbar para el cambio de modo claro y oscuro -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Información del Dispositivo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mode-toggle-btn" href="#" onclick="toggleDarkMode()"><i class="fas fa-moon"></i> Cambiar Modo</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Carrusel con tarjetas -->
        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <!-- Item 1: Temperatura -->
                <div class="carousel-item active">
                    <div class="card text-center">
                        <div class="card-header">
                            Temperatura
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">25°C</h5>
                            <p class="card-text">Información adicional sobre la temperatura.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Proximidad -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <div class="card-header">
                            Proximidad
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cerca</h5>
                            <p class="card-text">Información adicional sobre la proximidad.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Otros Datos -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <div class="card-header">
                            Otros Datos
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Valor</h5>
                            <p class="card-text">Información adicional sobre otros datos.</p>
                        </div>
                    </div>
                </div>
                <!-- Agrega más tarjetas según sea necesario -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Incluye los scripts de Bootstrap y FontAwesome al final del documento -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <!-- Script para cambiar entre modos claro y oscuro -->
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>


</html>