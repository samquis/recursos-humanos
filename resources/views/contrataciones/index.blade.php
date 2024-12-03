<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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

                <div class="container">
                    <h2>Contrataciones</h2>
                    
                    <h3>Contratos Temporales</h3>
                    <table class="table table">
                        <thead>
                            <tr>
                                <th>Empleado ID</th>
                                
                                <th>Tipo de Contrato</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contratacionesTemporales as $contratacion)
                                <tr>
                                    <td>{{ $contratacion->empleado->nombre  }} {{$contratacion->empleado->apellido_p}} {{$contratacion->empleado->apellido_m}}</td>
                                    
                                    <td>{{ $contratacion->tipo_contrato }}</td>
                                    <td>{{ $contratacion->fecha_inicio }}</td>
                                    <td>{{ $contratacion->fecha_fin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $contratacionesTemporales->links('pagination::bootstrap-4') }}
                    </div>

                    <!--<h3>Contratos Indefinidos</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Empleado ID</th>
                                <th>Tipo de Contrato</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contratacionesIndefinidas as $contratacion)
                                <tr>
                                    <td>{{ $contratacion->empleado_id }}</td>
                                    <td>{{ $contratacion->tipo_contrato }}</td>
                                    <td>{{ $contratacion->fecha_inicio }}</td>
                                    <td>{{ $contratacion->fecha_fin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $contratacionesIndefinidas->links('pagination::bootstrap-4') }}
                    </div>-->
                </div>
            </main>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
