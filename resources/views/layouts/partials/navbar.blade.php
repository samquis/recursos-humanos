
<head>
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('home.index')}}">
                    <i class="fas fa-home"></i>
                    Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="fas fa-chart-line"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="empleadoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    Personal
                </a>
                <div class="dropdown-menu" aria-labelledby="empleadoDropdown">
                    <a class="dropdown-item" href="{{ route('empleado.index')}}">
                        <i class="fas fa-list"></i> lista personal
                    </a>
                    <a class="dropdown-item" href="{{ route('empleado.create-step1') }}">
                        <i class="fas fa-plus"></i> Añadir personal
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('items.index')}}">
                    <i class="fas fa-list"></i>
                    Items
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('permisos.index')}}">
                    <i class="fas fa-calendar-alt"></i>
                    Permiso
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('files.index')}}">
                    <i class="fas fa-file-arrow-down"></i>
                    Files
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope"></i>
                    Configuración
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-key"></i>
                    Usuarios
                </a>
            </li>
        </ul>
    </div>
</nav>