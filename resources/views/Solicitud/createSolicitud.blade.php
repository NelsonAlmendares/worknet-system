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
<body id="no-active-modal-before">

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
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <span class="font_custom-white">
                    <i class='bx bxs-dashboard' ></i>
                    Dashboard
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

        <div class="list-menu-small">
            <p class="text-small">Gestión</p>
        </div>
        <!-- Menus deplegables -->
        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#users">
                <span class="font_custom-white">
                    <i class='bx bxs-user-rectangle margin-top-icon'></i>
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
                <a href="#" class="submenu-item">General</a>
                <a href="#" class="submenu-item">Security</a>
                <a href="#" class="submenu-item">Preferences</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">Funciones</p>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#department">
                <span class="font_custom-white">
                    <i class='bx bx-map-alt' ></i>
                    Departamentos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="department">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#district">
                <span class="font_custom-white">
                    <i class='bx bxs-institution' ></i>
                    Distritos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="district">
                <a href="#" class="submenu-item ">Analytics</a>
                <a href="#" class="submenu-item">Reports</a>
                <a href="#" class="submenu-item">Statistics</a>
            </div>
        </div>

        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#municip">
                <span class="font_custom-white">
                    <i class='bx bxs-school' ></i>
                    Municipios
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="municip">
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
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#">
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
            <h2>Manejo de Solicitudes (activo fijo)</h2>
            @php
            use Carbon\Carbon;
        @endphp

            <div class="mt-5">
                <div class="card p-3">
                    <h3 class="text-center mb-3">Lista de Solicitudes (activo fijo)</h3>
                    @if($solicitudes->isEmpty())
                        <p>Aún no hay registros de solicitudes.</p>
                    @else
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Código</th>
                            <th>Activo</th>
                            <th>Accion solicitada</th>
                            <th>Responsable</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitudes as $solicitud)
                            <tr class="text-center">
                                <td>{{ $solicitud->slog_id }}</td>
                                <td>{{ $solicitud->slog_codigo_af }}</td>
                                <td>{{ $solicitud->activo->a_nombre }}</td>
                                <td>{{ $solicitud->slog_accion }}</td>
                                <td>{{ $solicitud->employee->empfname }} {{ $solicitud->employee->empfsurname }}</td>
                                <td>{{ $solicitud->slog_comentario  }}</td>
                                <td>
                                    <a href="{{ route('Solicitud.edit', $solicitud->slog_id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <!--<form id="deleteForm-{{ $solicitud->slog_id }}" action="{{ route('Solicitud.destroy', $solicitud->slog_id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm fw-bold" onclick="confirmDelete({{ $solicitud->slog_id }})">
                                            Eliminar <i class='bx bxs-trash custom-icon-size'></i>
                                        </button>
                                    </form>-->

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @endif

                </div>
            </div>

            <div class="add-center">
                <button type="button" class="btn btn-secondary btn-custom-size fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Solicitud (activo fijo) <i class='bx bx-user-pin custom-icon-size' ></i>
                </button>

                <button type="button" onclick="showCommingSoon()" class="btn btn-dark btn-custom-size fw-bold">
                    Reportes <i class='bx bxs-report custom-icon-size' ></i>
                </button>
            </div>

            <!-- Modal para agregar datos -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Solicitud (activo fijo)</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">

                                <form action="{{ route('Solicitud.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="slog_id_emp" class="form-label">Responsable</label>
                                        <select class="form-select" id="slog_id_emp" name="slog_id_emp" required>
                                            <option value="">Seleccione un responsable</option>
                                            @foreach ($empleados as $empleado)
                                                <option value="{{ $empleado->idemployee }}" {{ old('slog_id_emp') == $empleado->idemployee ? 'selected' : '' }}>
                                                    {{ $empleado->empfname}} {{ $empleado->empfsurname }} 
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="slog_accion" class="form-label">Acción</label>
                                        <select class="form-select" id="slog_accion" name="slog_accion" required>
                                            <option value="">Seleccione una acción a realizar</option>
                                            <option value="Crear" {{ old('slog_accion') == "Crear" ? 'selected' : '' }}>Crear</option>
                                            <option value="Activar" {{ old('slog_accion') == "Activar" ? 'selected' : '' }}>Activar</option>
                                            <option value="Desactivar" {{ old('slog_accion') == "Desactivar" ? 'selected' : '' }}>Desactivar</option>
                                            <option value="Retirar" {{ old('slog_accion') == "Retirar" ? 'selected' : '' }}>Retirar</option>
                                            <option value="Eliminar" {{ old('slog_accion') == "Eliminar" ? 'selected' : '' }}>Eliminar</option>
                                            <option value="Suspender" {{ old('slog_accion') == "Suspender" ? 'selected' : '' }}>Suspender</option>
                                            <option value="Contingentar" {{ old('slog_accion') == "Contingentar" ? 'selected' : '' }}>Contingentar</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="slog_cod_af" class="form-label">Activo fijo</label>
                                        <select class="form-select" id="slog_cod_af" name="slog_cod_af" required>
                                            <option value="">Seleccione un activo fijo</option>
                                            @foreach ($activos as $activo)
                                                <option value="{{ $activo->id_activo }}" {{ old('slog_cod_af') == $activo->id_activo ? 'selected' : '' }}>
                                                    {{ $activo->a_nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="slog_comentario" class="form-label">Comentario</label>
                                        <input type="text" class="form-control" name="slog_comentario" id="slog_comentario" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success fw-bold">
                                        Enviar Solicitud (activo fijo) <i class='bx bx-user-plus custom-icon-size' ></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">
                                Cerrar <i class='bx bxs-x-circle custom-icon-size' ></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

          </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

<script>
    // Alerts para las acciones del usuario
    document.addEventListener("DOMContentLoaded", function() {
        let modal = document.getElementById('exampleModal');

        @if (Session::has('success'))
            // Mostrar el Toast de éxito
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ Session::get('success') }}",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if ($errors->has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ $errors->first('error') }}",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
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
                setTimeout(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: "{{ Session::get('success') }}",
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                }, 2000);
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
