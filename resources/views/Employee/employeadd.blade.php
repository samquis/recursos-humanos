<!DOCTYPE html>
<html>
<head>
    <title>Crear Empleado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Crear Empleado</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="ci">CI:</label>
            <input type="text" class="form-control" id="ci" name="ci">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="segundo_nombre">Segundo Nombre:</label>
            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="form-group">
            <label for="estado_civil">Estado Civil:</label>
            <input type="text" class="form-control" id="estado_civil" name="estado_civil">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="form-group">
            <label for="direccion1">Dirección 1:</label>
            <input type="text" class="form-control" id="direccion1" name="direccion1">
        </div>
        <div class="form-group">
            <label for="direccion2">Dirección 2:</label>
            <input type="text" class="form-control" id="direccion2" name="direccion2">
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado">
        </div>
        <div class="form-group">
            <label for="posicion">Posición:</label>
            <input type="text" class="form-control" id="posicion" name="posicion">
        </div>
        <div class="form-group">
            <label for="fecha_contratado">Fecha Contratado:</label>
            <input type="date" class="form-control" id="fecha_contratado" name="fecha_contratado">
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</body>
</html>
