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
            <h2>Manejo de Empleados</h2>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Empleados</li>
                </ol>
              </nav>

            <div class="mt-5">
                <div class="card p-3">
                    <h3 class="text-center mb-3">Lista de Empleados</h3>
                    @if($empleados->isEmpty())
                        <p>No hay empleados registrados.</p>
                    @else
                <table class="table table-striped table-hover">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            {{-- <th>Fecha de Nacimiento</th> --}}
                            <th>Email</th>
                            <th>Nombre Completo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->idemployee }}</td>
                                <td>{{ $empleado->empfname }}</td>
                                <td>{{ $empleado->empsname ?? 'No disponible' }}</td>
                                <td>{{ $empleado->empfsurname }}</td>
                                <td>{{ $empleado->empssurname ?? 'No disponible' }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($empleado->empborndate)->format('d-m-Y') }}</td> --}}
                                <td>{{ $empleado->empemail ?? 'No disponible' }}</td>
                                <td>{{ $empleado->empfullname }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm"  href="javascript:void(0);" onclick="loadEmployeeData({{ $empleado->idemployee }})">
                                        Editar <i class='bx bxs-edit-alt custom-icon-size' ></i>
                                    </a>

                                    <form id="deleteForm-{{ $empleado->idemployee }}" action="{{ route('Empleados.destroy', $empleado->idemployee) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm fw-bold" onclick="confirmDelete({{ $empleado->idemployee }})">
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
                    Agregar empleados <i class='bx bx-user-pin custom-icon-size' ></i>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Empleado</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">

                                <form action="{{ route('Empleados.store') }}" method="POST">
                                    @csrf
                                    <!-- Nombre y Apellido -->
                                    <div class="mb-3">
                                        <label for="empfname" class="form-label">Primer Nombre</label>
                                        <input type="text" class="form-control" name="empfname" id="empfname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empsname" class="form-label">Segundo Nombre</label>
                                        <input type="text" class="form-control" name="empsname" id="empsname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfsurname" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" name="empfsurname" id="empfsurname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empssurname" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" name="empssurname" id="empssurname" required>
                                    </div>

                                    <!-- Identificación y Contacto -->
                                    <div class="mb-3">
                                        <label for="empdui" class="form-label">DUI</label>
                                        <input type="text" class="form-control" name="empdui" id="empdui" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empnit" class="form-label">NIT</label>
                                        <input type="text" class="form-control" name="empnit" id="empnit" required>
                                    </div>

                                    <!-- Fecha de Nacimiento y Género -->
                                    <div class="mb-3">
                                        <label for="empborndate" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="empborndate" id="empborndate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empbgender" class="form-label">Género</label>
                                        <select class="form-control" name="empbgender" id="empbgender" required>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>

                                    <!-- Nombre Completo y Estado -->
                                    <div class="mb-3">
                                        <label for="empfullname" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" name="empfullname" id="empfullname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfullnameb" class="form-label">Nombre Completo Alternativo</label>
                                        <input type="text" class="form-control" name="empfullnameb" id="empfullnameb" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emp_e" class="form-label">Estado del Empleado</label>
                                        <select class="form-control" name="emp_e" id="emp_e" required>
                                            <option value="A">Activo</option>
                                            <option value="I">Inactivo</option>
                                        </select>
                                    </div>

                                    <!-- Email (opcional) -->
                                    <div class="mb-3">
                                        <label for="empemail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="empemail" id="empemail">
                                    </div>

                                    <button type="submit" class="btn btn-success fw-bold">
                                        Enviar Empleado <i class='bx bx-user-plus custom-icon-size' ></i>
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

            <!-- Modal para Editar Empleado -->
            <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editEmployeeModalLabel">Editar empleado</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form id="updateEmployeeForm" action="">
                                    @csrf
                                    @method('PUT') <!-- Indica que es un formulario de actualización -->

                                    <!-- Agrega el resto de los campos necesarios de la misma manera -->
                                    <div class="mb-3">
                                        <label for="empfname" class="form-label">Primer Nombre</label>
                                        <input type="text" class="form-control" name="empfname" id="editEmpFname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empsname" class="form-label">Segundo Nombre</label>
                                        <input type="text" class="form-control" name="empsname" id="editEmpSname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfsurname" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" name="empfsurname" id="editEmpFsurname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empssurname" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" name="empssurname" id="editEmpSsurname" required>
                                    </div>

                                    <!-- Identificación y Contacto -->
                                    <div class="mb-3">
                                        <label for="empdui" class="form-label">DUI</label>
                                        <input type="text" class="form-control" name="empdui" id="editEmpDui" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empnit" class="form-label">NIT</label>
                                        <input type="text" class="form-control" name="empnit" id="editEmpNit" required>
                                    </div>

                                    <!-- Fecha de Nacimiento y Género -->
                                    <div class="mb-3">
                                        <label for="empborndate" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="empborndate" id="editEmpBorndate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empbgender" class="form-label">Género</label>
                                        <select class="form-control" name="empbgender" id="editEmpGender" required>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>

                                    <!-- Nombre Completo y Estado -->
                                    <div class="mb-3">
                                        <label for="empfullname" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" name="empfullname" id="editEmpFullname" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empfullnameb" class="form-label">Nombre Completo Alternativo</label>
                                        <input type="text" class="form-control" name="empfullnameb" id="editEmpFullnameB" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emp_e" class="form-label">Estado del Empleado</label>
                                        <select class="form-control" name="emp_e" id="editEmpE" required>
                                            <option value="A">Activo</option>
                                            <option value="I">Inactivo</option>
                                        </select>
                                    </div>

                                    <!-- Email (opcional) -->
                                    <div class="mb-3">
                                        <label for="empemail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="empemail" id="editEmpEmail">
                                    </div>

                                    <button type="submit" class="btn btn-success fw-bold">
                                        Actualizar Empleado <i class='bx bx-user-plus custom-icon-size' ></i>
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

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

<script>
    // Funcion para tomar los datos a actualizar
    function loadEmployeeData(empleado) {
        // Asigna los valores de `empleado` a los campos en el formulario del modal de edición
        document.getElementById('editEmpFname').value = empleado.empfname || '';
        document.getElementById('editEmpSname').value = empleado.empsname || '';
        document.getElementById('editEmpFsurname').value = empleado.empfsurname || '';
        document.getElementById('editEmpSsurname').value = empleado.empssurname || '';
        document.getElementById('editEmpDui').value = empleado.empdui || '';
        document.getElementById('editEmpNit').value = empleado.empnit || '';
        document.getElementById('editEmpBorndate').value = empleado.empborndate || '';
        document.getElementById('editEmpGender').value = empleado.empbgender || '';
        document.getElementById('editEmpFullname').value = empleado.empfullname || '';
        document.getElementById('editEmpFullnameB').value = empleado.empfullnameb || '';
        document.getElementById('editEmpEmail').value = empleado.empemail || '';
        document.getElementById('editEmpE').value = empleado.emp_e || '';

        // Cambia el `action` del formulario para apuntar a la ruta de actualización
        document.getElementById('updateEmployeeForm').action = `/Empleados/${empleado.idemployee}`;
    }

    // Alerts para las acciones del usuario
    document.addEventListener("DOMContentLoaded", function() {
        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ Session::get('success') }}",
                confirmButtonText: 'OK'
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

    function confirmDelete(employeeId) {
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
                document.getElementById(`deleteForm-${employeeId}`).submit();
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

    /* Funcion para mostrar errores de sql */
    document.addEventListener('DOMContentLoaded', function () {
        @if(Session::has('success') || $errors->has('error'))
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        @endif
    });
</script>

<script>
    // Cargar datos del empleado en el modal de edición
    function loadEmployeeData(employeeId) {
        if (!employeeId) {
            console.error("El ID del empleado no está definido.");
            return;
        }

        fetch(`/personaRegister/${employeeId}/edit`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud: ' + response.status);
                }
                return response.json();
            })
            .then(employee => {
                openEditModal(employee); // Llama a la función que llena el modal
            })
            .catch(error => {
                console.error("Error al cargar los datos del empleado:", error);
            });
    }

    function openEditModal(employee) {
        document.getElementById('editEmpFname').value = employee.empfname || '';
        document.getElementById('editEmpSname').value = employee.empsname || '';
        document.getElementById('editEmpFsurname').value = employee.empfsurname || '';
        document.getElementById('editEmpSsurname').value = employee.empssurname || '';
        document.getElementById('editEmpDui').value = employee.empdui || '';
        document.getElementById('editEmpNit').value = employee.empnit || '';
        document.getElementById('editEmpBorndate').value = employee.empborndate || '';
        document.getElementById('editEmpGender').value = employee.empbgender || '';
        document.getElementById('editEmpFullname').value = employee.empfullname || '';
        document.getElementById('editEmpFullnameB').value = employee.empfullnameb || '';
        document.getElementById('editEmpE').value = employee.emp_e || '';
        document.getElementById('editEmpEmail').value = employee.empemail || '';

        // Asegura que el formulario tenga la URL correcta para actualizar el empleado
        document.getElementById('updateEmployeeForm').action = `/Empleados/${employee.idemployee}`;

        // Abre el modal
        var editEmployeeModal = new bootstrap.Modal(document.getElementById('editEmployeeModal'));
        editEmployeeModal.show();
    }

    // Enviar el formulario de actualización mediante AJAX
    document.getElementById('updateEmployeeForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío normal

        let formData = new FormData(this);
        let url = this.action;

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'X-HTTP-Method-Override': 'PUT'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire('Actualizado', 'El empleado fue actualizado exitosamente', 'success');
                $('#editEmployeeModal').modal('hide');
                // Actualiza la tabla u otros elementos según sea necesario
            } else {
                Swal.fire('Error', 'Hubo un problema al actualizar', 'error');
            }
        })
        .catch(error => {
            Swal.fire('Error', 'No se pudo conectar con el servidor', 'error');
            console.error(error);
        });
    });
</script>



</body>
</html>
