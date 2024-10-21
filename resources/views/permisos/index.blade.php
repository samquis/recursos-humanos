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
                    <h1>Lista de Permisos</h1>

                    <!-- Formulario de búsqueda -->
                    <form action="{{ route('permisos.index') }}" method="GET" class="form-inline mb-3">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Buscar empleado" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>

                    <a href="{{ route('permisos.create') }}" class="btn btn-success mb-3">Solicitar nuevo Permiso</a>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($permisos->isEmpty())
                        <p>No hay permisos registrados.</p>
                    @else
                        <table class="table table">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Empleado</th>
                                    <th>Fecha Registrada</th>
                                    <th>Fecha de Salida</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permisos as $permiso)
                                    <tr>
                                        <td>{{ $permiso->id }}</td>
                                        <td>{{ $permiso->empleado->nombre . ' ' . $permiso->empleado->apellido_p . ' '. $permiso->empleado->apellido_m }}</td>
                                        <td>{{ $permiso->created_at }}</td>
                                        <td>{{ $permiso->fecha_salida }}</td>
                                        <td>{{ $permiso->fecha_ingreso }}</td>
                                        <td>{{ $permiso->descripcion }}</td>
                                        <td>
                                            <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> 
                                            </a>
                                            <form action="{{ route('permisos.destroy', $permiso->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                     <i class="fas fa-trash-alt"></i>
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

