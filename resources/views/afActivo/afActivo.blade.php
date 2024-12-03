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
            <div class="menu-item" id="no-hover" data-bs-toggle="collapse" data-bs-target="#">
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

        <div>
            <div class="menu-item" id="active" data-bs-toggle="collapse">
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
                    <i class='bx bx-bell session-icon' ></i>
                    <i class='bx bx-moon session-icon' ></i>
                    <i class='bx bx-user session-icon' ></i>
                </span>
              </div>
            </div>
          </nav>

          <div class="p-4">
            <h2>Activos</h2>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Activos</li>
                </ol>
              </nav>

            <div class="mt-5">
                <div class="card p-3">
                    <h3 class="text-center mb-3">Activos fijos y contables</h3>
                    @if($activos->isEmpty())
                        <p>No hay activos registrados.</p>
                    @else
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Codigo de activo</th>
                            <th>Tipo de bien</th>
                            <th>Fuente Financiera</th>
                            <th>Perteneciente</th>
                            <th>Nombre del bien</th>
                            {{-- <th>Fecha de Nacimiento</th> --}}
                            <th>Modelo</th>
                            <th>Vida util</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activos as $activo)
                            <tr class="text-center">
                                <td>{{ $activo->a_cod_activo_interno_ant }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($empleado->empborndate)->format('d-m-Y') }}</td> --}}
                                <td>{{ $activo->a_codigo_activo ?? 'No disponible' }}</td>
                                <td>{{ $activo->a_id_tb_contable }}</td>
                                <td>{{ $activo->a_id_f_financiera }}</td>
                                <td>{{ $activo->a_responsable_id_emp }}</td>
                                <td>{{ $activo->a_nombre }}</td>
                                <td>{{ $activo->a_modelo }}</td>
                                <td>{{ $activo->a_vidautil }}</td>
                                <td>

                                    <a href="{{ route('activos.edit', $activo->id_activo) }}" class="btn btn-warning btn-sm">Editar</a>

                                    <form id="deleteForm-{{ $activo->id_activo }}" action="{{ route('activos.destroy', $activo->id_activo) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm fw-bold" onclick="confirmDelete({{ $activo->id_activo }})">
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

                            <form action="{{ route('activos.store') }}" method="POST">
                                @csrf

                                <div class="form-group mb-2">
                                    <label for="a_cod_activo_interno_ant">Código Interno Anterior</label>
                                    <input type="text" name="a_cod_activo_interno_ant" class="form-control" value="{{ old('a_cod_activo_interno_ant') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_codigo_activo">Código del Activo</label>
                                    <input type="text" name="a_codigo_activo" class="form-control" value="{{ old('a_codigo_activo') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_id_tb_contable">Tipo Bien Contable</label>
                                    <input type="number" name="a_id_tb_contable" class="form-control" value="{{ old('a_id_tb_contable') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_id_f_financiera">Fuente Financiera</label>
                                    <input type="number" name="a_id_f_financiera" class="form-control" value="{{ old('a_id_f_financiera') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_responsable_id_emp">Responsable</label>
                                    <input type="number" name="a_responsable_id_emp" class="form-control" value="{{ old('a_responsable_id_emp') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_nombre">Nombre</label>
                                    <input type="text" name="a_nombre" class="form-control" value="{{ old('a_nombre') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_desc">Descripción</label>
                                    <textarea name="a_desc" class="form-control">{{ old('a_desc') }}</textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_tipo">Tipo</label>
                                    <input type="text" name="a_tipo" class="form-control" value="{{ old('a_tipo') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_color">Color</label>
                                    <input type="text" name="a_color" class="form-control" value="{{ old('a_color') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_marca">Marca</label>
                                    <input type="text" name="a_marca" class="form-control" value="{{ old('a_marca') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_modelo">Modelo</label>
                                    <input type="text" name="a_modelo" class="form-control" value="{{ old('a_modelo') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_n_serie">Número de Serie</label>
                                    <input type="text" name="a_n_serie" class="form-control" value="{{ old('a_n_serie') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_valor_dolar">Valor en Dólares</label>
                                    <input type="number" step="0.01" name="a_valor_dolar" class="form-control" value="{{ old('a_valor_dolar') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_valor_colon">Valor en Colones</label>
                                    <input type="number" step="0.01" name="a_valor_colon" class="form-control" value="{{ old('a_valor_colon') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_fecha_ingreso">Fecha de Ingreso</label>
                                    <input type="date" name="a_fecha_ingreso" class="form-control" value="{{ old('a_fecha_ingreso') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_fecha_compra">Fecha de Compra</label>
                                    <input type="date" name="a_fecha_compra" class="form-control" value="{{ old('a_fecha_compra') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_fac_respaldo">Factura de Respaldo</label>
                                    <input type="text" name="a_fac_respaldo" class="form-control" value="{{ old('a_fac_respaldo') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_acta_recepcion">Acta de Recepción</label>
                                    <input type="text" name="a_acta_recepcion" class="form-control" value="{{ old('a_acta_recepcion') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_ubicacion_desc">Descripción de la Ubicación</label>
                                    <textarea name="a_ubicacion_desc" class="form-control">{{ old('a_ubicacion_desc') }}</textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_ubicacion_nivel">Nivel de Ubicación</label>
                                    <input type="text" name="a_ubicacion_nivel" class="form-control" value="{{ old('a_ubicacion_nivel') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_uso_estado">Estado de Uso</label>
                                    <input type="text" name="a_uso_estado" class="form-control" value="{{ old('a_uso_estado') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_estado">Estado</label>
                                    <input type="text" name="a_estado" class="form-control" value="{{ old('a_estado') }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="a_vidautil">Vida Útil</label>
                                    <input type="number" name="a_vidautil" class="form-control" value="{{ old('a_vidautil') }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Guardar Activo</button>
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
