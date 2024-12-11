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
                <a href="{{ route('welcome') }}">
                    <span class="">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Logo_del_Gobierno_de_El_Salvador_%282019%29.svg/996px-Logo_del_Gobierno_de_El_Salvador_%282019%29.svg.png"
                            class="img-fluid logo-img" alt="">
                    </span>
                </a>
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
            <div class="menu-item" id="active" data-bs-toggle="collapse">
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
                <a href="{{ route('Rol.index') }}" class="submenu-item">Agregar Roles</a>
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
                <a href="{{ route('Depreciacion.index') }}" class="submenu-item">Deprecacion</a>
                <a href="{{ route('FuenteFinanciera.index') }}" class="submenu-item">Fuente Financiera</a>
                <a href="{{ route('VidaUtil.index') }}" class="submenu-item">Vida Util</a>
                <a href="{{ route('BienContable.index') }}" class="submenu-item">Tipo de bien contable</a>
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
            <h2 class="greet">Manejo de Empleados</h2>

            <div class="mt-5">
                <div class="container">
                    <h3 class="text-center mb-3">Actualizar Empleado</h3>

                    <form action="{{ route('Empleados.update', $empleado->idemployee) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row d-flex">
                            <div class="col-md-6">
                                <div class="p-1">
                                    <!-- Aquí van los mismos campos del formulario de creación, pero con los valores de $empleado -->
                                    <div class="mb-3">
                                        <label for="empfname" class="form-label">Primer Nombre</label>
                                        <input type="text" class="form-control" name="empfname" value="{{ $empleado->empfname }}" id="editEmpFname" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="empsname" class="form-label">Segundo Nombre</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empsname }}" name="empsname" id="editEmpSname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfsurname" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empfsurname }}" name="empfsurname" id="editEmpFsurname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empssurname" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empssurname }}" name="empssurname" id="editEmpSsurname" required>
                                    </div>

                                    <!-- Identificación y Contacto -->
                                    <div class="mb-3">
                                        <label for="empdui" class="form-label">DUI</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empdui }}" name="empdui" id="editEmpDui" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empnit" class="form-label">NIT</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empnit }}" name="empnit" id="editEmpNit" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1">
                                    <!-- Fecha de Nacimiento y Género -->
                                    <div class="mb-3">
                                        <label for="empborndate" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" value="{{ $empleado->empborndate }}" name="empborndate" id="editEmpBorndate" required>
                                    </div>

                                    <div class="mb-3">
                                    <label for="empbgender" class="form-label">Género</label>
                                    <select class="form-select" value="{{ $empleado->empbgender }}" name="empbgender" id="editEmpGender" required>
                                        <option value="M">Masculino</option>
                                        <option val ue="F">Femenino</option>
                                    </select>
                                    </div>

                                    <!-- Nombre Completo y Estado -->
                                    <div class="mb-3">
                                        <label for="empfullname" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empfullname }}" name="empfullname" id="editEmpFullname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfullnameb" class="form-label">Nombre Completo Alternativo</label>
                                        <input type="text" class="form-control" value="{{ $empleado->empfullnameb }}" name="empfullnameb" id="editEmpFullnameB" required>
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
                                    <div class="mb-3">
                                        <label for="emp_e" class="form-label">Estado del Empleado</label>
                                        <select class="form-select" value="{{ $empleado->emp_e }}" name="emp_e" id="editEmpE" required>
                                            @foreach ($estados as $key => $label)
                                                <option value="{{ $key }}" {{ old('emp_e', $empleado->emp_e ?? '') == $key ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Email (opcional) -->
                                    <div class="mb-3">
                                        <label for="empemail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="empemail" value="{{ $empleado->empemail }}" id="editEmpEmail">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="update-option">
                            <button type="submit" class="btn btn-success espaciado">Actualizar Empleado <i class='bx bx-save' ></i></button>
                            <a href="{{ route('Empleados.index') }}" class="btn btn-secondary espaciado">Cancelar <i class='bx bxs-message-alt-x' ></i></a>
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
        <span class="text-muted">&copy; {{ date('Y') }} Gobierno de El Salvador || Consejo Nacional de Ciencia y Tecnologia</span>
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

{{-- Funcion para las flechas del menu --}}
<script>
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function() {
            const chevron = this.querySelector('.fa-chevron-down');
            chevron.classList.toggle('rotate-icon');
        });
    });

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
                window.location.href = "{{ url('personaRegister') }}";
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

</script>

</body>
</html>
