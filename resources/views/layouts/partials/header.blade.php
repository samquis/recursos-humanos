<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<nav class="header d-flex flex-wrap justify-content-between align-items-center bg-dark">
    <div class="d-flex align-items-center">
        <button class="btn btn-primary d-md-none" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="title ml-2 d-none d-md-block text-light">Recursos Humanos</h1>
    </div>
    <form class="search-form col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
    </form>
    <div class="user-info d-flex align-items-center">
        <img src="https://via.placeholder.com/40" alt="User Image" class="d-none d-md-block">
        <div class="text-end px-2">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
        <!--<div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>-->
    </div>
</nav>