<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <style>
        .header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .header .title {
            font-size: 1.5rem;
            margin: 0;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .search-form {
            position: relative;
            margin-right: 10px;
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: #fff;
        }
        .sidebar .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header d-flex flex-wrap justify-content-between align-items-center bg-dark">
        <div class="d-flex align-items-center">
            <button class="btn btn-primary d-md-none" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="title ml-2 text-light">Recursos Humanos</h1>
        </div>
        <form class="search-form col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="user-info d-flex align-items-center">
            <img src="https://via.placeholder.com/40" alt="User Image">
            <div class="text-end px-2">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
            </div>
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user"></i>
                                Empleado
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-calendar-alt"></i>
                                Permiso
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-envelope"></i>
                                Configuración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-key"></i>
                                Cambiar Contraseña
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">1,245 Empleados</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">34 Permisos</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">5,245 Users</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>