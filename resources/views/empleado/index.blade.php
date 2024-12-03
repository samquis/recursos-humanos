<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
    .pagination {
        visibility: visible !important;
    }
    </style>

</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <h2>Lista de Personales</h2>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <form action="{{ route('empleado.index') }}" method="GET" class="form-inline mb-2">
                        <div class="input-group mb-2">
                            <input type="text" name="search" class="form-control" placeholder="Buscar por CI" value="{{ request()->input('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </div>
                        </div>
                    </form>

                    @if ($empleados->isEmpty())
                        <div class="alert alert-info" role="alert">
                            No hay personal registrado con el CI.
                        </div>
                    @else

                        <table class="table table">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Id</th>
                                    <th>CI</th>
                                    <th>Nombre</th>
                                    <th>Apellido P.</th>
                                    <th>Apellido M.</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Estado Civil</th>
                                    <th>Item</th>
                                    <th>Acciones</th>
                                </tr>
                            <thead>
                            <tbody>
                            @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ $empleado->id }}</td>
                                            <td>{{ $empleado->ci }}</td>
                                            <td>{{ $empleado->nombre }} {{ $empleado->segundo_nombre ?? '' }}</td>
                                            <td>{{ $empleado->apellido_p }}</td>
                                            <td>{{ $empleado->apellido_m}}</td>
                                            <td>{{ $empleado->fecha_nacimiento}}</td>
                                            <td>{{ $empleado->estado_civil}}</td>
                                            <td>{{ $empleado->item ? $empleado->item->num_item : 'Sin ítem' }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('empleado.show', $empleado->id)}}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> 
                                                </a>
                                                <a href="{{ route('empleado.edit', $empleado->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> 
                                                </a>
                                                <form action="{{ route('empleado.destroy' , $empleado->id)}}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                    
                            </tbody>
                        </table>
                    @endif

                    <div class="d-flex justify-content-center">
                        {{ $empleados->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        <script>
        $(function () {
            $('#users-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
    </script>
</html>

