

<form action="{{ route('empleado.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
            <label for="ci">CI:</label>
            <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $empleado->ci) }}" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="segundo_nombre">Segundo Nombre:</label>
            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{ old('segundo_nombre', $empleado->segundo_nombre) }}">
        </div>

        <div class="form-group">
            <label for="apellido_p">Apellido Paterno:</label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ old('apellido_p', $empleado->apellido_p) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido_m">Apellido Materno:</label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ old('apellido_m', $empleado->apellido_m) }}">
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}" required>
        </div>

        <div class="form-group">
            <label for="estado_civil">Estado Civil:</label>
            <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ old('estado_civil', $empleado->estado_civil) }}">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono) }}">
        </div>

        <div class="form-group">
            <label for="direccion1">Dirección Principal:</label>
            <input type="text" class="form-control" id="direccion1" name="direccion1" value="{{ old('direccion1', $empleado->direccion1) }}">
        </div>

        <div class="form-group">
            <label for="direccion2">Dirección Secundaria:</label>
            <input type="text" class="form-control" id="direccion2" name="direccion2" value="{{ old('direccion2', $empleado->direccion2) }}">
        </div>

        <div class="form-group">
            <label for="genero">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ old('genero', $empleado->genero) }}">
        </div>

        <div class="form-group">
            <label for="departamento_id">Departamento</label>
            <select class="form-control" id="departamento" name="departamento">
                @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>{{ $departamento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div >
            <label for="distrito_id">Distrito</label>
            <select class="form-control" id="distrito" name="distrito">
                @foreach($distritos as $distrito)
                <option value="{{ $distrito->id }}" {{ $empleado->distrito_id == $distrito->id ? 'selected' : '' }}>{{ $distrito->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="area_puesto_id">Area Puesto</label>
            <select class="form-control" id="area_puesto" name="area_puesto">
                @foreach($areasPuesto as $area_puesto)
                <option value="{{ $area_puesto->id }}" {{ $empleado->area_puesto_id == $area_puesto->id ? 'selected' : ''}}>{{ $area_puesto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="cargo_empleado_id"> Cargo</label>
            <select class="form-control" id="cargo_empleado" name="cargo_empleado">
                @foreach($cargoEmpleado as $cargo_empleado)
                <option value="{{$cargo_empleado->id}}"  {{ $empleado->cargo_empleado_id == $cargo_empleado->id ? 'selected' : ''}}>{{ $cargo_empleado->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleado.index' )}}" class="btn btn-secundary">Cancelar</a>
</form>

