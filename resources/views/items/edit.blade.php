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
               
               <div class="container mt-4 ">
                    <h1 class="text-center mb-4">Editar Item</h1>

                    <form action="{{ route('items.update', $item->id) }}" method="POST" class="border p-4 shadow-sm">
                        @csrf
                        @method('PUT')

                    <div class="justify-content-center text-center">
                        <div class="row ">
                            <div class="form-group col-md-4 mb-3">
                                <label for="num_item">
                                    <i class="fas fa-hashtag"></i> Número de Item:
                                </label>
                                <input type="text" name="num_item" id="num_item" class="form-control" value="{{ $item->num_item }}" required>
                            </div>

                            <div class="form-group col-md-4 mb-3">
                                <label for="descripcion">
                                    <i class="fas fa-align-left"></i> Descripción:
                                </label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{ $item->descripcion }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 mb-3">
                                <label for="empleado_id">
                                    <i class="fas fa-user"></i> Empleado:
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

                            <div class="form-group col-md-4 mb-3">
                                <label for="cargo_empleado_id">
                                    <i class="fas fa-briefcase"></i> Cargo del Empleado:
                                </label>
                                <select name="cargo_empleado_id" id="cargo_empleado_id" class="form-control" required>
                                    <option value="">Seleccionar cargo</option>
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}" {{ $cargo->id == $item->cargo_empleado_id ? 'selected' : '' }}>
                                            {{ $cargo->cargo }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class=" justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Actualizar
                            </button>
                            <a href="{{ route('items.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
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
