<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Landing Page Bootstrap</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .card:hover {
            transform: translateY(-10px);
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">TECH NOVA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Soluciones Digitales del Futuro</h1>
            <p class="lead mb-5">Impulsamos tu negocio con tecnología de vanguardia y diseño centrado en el usuario.</p>
            <a href="#" class="btn btn-primary btn-lg px-5">Empezar Ahora</a>
        </div>
    </header>

    <!-- Services Cards -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nuestros Servicios</h2>
                <div class="bg-primary mx-auto mb-3" style="width: 60px; height: 3px;"></div>
                <p class="text-muted">Diseñamos experiencias que conectan marcas con personas.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-display fs-1 text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Desarrollo Web</h5>
                            <p class="card-text text-muted">Webs modernas, rápidas y totalmente adaptables a cualquier dispositivo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-phone fs-1 text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">App Móviles</h5>
                            <p class="card-text text-muted">Aplicaciones nativas e híbridas diseñadas para la mejor experiencia móvil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-search fs-1 text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">SEO & Marketing</h5>
                            <p class="card-text text-muted">Optimizamos tu presencia online para que tus clientes te encuentren fácilmente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-4">TECH NOVA</h5>
                    <p class="text-muted">Liderando el cambio digital con pasión y excelencia desde el primer minuto.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-4">Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Privacidad</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Términos</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-4">Contacto</h5>
                    <p class="text-muted"><i class="bi bi-envelope me-2"></i> info@technova.com</p>
                    <p class="text-muted"><i class="bi bi-telephone me-2"></i> +1 234 567 890</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white fs-4"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white fs-4"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="text-center text-muted">
                <small>&copy; 2026 Tech Nova. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
