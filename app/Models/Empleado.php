<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleado';

    protected $fillable = [
        'ci',
        'nombre',
        'segundo_nombre',
        'apellido_p',
        'apellido_m',
        'fecha_nacimiento',
        'estado_civil',
        'telefono',
        'direccion1',
        'direccion2',
        'imagen',
        'genero',
        'tipo_sangre_id',
        'departamento_id',
        'distrito_id',
        'area_puesto_id',
        'cargo_empleado_id',
        'nivel_estudio_id',
        'especialidad_id',
        'fecha_contratado',
        'turno_trabajo_id',
        'licencia_conducir_id'
    ];

    public function item()
    {
        return $this->hasOne(Item::class, 'empleado_id', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'distrito_id');
    }

    public function contratacion()
    {
        return $this->hasOne(Contratacion::class, 'empleado_id');
    }

    public function area_puesto()
    {
        return $this->belongsTo(AreaPuesto::class, 'area_puesto_id');
    }

    public function cargo_empleado()
    {
        return $this->belongsTo(CargoEmpleado::class, 'cargo_empleado_id');
    }

    public function horario_asignado()
    {
        return $this->hasOne(HorarioAsignado::class, 'empleado_id');
    }

    public function turno_trabajo()
    {
        return $this->belongsTo(TurnoTrabajo::class, 'turno_trabajo_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'empleado_id');
    }

    public function nivel_estudio()
    {
        return $this->belongsTo(NivelEstudio::class, 'nivel_estudio_id');
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'especialidad_id');
    }

    public function licencia_conducir()
    {
        return $this->belongsTo(LicenciaConducir::class, 'licencia_conducir_id');
    }

    public $timestamps = false;
}
