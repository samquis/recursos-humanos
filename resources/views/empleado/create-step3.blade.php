<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Personal - Paso 3</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container mt-2">
                    <h2 class="mb-3">Registro de Personal - Paso 3</h2>
                    <form action="{{ route('empleado.postCreateStep3') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tipo_contrato">Tipo de Contrato:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-contract"></i></span>
                                    </div>
                                    <select id="tipo_contrato" name="tipo_contrato" class="form-control">
                                        <option value="Indefinida">Indefinida</option>
                                        <option value="Temporal">Temporal</option>
                                        <option value="forma_alternativa">Forma Alternativa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_inicio">Fecha de Inicio:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_fin">Fecha de Fin:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--<div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="num_item">Número de Ítem:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                    </div>
                                    <input type="text" id="num_item" name="num_item" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="descripcion_item">Descripción del Ítem:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                    </div>
                                    <textarea id="descripcion_item" name="descripcion_item" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="hora_inicio">Hora de Inicio:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                    <input type="time" id="hora_inicio" name="hora_inicio" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="hora_fin">Hora de Fin:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                    <input type="time" id="hora_fin" name="hora_fin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="turno_id">Turno:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-sync-alt"></i></span>
                                    </div>
                                    <select id="turno_id" name="turno_id" class="form-control">
                                        @foreach($turnos as $turno)
                                            <option value="{{ $turno->id }}">{{ $turno->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group  text-center">
                                <a href="{{ route('empleado.create-step2') }}" class="btn btn-secondary ml-2">Atrás</a>
                                <a href="{{ route('empleado.index')}}" class="btn btn-danger ">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Siguiente</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>