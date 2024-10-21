<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Models\Empleado;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    // Mostrar todos los permisos
        public function index(Request $request)
    {
        $query = Permiso::query();

        // Filtrar permisos si hay un término de búsqueda
        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->whereHas('empleado', function($q) use ($search) {
                $q->where('nombre', 'LIKE', "%$search%")
                ->orWhere('apellido_p', 'LIKE', "%$search%")
                ->orWhere('apellido_m', 'LIKE', "%$search%");
            });
        }

        // Obtener todos los permisos filtrados o no
        $permisos = $query->with('empleado')->get();

        return view('permisos.index', compact('permisos'));
    }

    // Mostrar el formulario para crear un nuevo permiso
    public function create()
    {
        $empleados = Empleado::all(); 
        return view('permisos.create', compact('empleados'));
    }

    // Guardar un nuevo permiso
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'empleado_id' => 'required|exists:empleado,id',
            'fecha_salida' => 'required|date',
            'fecha_ingreso' => 'required|date|after_or_equal:fecha_salida',
            'descripcion' => 'nullable|string'
        ]);

        Permiso::create($validatedData);
        return redirect()->route('permisos.index')->with('success', 'Permiso creado correctamente.');
    }

    // Mostrar el formulario para editar un permiso existente
    public function edit($id)
    {
        $permiso = Permiso::findOrFail($id);
        $empleados = Empleado::all(); // Obtener todos los empleados
        return view('permisos.edit', compact('permiso', 'empleados'));
    }

    // Actualizar un permiso
    public function update(Request $request, $id)
    {
        $permiso = Permiso::findOrFail($id);

        $validatedData = $request->validate([
            'empleado_id' => 'required|exists:empleado,id',
            'fecha_salida' => 'required|date',
            'fecha_ingreso' => 'required|date|after_or_equal:fecha_salida',
            'descripcion' => 'nullable|string'
        ]);

        $permiso->update($validatedData);
        return redirect()->route('permisos.index')->with('success', 'Permiso actualizado correctamente.');
    }

    // Eliminar un permiso
    public function destroy($id)
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->delete();
        return redirect()->route('permisos.index')->with('success', 'Permiso eliminado correctamente.');
    }
}
