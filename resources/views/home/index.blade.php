
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .main-container {
            max-width: 1200px; /* Ajusta el ancho máximo del contenedor */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
        }
        .container-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; /* Ajusta la altura según tus necesidades */
            text-align: center;
        }
        .img-responsive {
            max-width: 100%;
            height: auto;
            margin-top: 80px;
        }
        body{
            background: linear-gradient(to right, #ff0033, #fff6ee);
        }
    </style>

</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="container-center ">
                <img src="/Imagenes/logopanel.png" width="500px" class="img-responsive center-block">
            </div>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

