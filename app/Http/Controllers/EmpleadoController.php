<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\AreaPuesto;
use App\Models\CargoEmpleado;
use App\Models\NivelEstudio;
use App\Models\Especialidad;
use App\Models\Contratacion;
use App\Models\File;
use App\Models\Item;
use App\Models\HorarioAsignado;
use App\Models\Permiso;
use App\Models\TurnoTrabajo;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    public function createStep1(Request $request)
    {
        return view('empleado.create-step1');
    }

    public function postCreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'ci' => 'required|unique:empleado|max:20',
            'nombre' => 'required',
            'segundo_nombre' => 'nullable',
            'apellido_p' => 'required',
            'apellido_m' => 'nullable',
            'fecha_nacimiento' => 'required|date',
            'estado_civil' => 'required',
            'telefono' => 'nullable|max:20',
            'direccion1' => 'nullable',
            'direccion2' => 'nullable',
            'genero' => 'required',
        ]);

        $empleado = Empleado::create($validatedData);

        $request->session()->put('empleado_id', $empleado->id);

        return redirect()->route('empleado.create-step2');
    }

    public function createStep2(Request $request)
    {
        $departamentos = Departamento::all();
        $distritos = Distrito::all();
        $areasPuesto = AreaPuesto::all();
        $cargosEmpleado = CargoEmpleado::all();
        $nivelesEstudio = NivelEstudio::all();
        $especialidades = Especialidad::all();
        return view('empleado.create-step2', compact('departamentos', 'distritos', 'areasPuesto', 'cargosEmpleado', 'nivelesEstudio', 'especialidades'));
    }

    public function postCreateStep2(Request $request)
    {
        $empleado = Empleado::find($request->session()->get('empleado_id'));

        $validatedData = $request->validate([
            'departamento_id' => 'required',
            'distrito_id' => 'required',
            'area_puesto_id' => 'required',
            'cargo_empleado_id' => 'required',
            'nivel_estudio_id' => 'required',
            'especialidad_id' => 'required',
        ]);

        $empleado->update($validatedData);

        return redirect()->route('empleado.create-step3');
    }

    public function createStep3(Request $request)
    {
        $turnos = TurnoTrabajo::all();
        return view('empleado.create-step3', compact('turnos'));
    }

    public function postCreateStep3(Request $request)
    {
        $empleado = Empleado::find($request->session()->get('empleado_id'));

        $validatedData = $request->validate([
            'tipo_contrato' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
            'num_item' => 'required',
            'descripcion_item' => 'nullable',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'turno_id' => 'required',
        ]);

        Contratacion::create([
            'tipo_contrato' => $validatedData['tipo_contrato'],
            'fecha_inicio' => $validatedData['fecha_inicio'],
            'fecha_fin' => $validatedData['fecha_fin'],
            'empleado_id' => $empleado->id,
        ]);

        Item::create([
            'num_item' => $validatedData['num_item'],
            'descripcion' => $validatedData['descripcion_item'],
            'empleado_id' => $empleado->id,
            //'cargo_empleado' => $cargo_empleado->id
        ]);

        HorarioAsignado::create([
            'hora_inicio' => $validatedData['hora_inicio'],
            'hora_fin' => $validatedData['hora_fin'],
            'empleado_id' => $empleado->id,
            'turno_id' => $validatedData['turno_id'],
        ]);

        return redirect()->route('empleado.create-step4');
    }

    public function createStep4(Request $request)
    {
        return view('empleado.create-step4');
    }

    public function postCreateStep4(Request $request)
    {
        $empleado = Empleado::find($request->session()->get('empleado_id'));

        $validatedData = $request->validate([
            'nombre_file' => 'required',
            'file_pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $filePath = $request->file('file_pdf')->store('files', 'public');

        File::create([
            'nombre_file' => $validatedData['nombre_file'],
            'file_pdf' => $filePath,
            'empleado_id' => $empleado->id,
        ]);

        return redirect()->route('empleado.index')->with('success', 'Empleado registrado exitosamente con su archivo PDF');
    }

    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.show', compact('empleado'));
    }

    public function index()
    {
        $empleado = Empleado::all();
        return view('empleado.index', compact('empleado'));
    }

    public function edit(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $departamentos = Departamento::all();
        $distritos = Distrito::all();
        $areasPuesto = AreaPuesto::all();
        $cargoEmpleado = CargoEmpleado::all();
        $nivelesEstudio = NivelEstudio::all();
        $especialidades = Especialidad::all();
        
        return view('empleado.edit', compact('empleado','departamentos', 'distritos', 'areasPuesto', 'cargoEmpleado', 'nivelesEstudio', 'especialidades')); 
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);

        $validatedData = $request->validate([
            'ci' => 'required|max:20|unique:empleado,ci,' . $empleado->id,
            'nombre' => 'required',
            'segundo_nombre' => 'nullable',
            'apellido_p' => 'required',
            'apellido_m' => 'nullable',
            'fecha_nacimiento' => 'required|date',
            'estado_civil' => 'required',
            'telefono' => 'nullable|max:20',
            'direccion1' => 'nullable',
            'direccion2' => 'nullable',
            'genero' => 'required',
            'departamento_id' => 'required',
            'distrito_id' => 'required',
            'area_puesto_id' => 'required',
            'cargo_empleado_id' => 'required',
            'nivel_estudio_id' => 'required',
            'especialidad_id' => 'required',
            'tipo_contrato' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
            'num_item' => 'required',
            'descripcion_item' => 'nullable',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'turno_id' => 'required',
        ]);

        $empleado->update($validatedData);

        // Actualizar contratacion, item y horario asignado
        $empleado->contratacion->update([
            'tipo_contrato' => $validatedData['tipo_contrato'],
            'fecha_inicio' => $validatedData['fecha_inicio'],
            'fecha_fin' => $validatedData['fecha_fin'],
        ]);

        $empleado->item->update([
            'num_item' => $validatedData['num_item'],
            'descripcion' => $validatedData['descripcion_item'],
        ]);

        $empleado->horarioAsignado->update([
            'hora_inicio' => $validatedData['hora_inicio'],
            'hora_fin' => $validatedData['hora_fin'],
            'turno_id' => $validatedData['turno_id'],
        ]);

            return redirect()->route('empleado.index')->with('success', 'Empleado actualizado correctamente');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado correctamente');
    }

}