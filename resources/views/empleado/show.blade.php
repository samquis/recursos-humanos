<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h1>Detalles del Personal</h1>
                <div class="container mt-4">
                    <div class="row">
                        <!-- Columna 1 -->
                        <div class="col-md-3">
                            <p><strong>CI:</strong> {{ $empleado->ci }}</p>
                            <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
                            <p><strong>Segundo Nombre:</strong> {{ $empleado->segundo_nombre }}</p>
                            <p><strong>Apellido Paterno:</strong>{{ $empleado->apellido_p }}</p>
                            <p><strong>Apellido Materno:</strong>{{ $empleado->apellido_m }}</p>
                            <p><strong>Fecha Nacimiento:</strong>{{ $empleado->fecha_nacimiento }}</p>
                            <p><strong>Estado Civil:</strong> {{ $empleado->estado_civil }}</p>
                            <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
                        </div>

                        <!-- Columna 2 -->
                        <div class="col-md-3">
                            <p><strong>Dirección Principal:</strong> {{ $empleado->direccion1 }}</p>
                            <p><strong>Dirección Secundaria:</strong> {{ $empleado->direccion2 }}</p>
                            <p><strong>Género:</strong> {{ $empleado->genero }}</p>
                            <p><strong>Departamento:</strong> {{ $empleado->departamento ? $empleado->departamento->nombre : 'Sin Designación' }}</p>
                            <p><strong>Distrito:</strong> {{ $empleado->distrito ? $empleado->distrito->nombre : 'Sin Distrito' }}</p>
                            <p><strong>Área Puesto:</strong> {{ $empleado->area_puesto ? $empleado->area_puesto->nombre : 'Sin Puestos' }}</p>
                        </div>

                        <!-- Columna 3 -->
                        <div class="col-md-3">
                            <p><strong>Cargo:</strong> {{ $empleado->cargo_empleado ? $empleado->cargo_empleado->cargo : 'Sin cargo' }}</p>
                            <p><strong>Nivel de Estudio:</strong> {{ $empleado->nivel_estudio ? $empleado->nivel_estudio->descripcion : 'Sin Estudio' }}</p>
                            <p><strong>Especialidad:</strong> {{ $empleado->especialidad ? $empleado->especialidad->nombre_especialidad : 'Sin Especialidad' }}</p>
                            <p><strong>Tipo de Contrato:</strong> {{ $empleado->contratacion ? $empleado->contratacion->tipo_contratacion : 'Sin Contrato' }}</p>
                            <p><strong>Fecha Inicio:</strong> {{ $empleado->contratacion ? $empleado->contratacion->fecha_inicio : 'Sin Fecha' }}</p>
                            <p><strong>Fecha Fin:</strong> {{ $empleado->contratacion ? $empleado->contratacion->fecha_fin : 'Sin Fecha' }}</p>
                        </div>

                        <!-- Columna 4 -->
                        <div class="col-md-3">
                            <p><strong>Item:</strong> {{ $empleado->item ? $empleado->item->num_item : 'Sin Ítem' }}</p>
                            <p><strong>Descripción Item:</strong> {{ $empleado->item ? $empleado->item->descripcion : 'Sin Descripción' }}</p>
                            <p><strong>Hora Inicio:</strong> {{ $empleado->horario_asignado ? $empleado->horario_asignado->hora_inicio : 'Sin Hora' }}</p>
                            <p><strong>Hora Fin:</strong> {{ $empleado->horario_asignado ? $empleado->horario_asignado->hora_fin : 'Sin Hora' }}</p>
                            <p><strong>Turno de Trabajo:</strong> {{ $empleado->turno_trabajo ? $empleado->turno_trabajo->descripcion : 'Sin Turno' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
