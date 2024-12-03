<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    
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
                <div class="container mt-1">
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

                        <div class="form-group">
                            <label for="empleado_id">
                                <i class="fas fa-user"></i> Empleado:
                            </label>
                            <select name="empleado_id" id="empleado_id" class="form-control" required>
                                <option value="">Seleccionar empleado</option>
                                @foreach($empleados as $empleado)
                                    <option value="{{ $empleado->id }}">
                                        {{ $empleado->nombre . ' ' . $empleado->apellido_p . ' ' . $empleado->apellido_m }}
                                    </option>
                                @endforeach
                            </select>
                            @error('empleado_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cargo_empleado_id">Cargo del Empleado:</label>
                            <select name="cargo_empleado_id" id="cargo_empleado_id" class="form-control" required>
                                <option value="">Seleccionar cargo</option>
                                @foreach($cargos as $cargo)
                                    <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
