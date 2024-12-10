<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SUCURSALES</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="d-flex">
    <div class="sidebar">
        <div>
            <div class="menu-item logo_banner" data-bs-toggle="collapse" data-bs-target="">
                <span class="">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Logo_del_Gobierno_de_El_Salvador_%282019%29.svg/996px-Logo_del_Gobierno_de_El_Salvador_%282019%29.svg.png"
                    class="img-fluid logo-img" alt="">
                </span>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">MENU</p>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <a href="{{ route('welcome') }}" class="text-decoration-none font_custom-white">
                        <i class='bx bxs-dashboard'></i>
                        Dashboard
                    </a>
                </span>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <a href="{{ route('Empleados.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-user' ></i>
                        Empleados
                    </span>
                </a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Gestión</p>
        </div>
        <!-- Menus deplegables -->
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#users">
                <span class="font_custom-white">
                    <i class='bx bxs-user' ></i>
                    Usuarios
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="users">
                <a href="{{ route('Usuarios.index') }}" class="submenu-item">Agregar Usuario</a>
            </div>
        </div>

        <!-- Third Menu Item -->
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#settings">
                <span class="font_custom-white">
                    <i class='bx bxs-cog' ></i>
                    Roles
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="settings">
                <a href="{{ route('Rol.index') }}" class="submenu-item">Agregar rol</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Funciones</p>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#departments">
                <span class="font_custom-white">
                    <i class='bx bx-map-alt' ></i>
                    Departamentos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="departments">
                <a href="{{ route('Department.index') }}" class="submenu-item">Agregar departamento</a>
                <a href="#" class="submenu-item">Reportes</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#districts">
                <span class="font_custom-white">
                    <i class='bx bxs-institution' ></i>
                    Distritos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="districts">
                <a href="{{ route('District.index') }}" class="submenu-item">Agregar distritos</a>
                <a href="#" class="submenu-item">Reportes</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#municips">
                <span class="font_custom-white">
                    <i class='bx bxs-school' ></i>
                    Municipios
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="municips">
                <a href="{{ route('Municip.index') }}" class="submenu-item">Agregar municipios</a>
                <a href="{{ route('MunicipNew.index') }}" class="submenu-item">Agregar municipios (nuevos)</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Operaciones</p>
        </div>

        <!-- Menus simples -->
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <a href="{{ route('Sucursal.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-food-menu' ></i>
                            Compañía
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="active" data-bs-toggle="collapse" data-bs-target="#">
                <a href="{{ route('Branches.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bx-clipboard' ></i>
                        Sucursal
                    </span>
                </a>
            </div>
        </div>
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <a href="{{ route('Cargos.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bx-list-check' ></i>
                        Cargo
                    </span>
                </a>
            </div>
        </div>
        <div class="list-menu-small">
            <p class="text-small">Activos</p>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('activos.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxl-react'></i>
                        Activo Fijo
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->

    <div class="main">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item d-flex">
                    <i class='bx bx-search search-icon'></i>
                    <input type="text" class="form-control search-input" id="" aria-describedby="">
                  </li>
                </ul>
                <span class="navbar-text">
                    <!-- Notificaciones -->
                    <div class="btn-group dropstart">
                        <i class="bx bx-bell session-icon" data-bs-toggle="dropdown" aria-expanded="false"></i>

                        <ul class="dropdown-menu notifications">
                            <ol class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Actualizaciones</div>
                                    Contacte con soporte tecnico
                                  </div>
                                  <span class="badge bg-success rounded-pill">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nuevos grupos</div>
                                    Mantenrme informado de las nuevas actualizaciones
                                  </div>
                                  <span class="badge bg-primary rounded-pill">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Alertas</div>
                                    Administre las notificaciones segun el orden de llegada
                                  </div>
                                  <span class="badge bg-danger rounded-pill">4</span>
                                </li>
                              </ol>
                        </ul>
                    </div>

                    <!-- Modo oscuro -->
                    <div class="btn-group dropstart">
                        <i class="bx bx-moon session-icon" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-secondary" href="#">En mantenimiento</a></li>
                        </ul>
                    </div>

                    <!-- Usuario -->
                    <div class="btn-group dropstart">
                        <i class="bx bx-user session-icon" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu">
                            <!-- Botón de Cerrar Sesión -->
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button id="logout-button" type="submit" class="dropdown-item text-danger">
                                        Cerrar Sesión 
                                        <i class="bx bx-log-in topbar-icon text-danger"></i>
                                    </button>
                                </form>
                            </li>
                            
                            <!-- Configuración -->
                            <li>
                                <a class="dropdown-item text-secondary" href="#">
                                    Configuración 
                                    <i class="bx bxs-face topbar-icon text-secondary"></i>
                                </a>
                            </li>

                            <!-- Soporte -->
                            <li>
                                <a class="dropdown-item text-secondary" href="#">
                                    Soporte 
                                    <i class="bx bx-support topbar-icon text-info"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </span>
              </div>
            </div>
        </nav>

          <div class="p-4">
            <h2 class="greet">Manejo de Sucursales</h2>

            <div class="mt-5">
                <div class="container">
                    <h3 class="text-center mb-3">Actualizar Sucursal</h3>

                    <form action="{{ route('Branches.update', $branch->idbranch) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Nombre de la Sucursal -->
                        <div class="mb-3">
                            <label for="brnname" class="form-label">Nombre de la Sucursal</label>
                            <input type="text" class="form-control" name="brnname" id="brnname" value="{{ $branch->brnname }}" required>
                        </div>

                        <!-- Fecha de Nacimiento -->
                        <div class="mb-3">
                            <label for="brnborndate" class="form-label">Fecha de Fundación</label>
                            <input type="date" class="form-control" name="brnborndate" id="brnborndate" value="{{ $branch->brnborndate }}" required>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="brnemail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="brnemail" id="brnemail" value="{{ $branch->brnemail }}" required>
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="brntel" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="brntel" id="brntel" value="{{ $branch->brntel }}" required>
                        </div>

                        <!-- ID de la Compañía -->
                        <div class="mb-3">
                            <label for="brn_compid" class="form-label">Compañía</label>
                            <select name="brn_compid" id="brn_compid" class="form-control" required>
                                <option value="">Elija la compañia</option>
                                @foreach ($companies as $comp)
                                    <option value="{{ $comp->idcompany }}" {{ old('brn_compid', $branch->brn_compid ?? '') == $comp->idcompany ? 'selected' : '' }}>
                                        {{ $comp->compname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @php
                            $estados = [
                            'A' => 'Activo',
                            'S' => 'Suspendido',
                            'I' => 'Inactivo',
                            'R' => 'Retirado',
                            'E' => 'Eliminado',
                            'C' => 'Contingente',
                            ];
                        @endphp

                        <!-- Estado -->
                        <div class="mb-3">
                            <label for="brn_e" class="form-label">Estado</label>
                            <select name="brn_e" id="brn_e" class="form-control" required>
                                <option value="">Elija el Status</option>
                                @foreach ($estados as $key => $label)
                                    <option value="{{ $key }}" {{ old('brn_e', $branch->brn_e ?? '') == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="update-option">
                            <button type="submit" class="btn btn-success espaciado">
                                Actualizar Sucursal <i class='bx bxs-save' ></i>
                            </button>
                            <a href="{{ route('Branches.index') }}" class="btn btn-secondary espaciado">
                                Cancelar <i class='bx bxs-message-alt-x' ></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <span class="text-muted">&copy; 2024 Gobierno de El Salvador || Consejo Nacional de Ciencia y Tecnologia</span>
        <span>
            <a href="#" class="text-muted me-3">Términos</a>
            <a href="#" class="text-muted">Privacidad</a>
        </span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

<script>
    // Alerts para las acciones del usuario
    document.addEventListener("DOMContentLoaded", function() {
        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ Session::get('success') }}",
                confirmButtonText: 'OK'
            }).then((result) => {
            if (result.isConfirmed) {
                // Redirige a la página deseada
                window.location.href = "{{ url('branchRegister') }}";
            }
        });
        @endif

        @if ($errors->has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ $errors->first('error') }}",
                confirmButtonText: 'OK'
            });
        @endif
    });

    function confirmDelete(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Esta acción no se puede deshacer!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`deleteForm-${id}`).submit();
            }
        });
    }
    function showCommingSoon () {
        Swal.fire({
            title: "Próximamente...",
            text: "Actualmente en desarrollo",
            icon: "info"
        });
    }
</script>

{{-- Funcion para las flechas del menu --}}
<script>
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function() {
            const chevron = this.querySelector('.fa-chevron-down');
            chevron.classList.toggle('rotate-icon');
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const logoutButton = document.getElementById('logout-button');
        const logoutForm = document.getElementById('logout-form');

        logoutButton.addEventListener('click', function (event) {
            event.preventDefault();  // Prevenir que el formulario se envíe inmediatamente

            // Mostrar el Toast con la notificación
            Swal.fire({
                icon: 'success',
                title: 'Cerrando sesion',
                text: 'Espere mientras se limpian datos.',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1700,  // Esperar 3 segundos
                timerProgressBar: true,
            });

            // Retrasar el envío del formulario
            setTimeout(() => {
                logoutForm.submit();  // Enviar el formulario después de 3 segundos
            }, 2000);  // Retraso de 3 segundos
        });
    });
</script>

</body>
</html>
