<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Empleado;
use App\Models\CargoEmpleado;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Método para mostrar la lista de items con la opción de búsqueda
    public function index(Request $request)
    {
        $search = $request->input('search');
        $items = Item::when($search, function($query, $search) {
            return $query->where('num_item', 'like', "%{$search}%");
        })->paginate(1);

        return view('items.index', compact('items', 'search'));
    }

    // Método para mostrar el formulario de creación de un nuevo item
    public function create()
    {
        $empleados = Empleado::all();
        $cargos = CargoEmpleado::all();
        return view('items.create', compact('empleados', 'cargos'));
    }

    // Método para almacenar un nuevo item
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'num_item' => 'required|unique:item|max:255',
            'descripcion' => 'nullable|string|max:255',
            'empleado_id' => 'required|integer|unique:item,empleado_id',
            'cargo_empleado_id' => 'required|integer',
        ], [
            'empleado_id.unique' => 'El empleado ya se encuentra regitrado con un item existente.'
        ]);

        Item::create($validatedData);

        return redirect()->route('items.index')->with('success', 'Item registrado correctamente');
    }

    // Método para mostrar un item específico
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    // Método para mostrar el formulario de edición de un item
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $empleados = Empleado::all();  
        $cargos = CargoEmpleado::all();
        return view('items.edit', compact('item', 'empleados', 'cargos'));
    }

    // Método para actualizar un item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $validatedData = $request->validate([
            'num_item' => 'required|max:255|unique:item,num_item,' . $item->id,
            'descripcion' => 'nullable|string|max:255',
            'empleado_id' => 'required|integer|unique:item,empleado_id' . $item->id,
            'cargo_empleado_id' => 'required|integer',
        ]);

        $item->update($validatedData);

        return redirect()->route('items.index')->with('success', 'Item actualizado correctamente');
    }

    // Método para eliminar un item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item eliminado correctamente');
    }
}
