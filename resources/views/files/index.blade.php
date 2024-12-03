
<!DOCTYPE html>
<html>
<head>
    <title>Files Personales</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <!--<div class="container">
                    <h1>Listado de Archivos PDF</h1>

                    <form method="GET" action="{{ route('files.index') }}">
                        <input type="text" name="search" placeholder="Buscar PDF por nombre" value="{{ request('search') }}">
                        <button type="submit">Buscar</button>
                    </form>

                    <div class="row mt-3">
                        @foreach($files as $file)
                            <div class="col-md-2 text-center">
                                <a href="{{ route('files.show', $file->id) }}">
                                    <i class="bi bi-file-earmark-pdf" style="font-size: 100px; color: red;"></i>
                                    <p>{{ $file->nombre_file }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>-->  

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Lista de Archivos PDF</h4>

                            <form method="GET"  action="{{ route('files.index') }}" class="form-inline mb-2">
                                <div class="form-group mx-sm-1 mb-2">
                                    <input type="text" class="form-control" name="search" placeholder="Buscar PDF por nombre" value="{{ request('search') }}">
                                </div>
                                <button type="submit"  class="btn btn-primary mb-2">Buscar</button>
                            </form>

                            @if ($files->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    No hay Files registrados.
                                </div>
                            @else

                                <table class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th class="text-right">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($files as $file)
                                        <tr>
                                            <td>{{ $file->id }}</td>
                                            <td>{{ $file->nombre_file }}</td> 
                                            <td class="text-right">
                                                <a href="{{ route('files.show', $file->id) }}" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('files.edit', $file->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> 
                                                </a>

                                                <form action="{{ route('files.destroy', $file->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este File?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                            <div class="d-flex justify-content-center">
                                {{ $files->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
