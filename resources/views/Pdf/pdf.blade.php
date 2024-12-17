<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONACYT - Reporte de Datos: {{ ucfirst($table) }}</title>
    <style>
        /* Reset de márgenes y padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos para el cuerpo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
        }

        /* Estilos del encabezado */
        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            max-width: 50px;
            margin-right: 20px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .page-title {
            font-size: 18px;
            margin-top: 10px;
            font-weight: 600;
        }

        /* Estilos de la tabla */
        .table-container {
            width:99%;
            overflow-x: auto;
            margin: 3px;
        }

        .responsive-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .responsive-table thead {
            background-color: #3498db;
            color: white;
        }

        .responsive-table th, .responsive-table td {
            padding: 12px 20px;
            text-align: left;
        }

        .responsive-table th {
            font-weight: bold;
        }

        .responsive-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .responsive-table tr:hover {
            background-color: #ecf0f1;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                align-items: center;
            }

            .company-name {
                font-size: 20px;
            }

            .page-title {
                font-size: 16px;
            }

            .responsive-table th, .responsive-table td {
                font-size: 7px;
                padding: 2px;
            }
        }

        @media screen and (max-width: 480px) {
            .company-name {
                font-size: 18px;
            }

            .page-title {
                font-size: 14px;
            }

            .responsive-table th, .responsive-table td {
                font-size: 7px;
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <h1 class="company-name">CONACYT</h1>
        </div>
        <h2 class="page-title">Reporte de {{ ucfirst($table) }}</h2>
    </header>
    <main>
        <div class="table-container">
    @if($table == 'empleados')
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    {{-- <th>Fecha de Nacimiento</th> --}}
                    <th>Email</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $empleado)
                    <tr>
                        <td>{{ $empleado->idemployee }}</td>
                        <td>{{ $empleado->empfname . " " . $empleado->empsname . " " . $empleado->emptname . " " . $empleado->empfsurname . " " . $empleado->empssurname . " " . $empleado->emptsurname }}</td>
                        {{-- <td>{{ \Carbon\Carbon::parse($empleado->empborndate)->format('d-m-Y') }}</td> --}}
                        <td>{{ $empleado->empemail ?? 'No disponible' }}</td>
                        <td>{{ $empleado->estado_descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @elseif($table == 'usuarios')
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Empleado</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $usuario)
                    <tr>
                        <td>{{ $usuario->iduser }}</td>
                        <td>{{ $usuario->user_name }}</td>
                        <td>{{ $usuario->empleado->empfullname ?? 'No disponible' }}</td> <!-- Aquí accedes al nombre del empleado -->
                        <td>{{ $usuario->estado_descripcion ?? 'No disponible' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @elseif($table == 'activos')
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Codigo de activo</th>
                    <th>Tipo de bien</th>
                    <th>Fuente Financiera</th>
                    <th>Responsable</th>
                    <th>Nombre del bien</th>
                    {{-- <th>Fecha de Nacimiento</th> --}}
                    <th>Vida util</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $activo)
                    <tr>
                        <td>{{ $activo->a_cod_activo_interno_ant }}</td>
                        {{-- <td>{{ \Carbon\Carbon::parse($empleado->empborndate)->format('d-m-Y') }}</td>
                        <td>{{ $activo->a_codigo_activo ?? 'No disponible' }}</td>--}}
                        <td>{{ $activo->tipoBienContable->tbc_desc }}</td>
                        <td>{{ $activo->fuenteFinanciera->ff_nombre }}</td>
                        <td>{{ $activo->empleado->empfname . " " . $activo->empleado->empfsurname }}</td>
                        <td>{{ $activo->a_nombre }}</td>
                        <td>{{ $activo->vidaUtil->tipo_vida_util_afd }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @elseif($table == 'depreciaciones')
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Activo Fijo</th>
                    <th>Valor del bien ($)/ residual ($)</th>
                    <th>Valor a depreciar ($)</th>
                    <th>Vida útil</th>
                    <th>Cuota anual ($) / diaria ($)</th>
                    <th>Fecha de generación</th>
                    <th>Fecha de corte</th>
                    <th>Código de informe</th>
                    <th>Dep. Acum. ($)  </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $depreciacion)
                    <tr>
                        <td>{{ $depreciacion->af_activo->id_activo }} - {{ $depreciacion->af_activo->a_nombre }}</td>
                        <td>{{ number_format($depreciacion->afd_valor_depreciacion, 2) }} / {{ number_format(($depreciacion->afd_valor_depreciacion*0.10), 2) }}</td>
                        <td>{{ number_format(($depreciacion->afd_valor_depreciacion-($depreciacion->afd_valor_depreciacion*0.10)), 2) }}</td>
                        <td>{{ $depreciacion->vida_util->tipo_vida_util_afd }} ({{ $depreciacion->vida_util->plazo_vida_util_afd }} años)</td>
                        <td>{{ number_format($depreciacion->afd_cuota_anual, 2) }} / {{ number_format($depreciacion->afd_cuota_diaria, 2) }}</td>
                        <td>{{ $depreciacion->fecha_formateada  }}</td>
                        <td>{{$depreciacion->fecha_formateada2  }}</td>
                        <td>{{ $depreciacion->afd_codigo_informe }}</td>
                        <td>{{ number_format($depreciacion->afd_depreciacion_acumulada, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>No hay datos disponibles para esta tabla.</p>
    @endif
    </div>
    </main>

</body>
</html>
