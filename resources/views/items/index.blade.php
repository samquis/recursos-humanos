<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    
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
                    <h3 class="text-center mb-1">Lista de Items</h3>
                        
                            <!-- Botón de registro -->
                            <div class="mb-3 ">
                                <a href="{{ route('items.create') }}" class="btn btn-primary">Registrar nuevo Item</a>
                            </div>

                             <!-- Formulario de búsqueda -->
                            <form action="{{ route('items.index') }}" method="GET" class="form-inline mb-2">
                                 <div class="form-group mx-sm-1 mb-2">
                                     <input type="text" class="form-control" name="search" placeholder="Buscar por número de item" value="{{ old('search', $search) }}">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                            </form>
                        

                    @if ($items->isEmpty())
                        <div class="alert alert-info" role="alert">
                            No hay items registrados.
                        </div>
                    @else
                        <table class="table table-striped table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>Número de Item</th>
                                    <th>Descripción</th>
                                    <th>Nombre y Apellidos</th>
                                    <th>Cargo Trabajo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->num_item }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->empleado ? $item->empleado->nombre . ' ' . $item->empleado->apellido_p . ' ' . $item->empleado->apellido_m : 'Sin empleado asignado' }}</td>
                                        <td>{{ $item->cargoEmpleado ? $item->cargoEmpleado->cargo : 'Sin Cargo' }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-success btn-sm" >
                                            <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </main>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

