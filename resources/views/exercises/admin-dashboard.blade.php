<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Dashboard Administrativo Responsive</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --sidebar-width: 250px;
        }
        body {
            background-color: #f4f7f6;
            overflow-x: hidden;
        }
        /* Sidebar Styles */
        #sidebar-wrapper {
            min-height: 100vh;
            width: var(--sidebar-width);
            background: #2c3e50;
            color: white;
            transition: all 0.3s;
            position: fixed;
            left: 0;
            z-index: 1000;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 1.5rem 1.25rem;
            font-size: 1.2rem;
            font-weight: bold;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        #sidebar-wrapper .list-group-item {
            background: transparent;
            color: rgba(255,255,255,0.7);
            border: none;
            padding: 1rem 1.25rem;
            transition: 0.2s;
        }
        #sidebar-wrapper .list-group-item:hover, 
        #sidebar-wrapper .list-group-item.active {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        /* Main Content Styles */
        #page-content-wrapper {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            transition: all 0.3s;
        }
        .navbar {
            background: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.04);
            transition: 0.3s;
        }
        .card:hover {
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        .metric-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            #sidebar-wrapper {
                margin-left: calc(-1 * var(--sidebar-width));
            }
            #sidebar-wrapper.show {
                margin-left: 0;
            }
            #page-content-wrapper {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">ADMIN PANEL</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-people me-2"></i> Usuarios</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-cart me-2"></i> Ventas</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-graph-up me-2"></i> Reportes</a>
                <a href="#" class="list-group-item list-group-item-action mt-auto"><i class="bi bi-gear me-2"></i> Configuración</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Top Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light px-4 py-3">
                <button class="btn btn-outline-secondary d-md-none" id="menu-toggle">
                    <i class="bi bi-list"></i>
                </button>
                <div class="ms-auto d-flex align-items-center">
                    <div class="dropdown">
                        <a href="#" class="text-decoration-none text-dark dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=random" class="rounded-circle me-2" width="32">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold mb-0">Vista General</h2>
                    <button class="btn btn-primary shadow-sm" id="refresh-metrics">
                        <i class="bi bi-arrow-clockwise me-2"></i>Actualizar Métricas
                    </button>
                </div>

                <!-- Metrics Rows -->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-primary text-white me-3 fs-4">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 small uppercase fw-bold">Usuarios</p>
                                    <h3 class="fw-bold mb-0 metric-value" data-value="1250">1,250</h3>
                                    <span class="text-success small"><i class="bi bi-arrow-up"></i> 12%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-success text-white me-3 fs-4">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 small uppercase fw-bold">Ventas</p>
                                    <h3 class="fw-bold mb-0 metric-value" data-prefix="$" data-value="12430">$12,430</h3>
                                    <span class="text-success small"><i class="bi bi-arrow-up"></i> 5.4%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-warning text-white me-3 fs-4">
                                    <i class="bi bi-bag-check"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 small uppercase fw-bold">Pedidos</p>
                                    <h3 class="fw-bold mb-0 metric-value" data-value="456">456</h3>
                                    <span class="text-danger small"><i class="bi bi-arrow-down"></i> 2.1%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-info text-white me-3 fs-4">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 small uppercase fw-bold">Métricas</p>
                                    <h3 class="fw-bold mb-0 metric-value" data-suffix="%" data-value="89.5">89.5%</h3>
                                    <span class="text-success small"><i class="bi bi-arrow-up"></i> 0.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card p-4">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                                <div>
                                    <h5 class="fw-bold mb-1">Últimas Transacciones</h5>
                                    <p class="text-muted small mb-0">Gestiona y filtra los movimientos recientes.</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="input-group input-group-sm" style="width: 250px;">
                                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                                        <input type="text" id="table-search" class="form-control border-start-0" placeholder="Buscar cliente o producto...">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            Estado: <span id="current-filter">Todos</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                            <li><a class="dropdown-item status-filter-btn active" href="#" data-status="all">Todos</a></li>
                                            <li><a class="dropdown-item status-filter-btn" href="#" data-status="Completado">Completado</a></li>
                                            <li><a class="dropdown-item status-filter-btn" href="#" data-status="Pendiente">Pendiente</a></li>
                                            <li><a class="dropdown-item status-filter-btn" href="#" data-status="Cancelado">Cancelado</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle" id="transaction-table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Cliente</th>
                                            <th>Producto</th>
                                            <th>Fecha</th>
                                            <th>Estado</th>
                                            <th>Monto</th>
                                            <th class="text-end">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="transaction-row" data-status="Completado">
                                            <td>#TR-8945</td>
                                            <td class="search-target"><div class="d-flex align-items-center"><img src="https://ui-avatars.com/api/?name=Carlos+Rivas" class="rounded-circle me-2" width="24"> Carlos Rivas</div></td>
                                            <td class="search-target">Computadora Pro</td>
                                            <td>08 Ene 2026</td>
                                            <td><span class="badge bg-success-subtle text-success border border-success px-3 status-badge">Completado</span></td>
                                            <td class="fw-bold">$1,200</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light quick-action" title="Ver detalles"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light quick-action" title="Descargar PDF"><i class="bi bi-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="transaction-row" data-status="Pendiente">
                                            <td>#TR-8944</td>
                                            <td class="search-target"><div class="d-flex align-items-center"><img src="https://ui-avatars.com/api/?name=Ana+Gomez" class="rounded-circle me-2" width="24"> Ana Gómez</div></td>
                                            <td class="search-target">Suscripción Anual</td>
                                            <td>07 Ene 2026</td>
                                            <td><span class="badge bg-warning-subtle text-warning border border-warning px-3 status-badge">Pendiente</span></td>
                                            <td class="fw-bold">$250</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light quick-action" title="Ver detalles"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light quick-action" title="Descargar PDF"><i class="bi bi-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="transaction-row" data-status="Cancelado">
                                            <td>#TR-8943</td>
                                            <td class="search-target"><div class="d-flex align-items-center"><img src="https://ui-avatars.com/api/?name=Luis+Perez" class="rounded-circle me-2" width="24"> Luis Pérez</div></td>
                                            <td class="search-target">Teclado Mecánico</td>
                                            <td>06 Ene 2026</td>
                                            <td><span class="badge bg-danger-subtle text-danger border border-danger px-3 status-badge">Cancelado</span></td>
                                            <td class="fw-bold">$85</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light quick-action" title="Ver detalles"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light quick-action" title="Descargar PDF"><i class="bi bi-download"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="actionToast" class="toast border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex bg-primary text-white rounded">
                <div class="toast-body">
                    <i class="bi bi-info-circle me-2"></i> <span id="toast-message"></span>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle Sidebar on Mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('sidebar-wrapper').classList.toggle('show');
        });

        // Toast functionality
        const toastEl = document.getElementById('actionToast');
        const toast = new bootstrap.Toast(toastEl);
        const toastMessage = document.getElementById('toast-message');

        function showNotification(message) {
            toastMessage.textContent = message;
            toast.show();
        }

        // Search Functionality
        const tableSearch = document.getElementById('table-search');
        const rows = document.querySelectorAll('.transaction-row');

        tableSearch.addEventListener('keyup', function() {
            const query = this.value.toLowerCase();
            rows.forEach(row => {
                const text = Array.from(row.querySelectorAll('.search-target'))
                                  .map(td => td.textContent.toLowerCase())
                                  .join(' ');
                row.style.display = text.includes(query) ? '' : 'none';
            });
        });

        // Filtering Functionality
        const filterBtns = document.querySelectorAll('.status-filter-btn');
        const currentFilterSpan = document.getElementById('current-filter');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const status = this.getAttribute('data-status');
                
                // Update active state
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentFilterSpan.textContent = this.textContent;

                // Filter rows
                rows.forEach(row => {
                    if (status === 'all' || row.getAttribute('data-status') === status) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });

                showNotification('Filtrado por: ' + this.textContent);
            });
        });

        // Refresh Metrics Functionality
        document.getElementById('refresh-metrics').addEventListener('click', function() {
            const btn = this;
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Cargando...';

            setTimeout(() => {
                const metrics = document.querySelectorAll('.metric-value');
                metrics.forEach(metric => {
                    const prefix = metric.getAttribute('data-prefix') || '';
                    const suffix = metric.getAttribute('data-suffix') || '';
                    const oldValue = parseFloat(metric.getAttribute('data-value'));
                    const variation = (Math.random() * 0.2 - 0.1) * oldValue; // +/- 10%
                    const newValue = (oldValue + variation).toFixed(metric.getAttribute('data-suffix') === '%' ? 1 : 0);
                    
                    metric.textContent = prefix + parseFloat(newValue).toLocaleString() + suffix;
                    metric.setAttribute('data-value', newValue);
                });

                btn.disabled = false;
                btn.innerHTML = '<i class="bi bi-arrow-clockwise me-2"></i>Actualizar Métricas';
                showNotification('Métricas actualizadas correctamente.');
            }, 800);
        });

        // Quick Actions feedback
        document.querySelectorAll('.quick-action').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.getAttribute('title');
                showNotification('Acción ejecutada: ' + action);
            });
        });
    </script>
</body>
</html>
