<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Empleado;
use App\Models\CargoEmpleado;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function edit($id)
    {
        $item = Item::find($id);
        $empleados = Empleado::all();   
        $cargoEmpleados = CargoEmpleado::all();

        return view('items.edit', compact('item', 'empleados', 'cargoEmpleados'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'num_item' => 'required|stringmax:255',
            'descripcion' => 'nullable|string',
            'empleado_id' => 'required|exists:empleado,id',
            'cargo_empleado_id' => 'required|exists:cargo_empleado,id',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item actualizado con éxito');
    }
}
