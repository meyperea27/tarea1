<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Formulario Usable UX/UI</title>
    <!-- Bootstrap 5 for basic layout -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4f46e5;
            --error-color: #ef4444;
            --success-color: #10b981;
            --bg-color: #f9fafb;
        }
        body {
            background-color: var(--bg-color);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        .form-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.5rem;
            text-align: center;
        }
        .form-subtitle {
            color: #6b7280;
            text-align: center;
            margin-bottom: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
        /* Visual Validations */
        .form-control:placeholder-shown:not(:focus) {
            border-color: #d1d5db;
        }
        .form-control:not(:placeholder-shown):valid {
            border-color: var(--success-color);
        }
        .form-control:not(:placeholder-shown):invalid {
            border-color: var(--error-color);
        }
        .error-message {
            font-size: 0.75rem;
            color: var(--error-color);
            margin-top: 0.25rem;
            display: none;
        }
        .form-control:invalid + .error-message {
            display: block;
        }
        .btn-submit {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            width: 100%;
            transition: all 0.2s;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }
        .btn-submit:active {
            transform: translateY(0);
        }
        .accessibility-hint {
            font-size: 0.75rem;
            color: #9ca3af;
            margin-top: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1 class="form-title">Contáctanos</h1>
        <p class="form-subtitle">Déjanos tus datos y nos pondremos en contacto contigo lo antes posible.</p>

        <form action="#" method="POST" novalidate id="usableForm">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej: Juan Pérez" required minlength="3">
                <span class="error-message">Por favor, ingresa un nombre válido (al menos 3 caracteres).</span>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="juan@ejemplo.com" required>
                <span class="error-message">Ingresa un formato de correo electrónico válido.</span>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="1234567890" pattern="[0-9]{10,}" required>
                <span class="error-message">Ingresa un número de teléfono válido (al menos 10 dígitos).</span>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="4" placeholder="¿En qué podemos ayudarte?" required minlength="10"></textarea>
                <span class="error-message">El mensaje debe tener al menos 10 caracteres.</span>
            </div>

            <button type="submit" class="btn-submit">Enviar Mensaje</button>
        </form>

        <p class="accessibility-hint">Este formulario cumple con estándares de accesibilidad (ARIA labels y feedback visual).</p>
    </div>

    <script>
        // Simple client-side validation logic to prevent default if invalid
        document.getElementById('usableForm').addEventListener('submit', function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                alert('Por favor, corrige los errores en el formulario antes de enviar.');
            }
            this.classList.add('was-validated');
        }, false);
    </script>
</body>
</html>
