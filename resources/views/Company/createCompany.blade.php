<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse" data-bs-target="#dashboard">
                <a href="{{ route('welcome') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-dashboard' ></i>
                        Dashboard
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('Empleados.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-user' ></i>
                        Empleados
                    </span>
                </a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">GESTION</p>
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
                <a href="#" class="submenu-item">Agregar</a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">FUNCIONES</p>
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
                <a href="{{ route('Department.index') }}" class="submenu-item">Agregar departamento</a>
                <a href="#" class="submenu-item">Reportes</a>
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
                <a href="{{ route('District.index') }}" class="submenu-item">Agregar distritos</a>
                <a href="#" class="submenu-item">Reportes</a>
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
                <a href="{{ route('Municip.index') }}" class="submenu-item">Agregar municipios</a>
                <a href="{{ route('MunicipNew.index') }}" class="submenu-item">Agregar municipios (nuevos)</a>

            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">OPERACIONES</p>
        </div>

        <!-- Menus simples -->
        <div>
            <div class="menu-item" id="active" data-bs-toggle="collapse">
                <a href="{{ route('Branches.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-food-menu' ></i>
                            Compañía
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('Sucursal.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bx-clipboard' ></i>
                        Sucursal
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('Cargos.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bx-list-check' ></i>
                        Cargo
                    </span>
                </a>
            </div>
        </div>

        <div class="list-menu-small">
            <p class="text-small">ACTIVOS</p>
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


        <div>
            <div class="menu-item" data-bs-toggle="collapse" data-bs-target="#activo">
                <span class="font_custom-white">
                    <i class='bx bxs-briefcase-alt-2'></i>
                    Manejo de activos
                </span>
                <i class="fas fa-chevron-down font_custom-white"></i>
            </div>
            <div class="collapse submenu" id="activo">
                <a href="{{ route('Department.index') }}" class="submenu-item">Deprecacion</a>
                <a href="{{ route('Department.index') }}" class="submenu-item">Fuente Financiera</a>
                <a href="{{ route('Department.index') }}" class="submenu-item">Vida Util</a>
                <a href="{{ route('Department.index') }}" class="submenu-item">Tipo de bien contable</a>
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
                                  <span class="badge bg-warning rounded-pill">24</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nuevos grupos</div>
                                    Contacte con soporte tecnico
                                  </div>
                                  <span class="badge bg-primary rounded-pill">17</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Alertas</div>
                                    Contacte con soporte tecnico
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
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
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
            <h2>Administración de Empresas</h2>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Empresas</li>
                </ol>
            </nav>

            <div class="mt-5">
                <div class="card p-3">
                    <h4 class="text-center mb-3">Listado de Empresas</h4>
                    @if($companies->isEmpty())
                        <p>No hay empresas registradas.</p>
                    @else
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Empresa</th>
                                <th>NIT</th>
                                <th>Registro</th>
                                <th>Nacimiento</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr class="text-center">
                                    <td>{{ $company->idcompany }}</td>
                                    <td>{{ $company->compname }}</td>
                                    <td>{{ $company->compdesc }}</td>
                                    <td>{{ $company->compsr }}</td>
                                    <td>{{ $company->compnit }}</td>
                                    <td>{{ $company->compnrc }}</td>
                                    <td>{{ $company->fecha_formateada }}</td>
                                    <td>{{ $company->estado_descripcion ?? 'No disponible' }}</td>
                                    <td>
                                        <a href="{{ route('Sucursal.edit', $company->idcompany) }}" class="btn btn-warning btn-sm">Editar</a>

                                        <form id="deleteForm-{{ $company->idcompany }}" action="{{ route('Sucursal.destroy', $company->idcompany) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm fw-bold" onclick="confirmDelete({{ $company->idcompany }})">
                                                Eliminar <i class='bx bxs-trash custom-icon-size'></i>
                                            </button>
                                        </form>
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
                    Agregar Empresas <i class='bx bx-user-pin custom-icon-size' ></i>
                </button>

                <button type="button" onclick="showCommingSoon()" class="btn btn-dark btn-custom-size fw-bold">
                    Repores <i class='bx bxs-report custom-icon-size' ></i>
                </button>
            </div>

            <!-- Modal para agregar datos -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <!-- Formulario para agregar usuario -->
                                <form action="{{ route('Sucursal.store') }}" method="POST">
                                    @csrf

                                    <!-- Nombre de Usuario -->
                                    <div class="mb-3">
                                        <label for="compname" class="form-label">Nombre de la empresa</label>
                                        <input type="text" class="form-control" name="compname" id="compname" required>
                                    </div>

                                    <!-- ID del Empleado -->
                                    <div class="mb-3">
                                        <label for="compdesc" class="form-label">Descripción</label>
                                        <input type="text" class="form-control" name="compdesc" id="compdesc" required>
                                    </div>

                                    <!-- ID del Empleado -->
                                    <div class="mb-3">
                                        <label for="compsr" class="form-label">Empresa</label>
                                        <input type="text" class="form-control" name="compsr" id="compsr" required>
                                    </div>

                                    <!-- ID del Empleado -->
                                    <div class="mb-3">
                                        <label for="compnit" class="form-label">NIT</label>
                                        <input type="text" class="form-control" name="compnit" id="compnit" required>
                                    </div>
                                    <!-- Contraseña -->
                                    <div class="mb-3">
                                        <label for="compnrc" class="form-label">Registro</label>
                                        <input type="number" class="form-control" name="compnrc" id="compnrc" required>
                                    </div>

                                    <!-- ID del Empleado -->
                                    <div class="mb-3">
                                        <label for="compborndate" class="form-label">Nacimiento</label>
                                        <input type="date" class="form-control" name="compborndate" id="compborndate" required>
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
                                        <label for="comp_e" class="form-label">Estado</label>
                                        <select name="comp_e" id="comp_e" class="form-control" required>
                                            <option value="">Elija el Status</option>
                                            @foreach ($estados as $key => $label)
                                                <option value="{{ $key }}" {{ old('comp_e') == $key ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success fw-bold">
                                        Crear Empresas <i class='bx bx-user-plus custom-icon-size'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">
                                Cerrar <i class='bx bxs-x-circle custom-icon-size'></i>
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
                timer: 8000,
                timerProgressBar: true
            });
        @endif
    });


    function confirmDelete(idcompany) {
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
                document.getElementById(`deleteForm-${idcompany}`).submit();
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
