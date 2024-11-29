<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMINISTRACION</title>
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
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <span class="font_custom-white">
                    <i class='bx bx-bar-chart-alt-2' ></i>
                    Administración
                </span>
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
                <a href="#" class="submenu-item">User List</a>
                <a href="#" class="submenu-item">Add User</a>
                <a href="#" class="submenu-item">User Groups</a>
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
                <a href="#" class="submenu-item">General</a>
                <a href="#" class="submenu-item">Security</a>
                <a href="#" class="submenu-item">Preferences</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-folder' ></i>
                    Modulos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-file' ></i>
                    Reportes
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Funciones</p>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bx-map' ></i>
                    Países
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bx-map-alt' ></i>
                    Departamentos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-institution' ></i>
                    Distritos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-school' ></i>
                    Municipios
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Operaciones</p>
        </div>

        <!-- Menus simples -->
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-food-menu' ></i>
                    Compañía
                </span>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bx-clipboard' ></i>
                    Sucursal
                </span>
            </div>
        </div>

        <div>
            <div class="menu-item" id="active" data-bs-toggle="collapse" data-bs-target="#">
                <span class="font_custom-white">
                    <i class='bx bxs-user' ></i>
                    Empleado
                </span>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <span class="font_custom-white">
                    <i class='bx bx-list-check' ></i>
                    Cargo
                </span>
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
                    <i class='bx bx-bell session-icon' ></i>
                    <i class='bx bx-moon session-icon' ></i>
                    <i class='bx bx-user session-icon' ></i>
                </span>
              </div>
            </div>
          </nav>

          <div class="p-4">
            <h2>Manejo de Solicitud (activo fijo)</h2>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Solicitud (activo fijo)</li>
                  <li class="breadcrumb-item active" aria-current="page">Actualización</li>
                </ol>
              </nav>

            <div class="mt-5">
                <div class="card container p-3">
                    <h3 class="text-center mb-3">Actualizar Solicitud (activo fijo)</h3>

                    <form action="{{ route('Solicitud.update', $solicitud->slog_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="slog_id_emp" class="form-label">Responsable</label>
                            <select class="form-select" id="slog_id_emp" name="slog_id_emp" required>
                                <option value="">Seleccione un responsable</option>
                                @foreach ($empleados as $empleado)
                                    <option value="{{ $empleado->idemployee }}" {{ old('slog_id_emp', $solicitud->slog_id_emp) == $empleado->idemployee ? 'selected' : '' }}>
                                        {{ $empleado->empfname}} {{ $empleado->empfsurname }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="slog_accion" class="form-label">Acción</label>
                            <select class="form-select" id="slog_accion" name="slog_accion" required>
                                <option value="">Seleccione una acción a realizar</option>
                                <option value="Crear" {{ old('slog_accion', $solicitud->slog_accion) == "Crear" ? 'selected' : '' }}>Crear</option>
                                <option value="Activar" {{ old('slog_accion', $solicitud->slog_accion) == "Activar" ? 'selected' : '' }}>Activar</option>
                                <option value="Desactivar" {{ old('slog_accion', $solicitud->slog_accion) == "Desactivar" ? 'selected' : '' }}>Desactivar</option>
                                <option value="Retirar" {{ old('slog_accion', $solicitud->slog_accion) == "Retirar" ? 'selected' : '' }}>Retirar</option>
                                <option value="Eliminar" {{ old('slog_accion', $solicitud->slog_accion) == "Eliminar" ? 'selected' : '' }}>Eliminar</option>
                                <option value="Suspender" {{ old('slog_accion', $solicitud->slog_accion) == "Suspender" ? 'selected' : '' }}>Suspender</option>
                                <option value="Contingentar" {{ old('slog_accion', $solicitud->slog_accion) == "Contingentar" ? 'selected' : '' }}>Contingentar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="slog_cod_af" class="form-label">Activo fijo</label>
                            <select class="form-select" id="slog_cod_af" name="slog_cod_af" required>
                                <option value="">Seleccione un activo fijo</option>
                                @foreach ($activos as $activo)
                                    <option value="{{ $activo->id_activo }}" {{ old('slog_cod_af', $solicitud->slog_cod_af) == $activo->id_activo ? 'selected' : '' }}>
                                        {{ $activo->a_nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="slog_comentario" class="form-label">Comentario</label>
                            <input type="text" class="form-control" name="slog_comentario" id="slog_comentario" value="{{ $solicitud->slog_comentario }}" required>
                        </div>
                        <div class="update-option">
                            <button type="submit" class="btn btn-primary espaciado">Actualizar Vida Útil</button>
                            <a href="{{ route('Solicitud.index') }}" class="btn btn-secondary espaciado">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
</div>

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
                window.location.href = "{{ url('solicitud') }}";
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

</body>
</html>
