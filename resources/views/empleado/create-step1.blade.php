<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Personal - Paso 1</title>
    
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
                <div class="container mt-2">
                    <h2 class="mb-3">Registro de Personal - Paso 1</h2>
                    <form action="{{ route('empleado.postCreateStep1') }}" method="POST">
                        @csrf
                        <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="imagen">Imagen:</label>
                                            <input type="file" class="form-control-file mx-auto d-block" id="imagen" name="imagen">
                                            <img id="preview-image" src="#" alt="Preview Image" class="preview-image mx-auto d-block"/>
                                        </div>
                                    </div>
                            <div class="form-group col-md-4">
                                <label for="ci">N° Carnet:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombre">Nombre:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="segundo_nombre">Segundo Nombre:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{ old('segundo_nombre') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="apellido_p">Apellido Paterno:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ old('apellido_p') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_m">Apellido Materno:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ old('apellido_m') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="estado_civil">Estado Civil:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <select id="estado_civil" name="estado_civil" class="form-control">
                                        <option value="soltero" {{ old('estado_civil') == 'soltero' ? 'selected' : '' }}>Soltero/a</option>
                                        <option value="concuvino" {{ old('estado_civil') == 'concuvino' ? 'selected' : '' }}>Concuvino</option>
                                        <option value="casado" {{ old('estado_civil') == 'casado' ? 'selected' : '' }}>Casado/a</option>
                                        <option value="viudo/a" {{ old('estado_civil') == 'viudo/a' ? 'selected' : '' }}>Viudo/a</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="telefono">Teléfono:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="direccion1">Dirección Principal:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="direccion1" name="direccion1" value="{{ old('direccion1') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="direccion2">Dirección Secundaria:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="direccion2" name="direccion2" value="{{ old('direccion2') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="genero">Género:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                    </div>
                                    <select id="genero" name="genero" class="form-control">
                                        <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                                        <option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                                        <option value="otro" {{ old('genero') == 'otro' ? 'selected' : '' }}>Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-4">
                            <a href="#" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
    


</body>
</html>