<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - UX/UI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #6366f1;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        .profile-header {
            background: var(--bg-gradient);
            color: white;
            padding: 3rem 0 8rem;
            position: relative;
        }
        .profile-card {
            margin-top: -5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            border: none;
        }
        .avatar-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: -75px auto 1.5rem;
        }
        .avatar-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            object-fit: cover;
        }
        .avatar-upload {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--primary-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        .avatar-upload:hover {
            transform: scale(1.1);
            background: #4f46e5;
        }
        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        .form-control, .form-select {
            border-radius: 0.5rem;
            border: 1px solid #d1d5db;
            padding: 0.75rem 1rem;
            transition: all 0.2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        .info-badge {
            background: #f3f4f6;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .btn-save {
            background: var(--primary-color);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-save:hover {
            background: #4f46e5;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
        }
        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }
        .stat-card p {
            margin: 0;
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="profile-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="fw-bold mb-2">Mi Perfil</h1>
                    <p class="mb-0 opacity-75">Gestiona tu información personal y preferencias</p>
                </div>
                <a href="{{ url('/') }}" class="btn btn-light">
                    <i class="bi bi-arrow-left me-2"></i>Volver al Inicio
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container pb-5">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-lg-4 mb-4">
                <div class="card profile-card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-container">
                            <img src="https://ui-avatars.com/api/?name=Juan+Perez&size=150&background=6366f1&color=fff&bold=true" 
                                 alt="Avatar" class="avatar-img" id="avatar-preview">
                            <label for="avatar-upload" class="avatar-upload">
                                <i class="bi bi-camera-fill"></i>
                            </label>
                            <input type="file" id="avatar-upload" class="d-none" accept="image/*">
                        </div>
                        
                        <h3 class="fw-bold mb-1">Juan Pérez</h3>
                        <p class="text-muted mb-3">Desarrollador Full Stack</p>
                        
                        <div class="d-flex justify-content-center gap-2 mb-4">
                            <span class="info-badge">
                                <i class="bi bi-envelope text-primary"></i>
                                <small>juan@ejemplo.com</small>
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-github"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-3 mt-2">
                    <div class="col-6">
                        <div class="stat-card">
                            <h3>24</h3>
                            <p class="small">Proyectos</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <h3>156</h3>
                            <p class="small">Tareas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="col-lg-8">
                <div class="card profile-card">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Información Personal</h4>
                        
                        <form id="profile-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="firstName" value="Juan" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="lastName" value="Pérez" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" value="juan@ejemplo.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="phone" value="+1 234 567 890">
                                </div>
                                <div class="col-md-6">
                                    <label for="position" class="form-label">Cargo</label>
                                    <input type="text" class="form-control" id="position" value="Desarrollador Full Stack">
                                </div>
                                <div class="col-md-6">
                                    <label for="department" class="form-label">Departamento</label>
                                    <select class="form-select" id="department">
                                        <option selected>Desarrollo</option>
                                        <option>Diseño</option>
                                        <option>Marketing</option>
                                        <option>Ventas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="bio" class="form-label">Biografía</label>
                                    <textarea class="form-control" id="bio" rows="4" placeholder="Cuéntanos sobre ti...">Apasionado por la tecnología y el desarrollo web. Especializado en crear experiencias de usuario excepcionales.</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Ubicación</label>
                                    <input type="text" class="form-control" id="location" value="Madrid, España">
                                </div>
                                <div class="col-md-6">
                                    <label for="website" class="form-label">Sitio Web</label>
                                    <input type="url" class="form-control" id="website" placeholder="https://ejemplo.com">
                                </div>
                            </div>

                            <hr class="my-4">

                            <h5 class="fw-bold mb-3">Preferencias</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="language" class="form-label">Idioma</label>
                                    <select class="form-select" id="language">
                                        <option selected>Español</option>
                                        <option>English</option>
                                        <option>Français</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="timezone" class="form-label">Zona Horaria</label>
                                    <select class="form-select" id="timezone">
                                        <option selected>GMT+1 (Madrid)</option>
                                        <option>GMT-5 (New York)</option>
                                        <option>GMT+8 (Beijing)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifications" checked>
                                        <label class="form-check-label" for="notifications">
                                            Recibir notificaciones por correo
                                        </label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                        <label class="form-check-label" for="newsletter">
                                            Suscribirse al boletín informativo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="button" class="btn btn-outline-secondary">Cancelar</button>
                                <button type="submit" class="btn btn-save">
                                    <i class="bi bi-check-circle me-2"></i>Guardar Cambios
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="saveToast" class="toast border-0 shadow" role="alert">
            <div class="d-flex bg-success text-white rounded">
                <div class="toast-body">
                    <i class="bi bi-check-circle me-2"></i> <span id="toast-message">Perfil actualizado correctamente</span>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Avatar Upload Preview
        document.getElementById('avatar-upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                    showToast('Imagen cargada. Guarda los cambios para aplicar.');
                };
                reader.readAsDataURL(file);
            }
        });

        // Form Submission
        const form = document.getElementById('profile-form');
        const toastEl = document.getElementById('saveToast');
        const toast = new bootstrap.Toast(toastEl);
        const toastMessage = document.getElementById('toast-message');

        function showToast(message) {
            toastMessage.textContent = message;
            toast.show();
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate save with loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Guardando...';

            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalContent;
                showToast('Perfil actualizado correctamente');
                
                // Update profile name in card
                const firstName = document.getElementById('firstName').value;
                const lastName = document.getElementById('lastName').value;
                document.querySelector('.card-body h3').textContent = `${firstName} ${lastName}`;
            }, 1000);
        });

        // Cancel button
        document.querySelector('.btn-outline-secondary').addEventListener('click', function() {
            if (confirm('¿Descartar los cambios?')) {
                form.reset();
                showToast('Cambios descartados');
            }
        });
    </script>
</body>
</html>
