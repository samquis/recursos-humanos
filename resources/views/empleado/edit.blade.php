
<!DOCTYPE html>
<html>
<head>
    <title>Edit información</title>
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container mt-2">
                    <h2 class="text-center">Editar información Personal</h2>
                        <form action="{{ route('empleado.update', $empleado->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="ci">CI:</label>
                                        <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $empleado->ci) }}" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="segundo_nombre">Segundo Nombre:</label>
                                        <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{ old('segundo_nombre', $empleado->segundo_nombre) }}">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="apellido_p">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ old('apellido_p', $empleado->apellido_p) }}" required>
                                    </div>
                                

                                    <div class="form-group col-md-2">
                                        <label for="apellido_m">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ old('apellido_m', $empleado->apellido_m) }}">
                                    </div>
                                
                                    <div class="form-group col-md-2">
                                        <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="estado_civil">Estado Civil:</label>
                                        <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ old('estado_civil', $empleado->estado_civil) }}">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="telefono">N° Celular:</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono) }}">
                                    </div>
                                
                                    <div class="form-group col-md-2">
                                        <label for="direccion1">Dirección Principal:</label>
                                        <input type="text" class="form-control" id="direccion1" name="direccion1" value="{{ old('direccion1', $empleado->direccion1) }}">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="direccion2">Dirección Secundario</label>
                                        <input type="text" class="form-control" id="direccion2" name="direccion2" value="{{ old('direccion2', $empleado->direccion2) }}">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="genero">Género:</label>
                                        <select class="form-control" id="genero" name="genero" required>
                                            <option value="masculino" {{ $empleado->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                                            <option value="femenino" {{ $empleado->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="departamento_id">Departamento:</label>
                                        <select class="form-control" id="departamento_id" name="departamento_id" required>
                                            @foreach($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}> {{ $departamento->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="distrito_id">Distrito</label>
                                        <select class="form-control" id="distrito_id" name="distrito_id" required>
                                            @foreach($distritos as $distrito)
                                            <option value="{{ $distrito->id }}" {{ $empleado->distrito_id == $distrito->id ? 'selected' : '' }}>{{ $distrito->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="area_puesto_id">Area Puesto</label>
                                        <select class="form-control" id="area_puesto_id" name="area_puesto_id" required>
                                            @foreach($areasPuesto as $area_puesto)
                                            <option value="{{ $area_puesto->id }}" {{ $empleado->area_puesto_id == $area_puesto->id ? 'selected' : ''}}>{{ $area_puesto->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="cargo_empleado_id"> Cargo</label>
                                        <select class="form-control" id="cargo_empleado_id" name="cargo_empleado_id" required>
                                            @foreach($cargoEmpleado as $cargo_empleado)
                                            <option value="{{$cargo_empleado->id}}"  {{ $empleado->cargo_empleado_id == $cargo_empleado->id ? 'selected' : ''}}>{{ $cargo_empleado->cargo }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="nivel_studio_id">Nivel Estudio:</label>
                                        <select class="form-control" id="nivel_estudio_id" name="nivel_estudio_id" required>
                                            @foreach($nivelesEstudio as $nivel_estudio)
                                            <option value="{{$nivel_estudio->id}}" {{ $empleado->nivel_estudio_id == $nivel_estudio->id ? 'selected' : ''}}>{{$nivel_estudio-> descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="especialidad_id">Especialidad:</label>
                                        <select class="form-control" id="especialidad_id" name="especialidad_id" required>
                                            @foreach($especialidades as $especialidad)
                                                <option value="{{ $especialidad->id }}" {{ $empleado->especialidad_id == $especialidad->id ? 'selected' : '' }}>{{ $especialidad->nombre_especialidad }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="tipo_contrato">Tipo Contrato:</label>
                                        <select class="form-control" id="tipo_contrato_id" name="tipo_contrato_id" required>
                                            <option value="">Seleccione tipo de contrato</option>
                                            @foreach ($tipo_contratos as $contrato)
                                                <option value="{{ $contrato->id }}" {{ old('tipo_contrato_id', $empleado->contratacion->tipo_contrato_id ?? '') == $contrato->id ? 'selected' : '' }}>
                                                    {{ $contrato->tipo_contrato }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>    

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="fecha_inicio">Fecha de Inicio:</label>
                                        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $empleado->contratacion->fecha_inicio ?? '') }}" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="fecha_fin">Fecha de Fin:</label>
                                        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin', $empleado->contratacion->fecha_fin ?? '') }}">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="num_item">Número de Item:</label>
                                        <input type="text" class="form-control" id="num_item" name="num_item" value="{{ $empleado->item ? $empleado->item->num_item : '' }}" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="descripcion_item">Descripción del Item:</label>
                                        <textarea class="form-control" id="descripcion_item" name="descripcion_item">{{ $empleado->item ? $empleado->item->descripcion : '' }}</textarea>
                                    </div>

                                    <!--<div class="form-group col-md-2">
                                        <label for="descripcion">Turno Trabajo:</label>
                                        <textarea class="form.control" id="descripcion" name="descripcion">{{ $empleado->turno_trabajo ? $empleado->turno_trabajo->descripcion : ''}}</textarea>
                                    </div>-->

                                    <div class="form-group col-md-2">
                                        <label for="turno_trabajo_id">Turno Trabajo</label>
                                        <select class="form-control" id="turno_trabajo_id" name="turno_trabajo_id" required>
                                            @foreach($turno_trabajos as $turno_trabajo)
                                            <option value="{{ $turno_trabajo->id }}" {{ $empleado->turno_trabajo_id == $turno_trabajo->id ? 'selected' : '' }}>{{ $turno_trabajo->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                
                                </div>

                                </div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                    <a href="{{ route('empleado.index' )}}" class="btn btn-dark">Cancelar</a>
                                </div>
                        </form>
                    </div>
                </main>
            </div>
      </div>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

