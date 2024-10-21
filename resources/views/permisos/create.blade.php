
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
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
                <div class="container">
                    <h2>{{ isset($permiso) ? 'Editar Permiso' : 'Solicitar Permiso' }}</h2>

                    <form action="{{ isset($permiso) ? route('permisos.update', $permiso->id) : route('permisos.store') }}" method="POST">
                        @csrf
                        @if(isset($permiso))
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="empleado_id">Empleado:</label>
                            <select name="empleado_id" id="empleado_id" class="form-control" required>
                                <option value="">Seleccionar empleado</option>
                                @foreach($empleados as $empleado)
                                    <option value="{{ $empleado->id }}" {{ isset($permiso) && $permiso->empleado_id == $empleado->id ? 'selected' : '' }}>
                                        {{ $empleado->nombre . ' ' . $empleado->apellido_p . ' ' . $empleado->apellido_m }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fecha_salida">Fecha de Salida:</label>
                            <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" value="{{ isset($permiso) ? $permiso->fecha_salida : old('fecha_salida') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha_ingreso">Fecha de Ingreso:</label>
                            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{ isset($permiso) ? $permiso->fecha_ingreso : old('fecha_ingreso') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ isset($permiso) ? $permiso->descripcion : old('descripcion') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($permiso) ? 'Actualizar' : 'Solicitar' }}</button>
                        <a href="{{ route('permisos.index') }}" class="btn btn-secondary">Cancelar</a>
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
