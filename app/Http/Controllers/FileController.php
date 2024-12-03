<?php

/*namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // Mostrar la lista de archivos con opción de búsqueda
    public function index(Request $request)
    {
        $query = File::query();

        // Si hay un término de búsqueda, filtramos por nombre de archivo
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nombre_file', 'LIKE', '%' . $search . '%');
        }

        // Obtenemos los archivos filtrados o no
        $files = $query->get();

        return view('files.index', compact('files'));
    }

    // Mostrar un PDF en otra vista
    public function show($id)
    {
        $file = File::findOrFail($id);
        return view('files.show', compact('file'));
    }
}
*/


namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Empleado;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // Mostrar la lista de archivos con opción de búsqueda
    public function index(Request $request)
    {
        $query = File::query();

        // Si hay un término de búsqueda, filtramos por nombre de archivo
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nombre_file', 'LIKE', '%' . $search . '%');
        }

        // Obtenemos los archivos filtrados o no
        $files = $query->paginate(1);

        return view('files.index', compact('files'));
    }

    // Mostrar formulario para crear un nuevo archivo
    public function create()
    {
        $empleados = Empleado::all();
        return view('files.create', compact('empleados'));
    }

    // Almacenar un nuevo archivo
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_file' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:40960', // Limitar solo a archivos PDF
            'empleado_id' => 'required|exists:empleados,id',
        ]);

        // Almacenar el archivo PDF como BLOB
        $fileData = file_get_contents($request->file('file_pdf'));

        File::create([
            'nombre_file' => $validatedData['nombre_file'],
            'file_pdf' => $fileData,
            'empleado_id' => $validatedData['empleado_id']
        ]);

        return redirect()->route('files.index')->with('success', 'Archivo creado correctamente.');
    }

    // Mostrar un PDF en otra vista
    public function show($id)
    {
        $file = File::findOrFail($id);
        return view('files.show', compact('file'));
    }

    // Mostrar formulario para editar un archivo
    public function edit($id)
    {
        $file = File::findOrFail($id);
        $empleados = Empleado::all();
        return view('files.edit', compact('file', 'empleados'));
    }

    // Actualizar un archivo existente
    public function update(Request $request, $id)
    {
        $file = File::findOrFail($id);
    
        // Validación del nombre del archivo y del PDF
        $request->validate([
            'nombre_file' => 'required|string|max:255',
            'file_pdf' => 'nullable|mimes:pdf|max:40960', 
        ]);
    
        // Actualizar el nombre del archivo
        $file->nombre_file = $request->input('nombre_file');
    
        // Verificar si se subió un nuevo PDF
        if ($request->hasFile('file_pdf')) {
            // Convertir el archivo PDF en formato binario (BLOB)
            $fileContent = file_get_contents($request->file('file_pdf')->getRealPath());
    
            // Actualizar el campo que almacena el PDF como BLOB en la base de datos
            $file->file_pdf = $fileContent;
        }
    
        // Guardar los cambios en la base de datos
        $file->save();
    
        return redirect()->route('files.index')->with('success', 'Archivo actualizado exitosamente.');
    }
    
    // Eliminar un archivo
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();

        return redirect()->route('files.index')->with('success', 'Archivo eliminado correctamente.');
    }
}
