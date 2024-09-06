<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Personal - Paso 4</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #pdf-preview {
            border: 1px solid #ddd;
            height: 500px;
        }
    </style>
</head>
<body>
    @include('layouts.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials.navbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <div class="row">
                        <!-- Formulario -->
                        <div class="col-md-4 ">
                            <h2 class="my-3">Finalizar Registro</h2>
                            <form action="{{ route('empleado.postCreateStep4') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nombre_file" class="form-label">Nombre del Archivo</label>
                                    <input type="text" name="nombre_file" class="form-control" id="nombre_file" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="file_pdf" class="form-label">Archivo PDF</label>
                                    <input type="file" name="file_pdf" class="form-control" id="file_pdf" accept="application/pdf" required onchange="previewPDF()">
                                </div>
                                <div class="form-group  text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a href="{{ route('empleado.create-step2') }}" class="btn btn-secondary ml-2">Atrás</a>
                                    <a href="#" class="btn btn-danger ml-2">Cancelar</a>
                                </div> 
                            </form>
                            @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>

                        <!-- Previsualización del Archivo -->
                        <div class="col-md-8">
                            <h2 class="my-4">Previsualización del Archivo</h2>
                            <!-- Aquí se mostrará la previsualización del archivo PDF cargado -->
                            <iframe id="pdf-preview" src="" width="100%" height="400px" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function previewPDF() {
            const fileInput = document.getElementById('file_pdf');
            const previewFrame = document.getElementById('pdf-preview');
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const fileURL = URL.createObjectURL(file);
                previewFrame.src = fileURL;
            } else {
                previewFrame.src = '';
            }
        }
    </script>

</body>
</html>