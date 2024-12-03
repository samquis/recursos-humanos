<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Personal - Paso 2</title>

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
                <div class="container mt-2">
                    <h2 class="mb-3">Registro de Personal - Paso 2</h2>
                    <form action="{{ route('empleado.postCreateStep2') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="departamento_id">Departamento:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    </div>
                                    <select id="departamento_id" name="departamento_id" class="form-control">
                                        @foreach($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="distrito_id">Distrito:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <select id="distrito_id" name="distrito_id" class="form-control">
                                        @foreach($distritos as $distrito)
                                            <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="area_puesto_id">Área de Puesto:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <select id="area_puesto_id" name="area_puesto_id" class="form-control">
                                        @foreach($areasPuesto as $areaPuesto)
                                            <option value="{{ $areaPuesto->id }}">{{ $areaPuesto->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cargo_empleado_id">Cargo:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <select id="cargo_empleado_id" name="cargo_empleado_id" class="form-control">
                                        @foreach($cargosEmpleado as $cargoEmpleado)
                                            <option value="{{ $cargoEmpleado->id }}">{{ $cargoEmpleado->cargo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nivel_estudio_id">Nivel de Estudio:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                    </div>
                                    <select id="nivel_estudio_id" name="nivel_estudio_id" class="form-control">
                                        @foreach($nivelesEstudio as $nivelEstudio)
                                            <option value="{{ $nivelEstudio->id }}">{{ $nivelEstudio->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="especialidad_id">Especialidad:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-stethoscope"></i></span>
                                    </div>
                                    <select id="especialidad_id" name="especialidad_id" class="form-control">
                                        @foreach($especialidades as $especialidad)
                                            <option value="{{ $especialidad->id }}">{{ $especialidad->nombre_especialidad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <H4>Datos de Licencia de Conducir</H4>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="licencia_conducir_id">Tipo Vehiculo:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-car"></i></span>
                                    </div>
                                    <select id="licencia_conducir_id" name="licencia_conducir_id" class="form-control">
                                        @foreach($licenciasConducir as $licenciaConducir)
                                            <option value="{{ $licenciaConducir->id }}">{{ $licenciaConducir->tipo_vehiculo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>   
                        
                            <div class="form-group col-md-4">
                                    <label for="licencia_conducir_id">Categoria de Licencia:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-car"></i></span>
                                        </div>
                                        <select id="licencia_conducir_id" name="licencia_conducir_id" class="form-control">
                                            @foreach($licenciasConducir as $licenciaConducir)
                                                <option value="{{ $licenciaConducir->id }}">{{ $licenciaConducir->categoria }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-4">
                            <a href="{{ route('empleado.create-step1') }}" class="btn btn-secondary">Atrás</a>
                            <a href="{{ route('empleado.index')}}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>