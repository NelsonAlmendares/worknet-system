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
                <a href="#" class="submenu-item">Agregar</a>
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
            <p class="text-small">Operaciones</p>
        </div>

        <!-- Menus simples -->
        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('Sucursal.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bxs-food-menu' ></i>
                            Compañía
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse">
                <a href="{{ route('Branches.index') }}">
                    <span class="font_custom-white">
                        <i class='bx bx-clipboard' ></i>
                        Sucursal
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="menu-item" id="active" data-bs-toggle="collapse">
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
            <h2>Administración de Cargos</h2>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cargos</li>
                </ol>
              </nav>

              <div class="mt-5">
                <div class="card p-3">
                    <h3 class="text-center mb-3">Lista de Puestos</h3>
                    @if($positions->isEmpty())
                        <p>No hay puestos registrados.</p>
                    @else
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Requisitos</th>
                                <th>Unidad</th>
                                <th>Tipo de Puesto</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($positions as $position)
                                <tr class="text-center">
                                    <td>{{ $position->idposition }}</td>
                                    <td>{{ $position->positname }}</td>
                                    <td>{{ $position->positdesc ?? 'No disponible' }}</td>
                                    <td>{{ $position->positrequest ?? 'No disponible' }}</td>
                                    <td>{{ $position->unitA->unitname }}</td>
                                    <td>{{ $position->typePosition->typepositname ?? 'No disponible' }}</td>
                                    <td>{{ $position->estado_descripcion }}</td>
                                    <td>
                                        <a href="{{ route('Cargos.edit', $position->idposition) }}" class="btn btn-warning btn-sm">Editar <i class='bx bxs-edit-alt' ></i></a>

                                        <form id="deleteForm-{{ $position->idposition }}" action="{{ route('Cargos.destroy', $position->idposition) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm fw-bold" onclick="confirmDelete({{ $position->idposition }})">
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
                    Agregar un cargo <i class='bx bx-save custom-icon-size'></i>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar un nuevo cargo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <!-- Formulario para agregar usuario -->
                                <form action="{{ route('Cargos.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="positname">Nombre:</label>
                                        <input type="text" name="positname" id="positname" class="form-control" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="positnameb">Nombre alterno:</label>
                                        <input type="text" name="positnameb" id="positnameb" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="positdesc">Descripción:</label>
                                        <textarea name="positdesc" id="positdesc" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="positstate">Estado:</label>
                                        <input type="text" name="positstate" id="positstate" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="positrequest">Solicitud:</label>
                                        <textarea name="positrequest" id="positrequest" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="posit_idunit">Unidad A</label>
                                        <select name="posit_idunit" id="posit_idunit" class="form-control">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->idunit }}">
                                                    {{ $unit->unitname }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="posit_idunitb">Unidad B</label>
                                        <select name="posit_idunitb" id="posit_idunitb" class="form-control">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->idunit }}">
                                                    {{ $unit->unitname }}
                                                </option>
                                            @endforeach
                                        </select>                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="posit_idtypeposit">Tipo de Posición</label>
                                        <select name="posit_idtypeposit" id="posit_idtypeposit" class="form-control">
                                        
                                            @foreach ($typePositions as $typePosition)
                                                <option value="{{ $typePosition->idtypeposit }}">{{ $typePosition->typepositname }}</option>
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
                                    <div class="form-group mb-3">
                                        <label for="posit_e">Estado</label>
                                        <select class="form-select" id="posit_e" name="posit_e" required>
                                            <option value="">Elija el Status</option>
                                            @foreach ($estados as $key => $label)
                                                <option value="{{ $key }}" {{ old('posit_e') == $key ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Registrar Posición</button>
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
                timer: 9000,
                timerProgressBar: true
            });
        @endif
    });


    function confirmDelete(idposition) {
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
                document.getElementById(`deleteForm-${idposition}`).submit();
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
