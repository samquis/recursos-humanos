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
                    <h2>Lista de Personales</h2>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table">
                        <thead>
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
                        @foreach ($empleado as $empleado)
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
                                            <form action="#" method="POST" style="display:inline;">
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
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

