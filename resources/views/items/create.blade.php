
    <h1>Registrar Nuevo Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="num_item">Número de Item:</label>
            <input type="text" name="num_item" id="num_item" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>

        <div class="form-group ">
            <label for="empleado_id">
                <i class="fas fa-user"></i> ID del Empleado:
            </label>
            <select name="empleado_id" id="empleado_id" class="form-control" required>
                <option value="">Seleccionar empleado</option>
                    @foreach($empleados as $empleado)
                       <option value="{{ $empleado->id }}" {{ $empleado->id == $item->empleado_id ? 'selected' : '' }}>
                          {{ $empleado->nombre . ' ' . $empleado->apellido_p . ' ' . $empleado->apellido_m }}
                         </option>
                     @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cargo_empleado_id">ID del Cargo del Empleado:</label>
            <input type="number" name="cargo_empleado_id" id="cargo_empleado_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
